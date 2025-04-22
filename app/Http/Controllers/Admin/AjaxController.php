<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Data;
use App\Models\DataActivity;
use App\Models\Folder;
use App\Models\FolderGroup;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\RecentVisit;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    function groupSingleData(Request $request)
    {
        $group = Group::find($request->id);

        if ($group) {
            return response()->json($group);
        } else {
            return response()->json(['error' => 'Group not found'], 404);
        }
    }

    function getDataActivityNote(Request $request){
        $dataActivity   =  DataActivity::find($request->id);
        if($dataActivity){
            return response()->json($dataActivity);
        }
        return response()->json(['error' => 'dataActivity not found'], 404);
    }

    function checkDataGroupName(Request $request)
    {

        // Decode the data ID
        $data_id = base64_decode(urldecode($request->data_id));
        $group_name = strtolower($request->group_name);
        if (!empty($request->old_group_name)) {
            if ($request->old_group_name == $group_name) {
                return response()->json(['status' => 'success', 'message' => 'Group name does not exist'], 200);
            }
        }
        // Fetch the data from the database
        $dataEntry = Data::find($data_id);

        // Check if the data entry exists
        if (!$dataEntry) {
            return response()->json(['status' => 'error', 'message' => 'Data file not found'], 200);
        }

        // Decode the JSON data
        $data = json_decode($dataEntry->data, true);

        // Check if the group name (e.g., "device") exists as a key
        if (array_key_exists($group_name, $data)) {
            return response()->json(['status' => 'error', 'message' => 'Group name already exists'], 200);
        }

        return response()->json(['status' => 'success', 'message' => 'Group name does not exist'], 200);
    }


    function getFolderDetails($folder_id)
    {
        // Fetch the folder details
        $folderDetails = Folder::find($folder_id);

        // Fetch group IDs associated with the folder
        $group_ids = FolderGroup::where('folder_id', $folder_id)
            ->pluck('group_id')
            ->toArray();

        // Retrieve group names using whereIn
        $groups = Group::whereIn('id', $group_ids)->get(['id', 'name']);
        $group_names = $groups->map(function ($group) {
            return [
                'id' => $group->id,
                'name' => $group->name,
            ];
        })->toArray();

        // Retrieve users assigned to the specified groups
        $user_data = collect(); // Initialize as an empty collection
        if (!empty($group_ids)) {
            $user_data = User::where(function ($query) use ($group_ids) {
                foreach ($group_ids as $id) {
                    $query->orWhereRaw("FIND_IN_SET(?, assigned_group)", [$id]);
                }
            })->select('name', 'profile_image')->get(); // Select both fields
        }

        // Map the user data if the collection is not empty
        $user_info = $user_data->map(function ($user) {
            return [
                'name' => $user->name,
                'profile_image' => $user->profile_image,
            ];
        })->toArray();

        // Check if the folder exists
        if ($folderDetails) {
            // Return a success response with the folder details
            return response()->json([
                'status' => 'success',
                'message' => 'Folder found successfully',
                'folder' => $folderDetails,
                'group_names' => $group_names,
                'user_info' => $user_info
            ]);
        } else {
            // Return an error response if the folder doesn't exist
            return response()->json([
                'status' => 'error',
                'message' => 'Folder not found'
            ], 404);  // 404 status code for not found
        }
    }



    function getFileDetails($file_id)
    {
        // Fetch the folder details
        $fileDetails = Data::find($file_id);

        // Check if the folder exists
        if ($fileDetails) {
            // Return a success response with the folder details
            return response()->json([
                'status' => 'success',
                'message' => 'Folder found successfully',
                'file' => $fileDetails
            ]);
        } else {
            // Return an error response if the folder doesn't exist
            return response()->json([
                'status' => 'error',
                'message' => 'Folder not found'
            ], 404);  // 404 status code for not found
        }
    }

    function recentVisit(Request $request)
    {

        $recentVisitId = $request->recent_visit_id;
        $type = $request->type;

        $columnType = 'folder_id';
        $dataTypeId1 = 'group_id';
        $dataTypeId2 = 'file_id';
        if ($type == 'group') {
            $columnType = 'group_id';
            $dataTypeId1 = 'folder_id';
            $dataTypeId2 = 'file_id';
        } elseif ($type == 'file') {
            $columnType = 'file_id';
            $dataTypeId1 = 'folder_id';
            $dataTypeId2 = 'group_id';
        }

        // Get the count of recent visits for the authenticated user
        $visitCount = RecentVisit::where('user_id', Auth::id())->count();
        $q = RecentVisit::where('user_id', Auth::id())
            ->orderBy('updated_at', 'ASC');
        $q1 = clone $q;

        if ($visitCount == 4) {
            if ($q->where($columnType, $recentVisitId)->first()) {
                $q->touch();
            } else {
                $q1->first()->update([
                    $columnType => $recentVisitId,
                    $dataTypeId1 => null,
                    $dataTypeId2 => null,
                ]);
            }
        } else {
            if ($q->where($columnType, $recentVisitId)->first()) {
                $q->touch();
            } else {
                RecentVisit::create([
                    $columnType => $recentVisitId,
                    'user_id' => Auth::id()
                ]);
            }
        }
    }

    function checkFileNameExixtsOrNot(Request $request)
    {

        $folder_id = base64_decode(urldecode($request->folder_id));

        if (!empty($request->id)) {
            //dd('dfdfd');
            $file_id =   base64_decode(urldecode($request->id));
            $fileData   =   Data::find($file_id);
            if (Data::where(['file_name' => strtolower($request->file_name), 'folder_id' => $fileData->folder_id])->where('id', '!=', $file_id)->exists()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'File name already exists'
                ]);
            }
        } else {
            if (Data::where(['file_name' => $request->file_name, 'folder_id' => $folder_id])->exists()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'File name already exists'
                ]);
            }
        }
    }
}
