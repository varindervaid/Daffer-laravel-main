<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Controllers\admin\ActivityLogger;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $userName = Auth::user();
        $currentDate = Carbon::now();
        $formattedDate = $currentDate->format('l jS, F Y');
        return view('pages.index', ['user' => $userName, 'date' => $formattedDate]);
    }


    // public function userUpdate(Request $request)
    // {

    //     $validatedData = [
    //         'email' => [
    //             'required',
    //             'email',
    //             Rule::unique('users')->ignore($request->userId),
    //         ],
    //         'status' => 'required',
    //         'name' => 'required',
    //         'role' => 'required',
    //         'group' => 'required'
    //     ];

    //     if ($request->filled('password')) {
    //         $validatedData['password'] = 'required|confirmed|min:6|max:20';
    //         $validatedData['password_confirmation'] = 'required';
    //     }
    //     if ($request->hasFile('profile_image')) {
    //         $validatedData['profile_image'] = 'image|mimes:jpeg,png,jpg|max:2048';
    //     }

    //     $validator = Validator::make($request->all(), $validatedData);

    //     // Check if validation fails
    //     if ($validator->fails()) {
    //         return redirect()->back()
    //             ->withErrors($validator)
    //             ->withInput(); // Redirect back with error messages and input
    //     }



    //     $userData = User::find($request->userId);
    //     if ($request->filled('password')) {
    //         $userData->password = Hash::make($request->password);
    //     }

    //     $userData->status = $request->status;
    //     $userData->email = strtolower($request->email);
    //     $userData->name = $request->name;
    //     $userData->role_id = $request->role;
    //     $userData->assigned_group = implode(',', $request->group);

    //     if ($request->hasFile('profile_image')) {
    //         if ($userData->profile_image && file_exists(public_path('storage/' . $userData->profile_image))) {
    //             unlink(public_path('storage/' . $userData->profile_image));
    //         }
    //         $file = $request->file('profile_image');
    //         $fileName = time() . '_' . $file->getClientOriginalName();
    //         $filePath = $file->move(public_path('storage/profile_images'), $fileName);

    //         // Save the relative file path in the database
    //         $userData->profile_image = 'profile_images/' . $fileName;
    //     }

    //     $result = $userData->save();

    //     // Log activity
    //     ActivityLogger::log(
    //         'User Updated',
    //         'User ' . Auth::user()->name . ' updated the user ' . $request->name
    //     );

    //     if ($result) {
    //         return redirect()->route('user.management') // Change to your desired route
    //             ->with('success', 'Status successfully updated'); // Redirect with success message
    //     } else {
    //         return redirect()->back()
    //             ->with('error', 'Something went wrong'); // Redirect back with error message
    //     }
    // }

    // public function userStore(Request $request)
    // {


    //     $validatedData = [
    //         'email'             =>  'required|email|unique:users,email',
    //         'status'            =>  'required',
    //         'name'              =>  'required',
    //         'password'          =>  'required|confirmed|min:6|max:20',
    //         'password_confirmation'  =>  'required',
    //         'role'              =>  'required',
    //         'group'              =>  'required'
    //     ];
    //     if ($request->hasFile('profile_image')) {
    //         $validatedData['profile_image'] = 'image|mimes:jpeg,png,jpg|max:2048';
    //     }
    //     $validator = Validator::make($request->all(), $validatedData);

    //     // Check if validation fails
    //     if ($validator->fails()) {
    //         // Return a JSON response with validation errors
    //         return response()->json([
    //             'status' => 'error',
    //             'errors' => $validator->errors()->messages(),
    //             'message' => "something Went wrong!",
    //         ]); // HTTP status code 422 Unprocessable Entity
    //     }

    //     $user                   =       new user();
    //     $user->status           =       $request->status;
    //     $user->email            =       strtolower($request->email);
    //     $user->name             =       $request->name;
    //     $user->role_id          =       $request->role;
    //     $user->assigned_group   =       implode(',', $request->group);
    //     $user->password =       Hash::make($request->password);
    //     // Check if a file is uploaded
    //     if ($request->hasFile('profile_image')) {
    //         $file = $request->file('profile_image');
    //         $fileName = time() . '_' . $file->getClientOriginalName();
    //         $file->move(public_path('storage/profile_images'), $fileName);

    //         // Save the relative file path in the database
    //         $user->profile_image = 'profile_images/' . $fileName;
    //     }
    //     $result         =       $user->save();
    //     ActivityLogger::log('User Created', 'A new user was created with Name: ' . $request->name);

    //     if ($result) {
    //         Mail::send('email.user_register', [
    //             'name'     => $request->name,
    //             'password' => $request->password
    //         ], function ($message) use ($request) {
    //             $message->to($request->email);
    //             $message->subject('Account Created Successfully');
    //         });
    //         return response()->json([
    //             "status" => "success",
    //             "message" => "User created success fully"
    //         ]);
    //     } else {
    //         return response()->json([
    //             "status" => "error",
    //             "data" => "something went wprng"
    //         ]);
    //     }
    // }







    function changePassword(Request $request)
    {
        $validatedData = [
            'password'          =>  'required|confirmed|min:6|max:20',
            'password_confirmation'  =>  'required',
        ];
        $validator = Validator::make($request->all(), $validatedData);

        // Check if validation fails
        if ($validator->fails()) {
            // Return a JSON response with validation errors
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()->messages(),
                'message' => "something Went wrong!",
            ]); // HTTP status code 422 Unprocessable Entity
        }
        $user = User::find(Auth::id());
        $user->password =       Hash::make($request->password);
        if ($user->save()) {
            ActivityLogger::log('Password Changed', 'The password was changed for user: ' . $user->name);
            Auth::logout();
            return response()->json([
                "status" => "success",
                "message" => "User created success fully"
            ]);
        }
    }


    // public function getDatabaseConfig(): JsonResponse
    // {
    //     $config = [
    //         'DB_CONNECTION' => env('DB_CONNECTION'),
    //         'DB_HOST' => env('DB_HOST'),
    //         'DB_PORT' => env('DB_PORT'),
    //         'DB_DATABASE' => env('DB_DATABASE'),
    //         'DB_USERNAME' => env('DB_USERNAME'),
    //         'DB_PASSWORD' => env('DB_PASSWORD'),
    //     ];
    //     ActivityLogger::log('Database Configuration Copied', 'User ' . Auth::user()->name . ' has copied the database configuration details.');

    //     return response()->json([
    //         "status" => "success",
    //         "config"   => $config

    //     ]);
    // }


    // public function groupExport(Request $request)
    // {
    //     $searchValue = $request->input('search'); // Single search parameter
    //     ActivityLogger::log('Export group', 'User ' . Auth::user()->name . ' has exported the group.');
    //     return new GroupExport($searchValue);
    //     //return new ActivityLogExport();
    // }


    // function uploadProfileImage(Request $request)
    // {
    //     $validatedData = [
    //         'profile_image'             =>  'required|image|mimes:jpeg,png,jpg|max:2048',

    //     ];
    //     $validator = Validator::make($request->all(), $validatedData);
    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => 'error',
    //             'errors' => $validator->errors()->messages(),
    //             'message' => "something Went wrong!",
    //         ]);
    //     }
    //     $userData   =   User::find(Auth::id());
    //     if ($request->hasFile('profile_image')) {
    //         if ($userData->profile_image && file_exists(public_path('storage/' . $userData->profile_image))) {
    //             unlink(public_path('storage/' . $userData->profile_image));
    //         }
    //         $file = $request->file('profile_image');
    //         $fileName = time() . '_' . $file->getClientOriginalName();
    //         $filePath = $file->move(public_path('storage/profile_images'), $fileName);
    //         $userData->profile_image = 'profile_images/' . $fileName;
    //     }
    //     $result =  $userData->save();
    //     //ActivityLogger::log('User updated', 'User ' . $request->userName . ' updated');
    //     ActivityLogger::log(
    //         'Profile image updated',
    //         'User ' . Auth::user()->name . ' updated the  profile image '
    //     );
    //     if ($result) {
    //         return response()->json([
    //             "status" => "success",
    //             "message" => "Profile image updated successfully"
    //         ]);
    //     } else {
    //         return response()->json([
    //             "status" => "error",
    //             "data" => "something went wprng"
    //         ]);
    //     }
    // }




}
