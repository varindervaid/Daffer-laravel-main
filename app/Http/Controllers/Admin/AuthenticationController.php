<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Controllers\Admin\ActivityLogger;

class AuthenticationController extends Controller
{
    public function signin()
    {

        return view('pages.signin');
    }

    public function login(Request $request){

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {

            $userData=User::where('email',$request->email)->first();
            if($userData->status=='2'){
                Auth::logout();

                return back()->withErrors(['email' => 'Your Request are still pending kindly waits until it accepts by admin.']);
            }elseif($userData->status=='0'){
                Auth::logout();

                return back()->withErrors(['email' => 'Your account is currently inactive. Please contact the administrator for further assistance.']);
            }
            ActivityLogger::log('User Logged In', 'User ' . Auth::user()->name . ' has logged in successfully.');


            // Authentication passed
            return redirect()->intended('/index'); // Redirect to intended page after login
        } else {

            // Authentication failed

            return back()->withErrors(['invalid' => 'Invalid credentials']); // Redirect back with error message
        }
    }

    public function logout(){
        ActivityLogger::log('User Logged Out', 'User ' . Auth::user()->name . ' has logged out successfully.');
        Auth::logout();
        return redirect('/');
    }


    public function signup()
    {
        return view('pages.signup');
    }
    public function forgot()
    {
        return view('pages.forgot');
    }
    public function reset($token)
    {
        $email_exist = DB::table('password_reset_tokens')->where('token', $token)->value('email');
        if(empty($email_exist)){
            return redirect('forgot')->with('error','something went wrong!');
        }

        return view('pages.reset',['email'=>$email_exist,'token'=>$token]);
    }
    public function lockscreen()
    {
        return view('pages.lockscreen');
    }
    public function underconstruction()
    {
        return view('pages.underconstruction');
    }
    public function error404()
    {
        return view('pages.error404');
    }
    public function error500()
    {
        return view('pages.error500');
    }

    public function ForgotPassword(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);

        // Check if user exists
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'No user found with that email address.']);
        }

        // Create a password reset token
        $token = Str::random(60);

        // Store the token in the password_resets table (Laravel automatically handles this for the built-in method)
        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $user->email],
            ['email' => $user->email, 'token' => $token, 'created_at' => now()]
        );

        // Send password reset email
        Mail::send('email.password_reset', ['user' => $user,'token' => $token], function ($message) use ($user) {
            $message->to($user->email);
            $message->subject('Password Reset');
        });

        return redirect('forgot')->with('status', 'Password reset link sent successfully.');
    }

    public function showResetForm(Request $request,$token){
        $email = DB::table('password_reset_tokens')->where('token', $token)->value('email');

        return view('auth.reset-password', ['token' => $token, 'email' => $request->email]);
    }

    public function updatePassword(Request $request)
    {

        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
        $tokenData = DB::table('password_reset_tokens')->where('token', $request->token)->first();

        if (!$tokenData) {
            return back()->withErrors(['email' => 'Invalid token']);
        }

        // Retrieve the user from the database
        $user = User::where('email', $request->email)->first();

        // Update the user's password
        if ($user) {
            $user->password = Hash::make($request->password);
            $user->save();

            // Optional: You may also delete the token from password_resets table
            DB::table('password_reset_tokens')->where('email', $request->email)->delete();

            return redirect('/')->with('status', 'Password updated successfully');
        }

        return back()->withErrors(['email' => 'User not found']);
    }

    public function UserSignup(Request $request){

        $validatedData = [
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'profile_image' => 'required',
            'name' => 'required'
        ];
        $validator = Validator::make($request->all(), $validatedData);

        // Check if validation fails
        if ($validator->fails()) {
            // Return a JSON response with validation errors
            return response()->json([
                'status' => 'error',
                'errors'=> $validator->errors()->messages(),
                'message' =>"something Went wrong!",
            ]); // HTTP status code 422 Unprocessable Entity
        }
        $userSlug=str::slug('User');

        $role_exist=Role::where('Slug',$userSlug)->first();
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->role_id=intval($role_exist->id);
        $user->password=Hash::make($request->password);
         // Check if a file is uploaded
        if ($request->hasFile('profile_image')) {
            // Get the uploaded file
            $file = $request->file('profile_image');

            // Store the file in the 'public/profile_images' directory
            $filePath = $file->store('public/profile_images');

            // Save the file path in the database
            $user->profile_image = $filePath;
        }
        $user->save();
        return response()->json([
            'status' => 'success',
            'message' => 'Your account has been created successfully. Please wait for admin approval before accessing your account!',
        ], 200);

        //return redirect()->route('account.create')->with('success', 'User created successfully!');

    }
    public function createAccount(){
             return view('auth.create-account');
    }
}
