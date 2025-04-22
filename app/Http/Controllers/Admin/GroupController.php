<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class GroupController extends Controller
{

    public function storeGroup(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255|',
            'status' => 'required',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check if validation fails
        if ($validator->fails()) {
            // Return a JSON response with validation errors
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors(),
            ]); // HTTP status code 422 Unprocessable Entity
        }
        $group_exist = Group::where('name', $request->name)->first();
        if (!empty($group_exist)) {
            return response()->json([
                'status' => 'error',
                'message' => ['name' => ['Group name already exists']],
            ]);
        }
        $groupSlug = str::slug($request->name);

        $group = Group::create([
            'name' => $request->name,
            'status' => $request->status,
            'slug' => $groupSlug
        ]);
        ActivityLogger::log('Group Created', 'A new Group was created with Name: ' . $request->name);
        if ($group) {

            return response()->json([
                'action' => 'add',
                "status" => "success",
                "message" => "Group Insert successfully.",
                "data" => $group
            ]);
        }
    }

    public function Editgroup($id)
    {
        if (!empty($id)) {
            $gropuData = Group::where('id', $id)->first();
            if (!empty($gropuData)) {
                return response()->json([
                    "status" => "success",
                    "data" => $gropuData
                ]);
            }
        }
    }


    public function UpdateGroup(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255|',
            'status' => 'required',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check if validation fails
        if ($validator->fails()) {
            // Return a JSON response with validation errors
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors(),
            ]); // HTTP status code 422 Unprocessable Entity
        }
        $group_exist = Group::where('name', $request->name)->where('id', '!=', $request->group_id)->first();
        if (!empty($group_exist)) {
            return response()->json([
                'status' => 'error',
                'message' => ['name' => ['Group name already  exists']],
            ]);
        }

        if (!empty($request->group_id)) {
            $group_id = $request->group_id;
            $group = Group::find($group_id);
            $group->name = $request->name;
            $group->slug = str::slug($request->name);
            $group->status = $request->status;
            $group->save();
            ActivityLogger::log('Group Updated', 'Group ' . $request->name . ' was updated.');
            $groups = Group::all();


            if ($groups) {
                return response()->json([
                    'action' => 'update',
                    'status' => 'success',
                    'message' => 'Role update successfully',
                    'data' => $groups, // Optionally return the created role data
                ]);
            }
        }
    }

    public function DeleteGroup($id)
    {
        if ($id) {
            $group = Group::find($id);
            if ($group->delete()) {
                User::where('assigned_group', $id)->update(['assigned_group' => null]);
                ActivityLogger::log('Group Deleted', 'Group ' . $group->name . ' has been deleted.');
                return response()->json([
                    'status' => 'success',
                    'message' => 'Group Delete successfully',

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
