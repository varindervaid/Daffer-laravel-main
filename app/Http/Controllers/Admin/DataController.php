<?php

namespace App\Http\Controllers\Admin;


use App\Exports\FileDataExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Data;
use App\Models\DataImage;
use App\Models\Folder;
use App\Models\DataActivity;
use App\Models\FolderGroup;

class DataController extends Controller
{
    private function getFirstParentFolder($folderId)
    {
        $folder = Folder::find($folderId);
        while ($folder && $folder->parent_id) {
            $folder = Folder::find($folder->parent_id);
        }
        return $folder;
    }

    private function checkParentFolder($folder, $parent_id)
    {
        if ($folder->parent_id == $parent_id) {
            return $folder;
        } else {
            if ($folder->parent_id != null) {
                $folder = Folder::find($folder->parent_id);
                return $this->checkParentFolder($folder, $parent_id);
            }
            return  null;
        }
    }

    function DataManagement(Request $request)
    {
        $data = '';
        $groups = '';
        $assignedGroupIds = '';
        if (Auth::id() != '1') {
            // Get the user's assigned group IDs
            $assigned_groups = explode(',', Auth::user()->assigned_group);

            $folderIds = FolderGroup::whereIn('group_id', $assigned_groups)
                ->pluck('folder_id')
                ->toArray();
            // Fetch folders that match any of the user's assigned group IDs
            $folders = [];
            if (!empty($folderIds)) {
                $searchTerm = $request->search;
                $searchTermEscaped = addslashes($searchTerm);
                $folders = Folder::whereIn('id', $folderIds)
                    ->whereNull('parent_id')
                    ->when(!empty($searchTerm), function ($query) use ($searchTerm) {
                        $query->where('name', 'like', '%' . $searchTerm . '%'); // Replace 'name' with the column you want to search
                    })
                    ->orderBy('id', 'desc')
                    ->get();


                $folderIdsFromDataTable = DB::table('data')
                    ->where(function ($query) use ($searchTermEscaped) {
                        $query->where('data', 'LIKE', '%"value":"' . $searchTermEscaped . '"%')
                            ->orWhere('file_name', 'like', '%' . $searchTermEscaped . '%');
                    })->where('created_by', Auth::id())
                    ->pluck('folder_id');
                // Collect all top-level parent folders for the matched subfolders
                $topLevelParentFolders = collect();

                foreach ($folderIdsFromDataTable as $folderId) {
                    // Get the first parent folder for each matched folder
                    $parentFolder = $this->getFirstParentFolder($folderId);

                    if ($parentFolder) {
                        if (in_array($parentFolder->id, $folderIds)) {
                            $topLevelParentFolders->push($parentFolder);
                        }
                    }
                }
                // Merge results from folder and data table searches
                $folders = $folders->merge($topLevelParentFolders)->unique('id');
            }
        } else {

            $searchTerm = $request->search;
            $searchTermEscaped = addslashes($searchTerm);

            // Initialize the folders collection
            $folders = Folder::orderBy('id', 'desc')->whereNull('parent_id')->get();

            if ($searchTerm != '') {
                // Search folders by name
                $folders = Folder::where('name', 'LIKE', '%' . $searchTerm . '%')
                    ->orderBy('id', 'desc')
                    ->whereNull('parent_id')
                    ->get();

                // Search for matching values in the JSON stored as TEXT in the data table
                $folderIdsFromDataTable = DB::table('data')
                    ->where(function ($query) use ($searchTermEscaped) {
                        $query->where('data', 'LIKE', '%"value":"' . $searchTermEscaped . '"%')
                            ->orWhere('file_name', 'like', '%' . $searchTermEscaped . '%');
                    })
                    // ->where('data', 'LIKE', '%"value":"' . $searchTermEscaped . '"%')
                    ->pluck('folder_id');

                // Collect all top-level parent folders for the matched subfolders
                $topLevelParentFolders = collect();

                foreach ($folderIdsFromDataTable as $folderId) {
                    // Get the first parent folder for each matched folder
                    $parentFolder = $this->getFirstParentFolder($folderId);
                    if ($parentFolder) {
                        $topLevelParentFolders->push($parentFolder);
                    }
                }

                // Merge results from folder and data table searches
                $folders = $folders->merge($topLevelParentFolders)->unique('id');
            }
        }

        $class = "data_management";
        return view('pages.dataManagement.index', compact('data', 'groups', 'folders', 'assignedGroupIds', 'class'));
    }
    function getGroupData(Request $request, $group_id)
    {

        $group_id   =   base64_decode(urldecode($group_id));
        $authUser           =   Auth::id();
        $foldersWithData = Folder::when($authUser != '1', function ($query) use ($authUser) {
            return $query->where('created_by', $authUser);
        })
            ->where('group_id', $group_id)
            ->orderBy('id', 'desc')
            ->get();

        $datas = [];

        $parent_id   =   $group_id;
        $class = "data_management";
        return view('pages.dataManagement.folder', compact('foldersWithData', 'parent_id', 'datas', 'class'));
    }
    function getFolderData(Request $request, $folder_id)
    {

        $folder_id          =   base64_decode(urldecode($folder_id));
        $authUser           =   Auth::id();
        $parent_id          =   $folder_id;
        $folders    =   Folder::when($authUser != '1', function ($query) use ($authUser) {
            return $query->where('created_by', $authUser);
        })
            ->where('parent_id', $folder_id)->orderBy('id', 'desc')
            ->get();

        $datas = Data::when($authUser != '1', function ($query) use ($authUser) {
            return $query->where('created_by', $authUser);
        })
            ->where('folder_id', $folder_id)->orderBy('id', 'desc')
            ->get();

        $searchTerm = $request->search;
        $searchTermEscaped = addslashes($searchTerm);
        if ($searchTerm != '') {
            // Search for child folders that match the search term
            $folders = Folder::when($authUser != '1', function ($query) use ($authUser) {
                return $query->where('created_by', $authUser);
            })
                ->where('name', 'LIKE', '%' . $searchTerm . '%')
                ->where('parent_id', $folder_id) // Keep it under the current folder
                ->orderBy('id', 'desc')
                ->get();

            // Search for data within the current folder that matches the search term
            $datas = Data::when($authUser != '1', function ($query) use ($authUser) {
                return $query->where('created_by', $authUser);
            })
                ->where('folder_id', $folder_id) // Only search in the current folder
                ->where(function ($query) use ($searchTermEscaped) {
                    $query->where('data', 'LIKE', '%"value":"' . $searchTermEscaped . '"%')
                        ->orWhere('file_name', 'like', '%' . $searchTermEscaped . '%');
                })
                // Search in JSON "value"
                ->orderBy('id', 'desc')
                ->get();

            // Search for matching values in the JSON stored as TEXT in the data table
            $folderIdsFromDataTable = DB::table('data')
                ->where('data', 'LIKE', '%"value":"' . $searchTermEscaped . '"%')
                ->pluck('folder_id');
            $topLevelParentFolders = collect();

            foreach ($folderIdsFromDataTable as $folderId) {
                $folder = Folder::find($folderId);

                if (!empty($folder->parent_id) && $folder->parent_id != $parent_id) {

                    $new_parent_record =   $this->checkParentFolder($folder, $parent_id);
                    if ($new_parent_record != null) {

                        $topLevelParentFolders->push($new_parent_record);
                    }
                } else if ($folder->parent_id == $parent_id) {

                    $topLevelParentFolders->push($folder);
                }
            }
            $folders = $folders->merge($topLevelParentFolders)->unique('id');
        }


        return view('pages.dataManagement.folder', compact('parent_id', 'datas', 'folders'));
    }

    function CreateFolder(Request $request, $id = null)
    {

        $validatedData = [
            'name' => 'required|max:30',
        ];
        $validator = Validator::make($request->all(), $validatedData);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()->messages(),
                'message' => "something Went wrong!",
            ]);
        }
        if (
            Folder::where('name', strtolower($request->name))->where('parent_id', $id)
            ->exists()
        ) {

            return response()->json([
                'status' => 'error',
                'errors' => ['name' => ['Folder with this name already exists']],
                'message' => "Something went wrong!",
            ]);
        }

        $inputs['name']         =   $request->name;
        $inputs['parent_id']    =   $id !== null ? $id : null;
        $inputs['created_by']   =   Auth::id();
        if (Folder::create($inputs)) {
            ActivityLogger::log('Folder Created', 'User ' . Auth::user()->name . ' created a folder with name "' . $request->name . '"');
            return response()->json([
                "status" => "success",
                "message" => "Folder created successfully"
            ]);
        }
    }

    function addData(Request $request)
    {

        $folder_id  =   base64_decode(urldecode($request->folder_id));
        $group_id   =   base64_decode(urldecode($request->folder_id));
        $groupName  =   strtolower($request->group_name);

        if ($request->isMethod('post')) {
            //dd($request->group_name);
            $data               =   new Data();
            $allFields  =    [];
            $fields     =    [];
            $data->data                    =   json_encode($allFields);
            if (!empty($request->fields)) {
                foreach ($request->fields as $key => $field) {
                    $fields[] = [
                        'title' => $field['title'],
                        'value' => $field['value'],
                    ];
                }
                $allFields[$groupName] = $fields;
                $data->data         =   json_encode($allFields);
            }
            $data->file_name    =   strtolower($request->file_name);
            $data->created_by   =   Auth::id();
            $data->folder_id    =   $folder_id;
            $data->site         =   $request->site;
            $data->install_date =   date('Y-m-d', strtotime($request->install_date));
            $data->system_id    =   $request->system_id;
            $data->status       =   $request->status;


            if ($data->save()) {
                if ($request->hasFile('images')) {
                    foreach ($request->file('images') as $image) {
                        $filename = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();
                        $path = 'storage/uploads/' . $filename;
                        $image->move(public_path('storage/uploads'), $filename);
                        $dataImage = new DataImage();
                        $dataImage->data_id = $data->id;
                        $dataImage->image_path = $path;
                        $dataImage->save();
                    }
                }


                return redirect()->route('file.data', urlencode(base64_encode($data->id)))->with('success', 'Data stored successfully!');
            }
        }
        return view('pages.dataManagement.add', compact('group_id', 'folder_id'));
    }

    function addMoreData(Request $request)
    {

        $data       =  data::find(base64_decode(urldecode($request->id)));
        $folder_id  =   $data->folder_id;
        if ($request->isMethod('post')) {

            $existingData = json_decode($data->data, true) ?? [];

            $newFields  =    [];

            if (!empty($request->fields)) {
                foreach ($request->fields as $key => $field) {
                    $newFields[] = [
                        'title' => $field['title'],
                        'value' => $field['value'],
                    ];
                }
            }

            $groupName = strtolower($request->group_name);
            if (isset($existingData[$groupName])) {
                $existingData[$groupName] = array_merge($existingData[$groupName], $newFields);
            } else {
                $existingData[$groupName] = $newFields;
            }
            $data->data = json_encode($existingData);


            if ($data->save()) {
                return redirect()->route('file.data', urlencode(base64_encode($data->id)))->with('success', 'Data stored successfully!');
            }
        }
        return view('pages.dataManagement.addMoreData', compact('folder_id'));
    }

    function editGroupData(Request $request, $id, $grouped_name)
    {
        $data_id    =   base64_decode(urldecode($id));
        $data       =  data::find($data_id);
        if (!$data) {
            return redirect()->back()->with('error', 'Data not found.');
        }
        $decodedData = json_decode($data->data, true);
        if (!isset($decodedData[$grouped_name])) {
            // Handle case where the group name does not exist
            return redirect()->back()->with('error', 'Group name not found.');
        }

        $groupData = $decodedData[$grouped_name];
        if ($request->isMethod('post')) {
            // Fetch the existing data from the database
            $data = data::find(base64_decode(urldecode($request->id)));
            $existingData = json_decode($data->data, true) ?? [];

            // New fields to update from the request
            $newFields = [];

            // Populate the new fields from the request
            foreach ($request->fields as $key => $field) {
                $newFields[] = [
                    'title' => $field['title'],
                    'value' => $field['value'],
                ];
            }

            // Initialize the updated data array
            $updatedData = [];

            // Loop through the existing data

            $data->data = json_encode($updatedData);
            dd($data->data);
            // Save the data
            if ($data->save()) {


                return redirect()->route('file.data', urlencode(base64_encode($data->id)))->with('success', 'Data and group name updated successfully!');
            }
        }





        return view('pages.dataManagement.editGroupData', [
            'groupData' => $groupData,
            'grouped_name' => $grouped_name,
            'data_id' => $data_id
        ]);
    }

    function getFileData($id)
    {

        $id = base64_decode(urldecode($id));
        $data   =   Data::find($id);

        return view('pages.dataManagement.viewData', compact('data'));
    }

    function renameFolder(Request $request)
    {

        $validatedData = [
            'name' => 'required|max:30',
        ];
        $validator = Validator::make($request->all(), $validatedData);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()->messages(),
                'message' => "something Went wrong!",
            ]);
        }
        $folder     =   Folder::find($request->folder_id);
        $parent_id  =   $folder->parent_id != '' ? $folder->parent_id : null;

        if (Folder::where(['name' => $request->name, 'parent_id' => $parent_id])->where('id', '!=', $request->folder_id)->exists()) {

            return response()->json([
                'status' => 'error',
                'errors' => ['name' => ['Folder name is already exists']],
                'message' => "something Went wrong!",
            ]);
        }

        $old_folder = $folder->name;

        if ($folder) {
            $folder->name = $request->name;
            if ($folder->save()) {
                ActivityLogger::log('Folder Renamed', 'User ' . Auth::user()->name . ' renamed the folder from "' . $old_folder . '" to "' . $request->name . '".');
                return response()->json([
                    "status" => "success",
                    "message" => "Folder created successfully"
                ]);
            } else {
                return response()->json([
                    "status" => "error",
                    "message" => "Somthing went worng!"
                ]);
            }
        }
    }
    function renameFile(Request $request)
    {
        $validatedData = [
            'file_name' => 'required|max:50',
        ];
        $validator = Validator::make($request->all(), $validatedData);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()->messages(),
                'message' => "something Went wrong!",
            ]);
        }
        // Find the folder by ID
        $file = Data::find($request->file_id);
        if (Data::where(['file_name' => $request->file_name, 'folder_id' => $file->folder_id])->where('id', '!=', $request->file_id)->exists()) {
            return response()->json([
                'status' => 'error',
                'errors' => ['file_name' => ['File name already exists']],
                'message' => "something Went wrong!",
            ]);
        }

        $old_file = $file->file_name;
        if ($file) {
            $file->file_name = $request->file_name;
            if ($file->save()) {
                ActivityLogger::log('File Renamed', 'User ' . Auth::user()->name . ' renamed the file from "' . $old_file . '" to "' . $request->file_name . '".');
                return response()->json([
                    "status" => "success",
                    "message" => "File renamed successfully"
                ]);
            } else {
                return response()->json([
                    "status" => "error",
                    "message" => "somthing went wrong!"
                ]);
            }
        }
    }

    function DeleteFolder($id)
    {
        $folder =    Folder::find($id);
        $folder_name = $folder->name;
        if ($folder->delete()) {
            ActivityLogger::log('Folder Deleted', 'User ' . Auth::user()->name . ' deleted the folder  "' . $folder_name . '".');
            return response()->json([
                'status' => 'success',
            ]);
        } else {
            return response()->json([
                'status' => 'error',
            ]);
        }
    }

    function DeleteFile($id)
    {
        $file       =     Data::find($id);
        $old_file   =     $file->file_name;
        if ($file->delete()) {
            ActivityLogger::log('File Deleted', 'User ' . Auth::user()->name . ' deleted the file  "' . $old_file . '".');
            return response()->json([
                'status' => 'success',
            ]);
        } else {
            return response()->json([
                'status' => 'success',
            ]);
        }
    }

    function editData($id)
    {
        $id     = base64_decode(urldecode($id));
        $data   =   Data::find($id);
        return view('pages.dataManagement.edit', compact('data'));
    }

    function updateData(Request $request, $id)
    {
        $id                 =       base64_decode(urldecode($id));
        $data               =       Data::find($id);


        $data->file_name    =   $request->file_name;
        $data->site         =   $request->site;
        $data->install_date =   date('Y-m-d', strtotime($request->install_date));
        $data->system_id    =   $request->system_id;
        $data->status       =   $request->status;

        if ($data->save()) {

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $filename = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();
                    $path = 'storage/uploads/' . $filename;
                    $image->move(public_path('storage/uploads'), $filename);
                    $dataImage = new DataImage();
                    $dataImage->data_id = $data->id;
                    $dataImage->image_path = $path;
                    $dataImage->save();
                }
            }
            return redirect(route('file.data', [urlencode(base64_encode($id))]))->with('success', 'Data updated successfully!');            // return redirect()->route('data-management.folder', urlencode(base64_encode($folder_id)))->with('success', 'Data stored successfully!');
        }
    }

    function deleteDataGroup(Request $request)
    {
        $data           =   Data::find($request->id);
        $decodedData = json_decode($data->data, true);

        if (isset($decodedData[$request->groupName])) {
            unset($decodedData[$request->groupName]);
        }
        $data->data = json_encode($decodedData);
        $data->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Data group deleted successfully.',

        ]);
    }

    function exportFileData($id)
    {
        $id         =   base64_decode(urldecode($id));
        $file_name  =   Data::find($id)->file_name;
        ActivityLogger::log('Export data', 'User ' . Auth::user()->name . ' has exported the data from the file "' . $file_name . '".');
        return new FileDataExport($id);
    }

    public function exportData(Request $request)
    {
        // Start with retrieving the data
        $data = Data::query();

        // Apply filter for the 'search' (filter by file_name)
        if ($request->has('search') && $request->input('search') != '') {
            $data->where('file_name', 'like', '%' . $request->input('search') . '%');
        }

        // Apply filter for 'created_by' (filter by user who created the record)
        if ($request->has('created_by') && $request->input('created_by') != '') {
            $data->where('created_by', base64_decode(urldecode($request->input('created_by'))));
        }

        // Apply filter for 'created_at' (filter by date)
        if ($request->has('created_at') && $request->input('created_at') != '') {
            $data->whereDate('created_at', (date('Y-m-d', strtotime($request->input('created_at')))));
        }

        // If the user is not admin (not user ID '1'), only show data created by the logged-in user
        if (Auth::id() != 1) {
            $data->where('created_by', Auth::id());
        }

        // Retrieve the filtered data
        $data = $data->orderBy('id', 'desc')->get();
        $class = 'active44';

        // Return the filtered data to the view
        return view('pages.dataManagement.exportData', compact(['data', 'class']));
    }


    function assignGroupToFolder1(Request $request)
    {
        $folder =    Folder::find($request->folder_id);
        dd($folder);
    }

    public function assignGroupToFolder(Request $request)
    {

        $folder = Folder::find($request->folder_id);

        $data = [
            'folder_id' => $request->folder_id,
            'group_id' => $request->group_id,
        ];
        if (FolderGroup::where(['folder_id' => $request->folder_id, 'group_id' => $request->group_id])->exists()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Group already assigned'

            ]);
        }
        //dd('6755');
        if (FolderGroup::Create($data)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Group assigned successfully'

            ]);
        }
        //dd('ghfdgfh');
        if ($folder) {

            $new_group_id = $request->group_id;
            $existing_group_ids = $folder->group_id ? explode(',', $folder->group_id) : [];
            if (in_array($new_group_id, $existing_group_ids)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'This group (' . Group::find($new_group_id)->name . ') is already assigned.'
                ]);
            }
            $existing_group_ids[] = $new_group_id;
            $folder->group_id = implode(',', $existing_group_ids);
            $folder->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Group assigned successfully'

            ]);
        }

        // Return an error if folder not found
        return response()->json(['error' => 'Folder not found'], 404);
    }

    function removeGroupFromFolder(Request $request)
    {

        if (FolderGroup::where(['group_id' => $request->group_id, 'folder_id' => $request->folder_id])->delete()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Group removed successfully'
            ]);
        }
        return response()->json([
            'status' => 'error',
            'message' => 'Somthing went wrong!'
        ]);
        // Optionally return a response

    }

    public function deleteDataImage(Request $request)
    {
        $dataImage = DataImage::find($request->id);

        if ($dataImage) {
            // Get the image path and check if it exists in public directory
            $imagePath = public_path($dataImage->image_path);

            // Delete the file from the server
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            // Delete the image record from the database
            $dataImage->delete();
            // DataActivity::create([
            //     'created_by' => Auth::id(), // Assuming the user is authenticated
            //     'data_id' => $dataImage->data_id, // Assuming the user is authenticated
            //     'action' => 'image deleted',
            //     'description' => 'User ' . Auth::user()->name . ' deleted an image from data.',
            // ]);


            return response()->json([
                'status' => 'success',
                'message' => 'Image deleted successfully'
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Image not found'
        ], 404);
    }

    function fileItemDelete(Request $request)
    {
        $id             =   base64_decode(urldecode($request->id));
        $group_name     =   $request->group_name;
        $title          =   $request->title;
        $value          =   $request->value;
        $data           =   Data::find($id);
        $decodedData    =   json_decode($data->data, true);
        if (isset($decodedData[$group_name])) {
            foreach ($decodedData[$group_name] as $key => $item) {
                if ($item['title'] === $title && $item['value'] === $value) {
                    unset($decodedData[$group_name][$key]);
                    $itemCount = count($decodedData[$group_name]);
                    $data->data = json_encode($decodedData);
                    $data->save();
                    return response()->json(['status' => 'success', 'message' => 'Item deleted successfully', 'itemCount' => $itemCount]);
                }
            }
        }
    }

    function addDataActivityNote(Request $request)
    {
        $request->validate([
            'subject'       => 'required|max:255',
            'note'          => 'required',
            'follow_up'     => 'required',
        ]);
       $data = [
            'subject' => $request->input('subject'),
            'note' => $request->input('note'),
            'follow_up' => date('Y-m-d', strtotime($request->input('follow_up'))),
       ];
        if(!empty($request->note_id)){
            $dataActivity =DataActivity::find($request->note_id);
            if($dataActivity){
                $dataActivity->update($data);
                return redirect()->back()->with('success', 'Note Updated Successfully');
            }
        }
        $data['created_by'] = Auth::id();
        $data['data_id'] = $request->input('data_id');


        $dataActivity = DataActivity::create($data);
        return redirect()->back()->with('success', 'Note Created Successfully');
    }
}
