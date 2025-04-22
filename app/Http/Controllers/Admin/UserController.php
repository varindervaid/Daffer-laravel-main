<?php

namespace App\Http\Controllers\Admin;

use App\Exports\UserExport;
use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\Group;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    public function UserManagement(Request $request)
    {
        $roles = Role::orderBy('id', 'desc')->where('id', '!=', 1)->get();
        $allGroup = Group::latest()->get();
        $query  =   User::where('role_id', '!=', 1);



        if ($request->search != '') {
            $query->where(function ($q) use ($request) {
                $q->where('users.name', 'like', '%' . $request->search . '%')
                    ->orWhere('users.email', 'like', '%' . $request->search . '%');
            });
        }

        // Filter by group ID using FIND_IN_SET
        if ($request->group != '') {
            $query->whereRaw("FIND_IN_SET(?, users.assigned_group)", [$request->group]);
        }


        // Filter by role ID
        if ($request->role != '') {
            $query->where('users.role_id', $request->role);
        }

        // Filter by status
        if ($request->status != '') {
            $query->where('users.status', $request->status);
        }

        $query->orderBy('users.id', 'desc');
        // $users = $query->get();
        $authUserId = Auth::id(); // Get the authenticated user's ID
        $users = $query->when($authUserId !== 1, function ($query) use ($authUserId) {
            $query->where('created_by', $authUserId);
        })->get();

        return view('pages.userlist', ['roles' => $roles, 'allGroup' => $allGroup, 'users' => $users]);
    }

    function addUser()
    {
        return view('pages.admin.user.addData');
    }


    public function storeUser(Request $request)
    {
        // Validation rules
        $validatedData = [
            'email' => 'required|email|unique:users,email',
            'status' => 'required',
            'name' => 'required',
            'password' => 'required|confirmed|min:6|max:20',
            'password_confirmation' => 'required',
            'role' => 'required',
            'group' => 'required', // Validate as an array
        ];

        // Check if a file is uploaded
        if ($request->hasFile('profile_image')) {
            $validatedData['profile_image'] = 'image|mimes:jpeg,png,jpg|max:2048';
        }

        // Validate request data
        $validator = Validator::make($request->all(), $validatedData);

        // Check if validation fails
        if ($validator->fails()) {
            // Redirect back with errors and old input
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create a new user instance
        $user = new User();
        $user->status   =   $request->status;
        $user->email    =   strtolower($request->email);
        $user->name     =   $request->name;
        $user->role_id  =   $request->role;
        $user->assigned_group = $request->group;
        $user->created_by   = Auth::id();
        $user->password     = Hash::make($request->password);

        if ($request->hasFile('profile_image')) {
            $file       = $request->file('profile_image');
            $fileName   = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/profile_images'), $fileName);
            $user->profile_image = 'profile_images/' . $fileName;
        }

        $result = $user->save();
        ActivityLogger::log('User Created', 'A new user was created with Name: ' . $request->name);

        if ($result) {
            Mail::send('email.user_register', [
                'name' => $request->name,
                'password' => $request->password
            ], function ($message) use ($request) {
                $message->to($request->email);
                $message->subject('Account Created Successfully');
            });

            return redirect()->route('user.management')->with('success', 'User created successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong while creating the user.');
        }
    }

    public function editUser($id)
    {
        if (!empty($id)) {
            $userData = User::where('id', $id)->first();
            if (!empty($userData)) {
                return response()->json([
                    "status" => "success",
                    "data" => $userData
                ]);
            }
        }
    }
    public function updateUser(Request $request)
    {
        $validatedData = [
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($request->userId),
            ],
            'status'            =>  'required',
            'name'              =>  'required',
            'role'              =>  'required',
            'group'             =>  'required'
        ];

        if ($request->has('password')) {
            $validatedData['password'] = 'required|confirmed|min:6|max:20';
            $validatedData['password_confirmation'] = 'required';
        }
        if ($request->hasFile('profile_image')) {
            $validatedData['profile_image'] = 'image|mimes:jpeg,png,jpg|max:2048';
        }
        $validator = Validator::make($request->all(), $validatedData);

        // Check if validation fails
        if ($validator->fails()) {
            // Return a JSON response with validation errors
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()->messages(),
                'message' => "something Went wrong!",
            ]);
        }

        $userData = User::find($request->userId);
        if ($request->filled('password')) {
            $userData->password =       Hash::make($request->password);
        }

        $userData->status       = $request->status;
        $userData->email        = strtolower($request->email);
        $userData->name         = $request->name;
        $userData->role_id      = $request->role;
        $userData->assigned_group   =       implode(',', $request->group);
        $userData->status       = $request->status;

        if ($request->hasFile('profile_image')) {
            if ($userData->profile_image && file_exists(public_path('storage/' . $userData->profile_image))) {
                unlink(public_path('storage/' . $userData->profile_image));
            }
            $file = $request->file('profile_image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->move(public_path('storage/profile_images'), $fileName);
            $userData->profile_image = 'profile_images/' . $fileName;
        }

        $result =  $userData->save();
        ActivityLogger::log(
            'User Updated',
            'User ' . Auth::user()->name . ' updated the  user ' . $request->name
        );
        if ($result) {
            return response()->json([
                "status" => "success",
                "message" => "Status successfully updated"
            ]);
        } else {
            return response()->json([
                "status" => "error",
                "data" => "something went wprng"
            ]);
        }
    }

    function deleteUser(Request $requesr)
    {
        $user   =  User::find($requesr->id);
        if ($user->delete()) {
            ActivityLogger::log('User deleted', "User {$user->name} has been deleted.");

            return response()->json([
                "status"    => "success",
                "message"   => "User created success fully"
            ]);
        } else {
            return response()->json([
                "status"    => "error",
                "message"   => "something went wprng"
            ]);
        }
    }

    public function userDetails($id)
    {
        $user       =   user::find(base64_decode(urldecode($id)));
        $logs       =   ActivityLog::with('user')->latest()->get();
        return view('pages.admin.user.userDetails', compact('user'));
    }


    function myProfile()
    {
        $user       =   user::find(Auth::user()->id);
        $logs       =   ActivityLog::with('user')->latest()->get();
        return view('pages.admin.user.myProfile', compact('user'));
    }

    public function userExport(Request $request)
    {
        $searchValue    =   $request->input('search');
        $group          =   $request->input('group');
        $role           =   $request->input('role');
        $status         =   $request->input('status');
        ActivityLogger::log('Export user', 'User ' . Auth::user()->name . ' has exported the user.');
        return new UserExport($searchValue, $group, $role, $status);
    }

    function deleteProfileImage(Request $request)
    {

        $user =   user::find($request->id);
        if ($user->profile_image && file_exists(public_path('storage/' . $user->profile_image))) {
            unlink(public_path('storage/' . $user->profile_image));
        }
        $user->profile_image    =   null;
        if ($user->save()) {
            ActivityLogger::log('Profile image removed', 'User ' . $user->name . ' has removed profile image.');

            return response()->json([
                "status" => "success",
                "message" => "Profile image deleted successfully"
            ]);
        } else {
            return response()->json([
                "status" => "error",
                "message" => "Something went worng"
            ]);
        }
    }




    public function saveCroppedImage(Request $request)
    {

        if ($request->has('image_value')) {
            // Get the base64 image string from the request
            $base64Image    =   $request->input('image_value');

            // Remove the "data:image/png;base64," part if present
            $base64Image    =   preg_replace('/^data:image\/\w+;base64,/', '', $base64Image);

            // Decode the base64 image
            $decodedImage   =   base64_decode($base64Image);
            // Define the file path and name
            $fileName       =   time() . '.png';
            $filePath       =   public_path('storage/profile_images/' . $fileName);
            //$filePath = 'public/storage/' . $fileName;

            if (!File::exists(public_path('storage/profile_images'))) {
                File::makeDirectory(public_path('storage/profile_images'), 0755, true);
            }

            // Save the decoded image to the specified path
            File::put($filePath, $decodedImage);
            $image  = 'profile_images/' . $fileName;
            $user   =  User::find(Auth::id());
            if (!empty($request->userId)) {
                $user   =  User::find(base64_decode(urldecode($request->userId)));
            }

            if ($user->profile_image) {
                $oldImagePath = public_path('storage/' . $user->profile_image);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }

            $user->profile_image    =   $image;
            $user->save();
            return response()->json([
                'status' => 'success',
                'file_path' => Storage::url($filePath) // Accessible URL to the image
            ]);
        }
        // Return an error response if no image was found
        return response()->json(['status' => 'error', 'message' => 'No image data provided'], 400);
    }


    function editProfile()
    {
        $user    =   user::find(Auth::user()->id);
        return view('pages.admin.user.editProfile', compact('user'));
    }
}
