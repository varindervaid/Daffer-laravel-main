<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class RoleController extends Controller
{
    public function storeRole(Request $request)
    {
        $rules = [
            'role' => 'required|string|max:255|',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ]);
        }

        $roleName   =   $request->role;
        $role       =   Role::where('name', $roleName)->first();

        if (!empty($role)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Role already exists',
            ]);
        }

        $slug = Str::slug($roleName);

        $role = Role::create([
            'name' => $roleName,
            'slug' => $slug,
        ]);
        ActivityLogger::log('Role Added', 'User ' . Auth::user()->name . ' added a new role with name: ' . $role->name . '.');

        return response()->json([
            'action' => 'add',
            'status' => 'success',
            'message' => 'Role added successfully',
            'data' => $role,
        ]);
    }

    public function EditRole($id)
    {
        if (!empty($id)) {
            $role = Role::where('id', $id)->first();
            return response()->json([
                'status' => 'success',
                'message' => 'Role fetch successfully',
                'data' => $role,
            ]);
        }
    }

    public function UpdateRole(Request $request)
    {
        $rules = [
            'role' => 'required|string|max:255|',
            'status' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        // Check if validation fails
        if ($validator->fails()) {
            // Return a JSON response with validation errors
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ]); // HTTP status code 422 Unprocessable Entity
        }
        $oldDetails = Role::findOrFail($request->role_id);

        // Capture the old name before updating
        $oldName = $oldDetails->name;
        $roleName = $request->role;
        $role = Role::where('name', $roleName)->where('id', '!=', $request->role_id)->first();

        if (!empty($role)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Role already exists',
            ]); // HTTP status code 404 Not Found
        }
        if (!empty($request->role_id)) {
            $role_id = $request->role_id;
            $role = Role::find($role_id);
            $role->name = $request->role;
            // $role->slug=str::slug($request->role);
            $role->status = intval($request->status);
            $role->save();

            ActivityLogger::log(
                'Role Updated',
                'User ' . Auth::user()->name . ' updated the role from "' . $oldName . '" to "' . $role->name . '".'
            );
            $roles = Role::all();

            if ($role) {
                return response()->json([
                    'action' => 'update',
                    'status' => 'success',
                    'message' => 'Role update successfully',
                    'data' => $roles, // Optionally return the created role data
                ]);
            }
        }
    }

    public function DeleteRole($id)
    {
        if ($id) {
            $role = Role::find($id);
            if ($role->delete()) {
                ActivityLogger::log('Role Deleted', 'Role ' . $role->name . ' has been deleted.');

                return response()->json([
                    'status' => 'success',
                    'message' => 'Role deleted successfully',

                ]);
            } else {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'SomeThing Went Wrong!',

                ]);
            }
        }
    }
}
