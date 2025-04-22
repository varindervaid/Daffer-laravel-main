<?php

use Illuminate\Support\Facades\Auth; // Add this line to use the Auth facade
use App\Models\{Data, DataActivity, Folder, FolderGroup, Group, permission, Role, permission_menu, RecentVisit, user};

if (!function_exists('example_helper')) {
    function example_helper($value)
    {
        return strtoupper($value);
    }
}

if (!function_exists('checkAssignGroupMatchOrNot')) {
    function checkAssignGroupMatchOrNot($folderId)
    {
        if (Auth::id() == '1') {
            return true;
        }
        $folderData  =   Folder::find($folderId);
        if ($folderData && $folderData->parent_id == null) {
            $groupIdArray       =   FolderGroup::where('folder_id', $folderData->id)->pluck('group_id')->toArray();
            $userGroupId        =   Auth::user()->assigned_group;

            return in_array($userGroupId, $groupIdArray);
        } else {
            return checkAssignGroupMatchOrNot($folderData->parent_id);
        }
    }
}


if (!function_exists('getActiveRoles')) {
    function getActiveRoles()
    {
        return Role::orderBy('name', 'ASC')->where('id', '!=', 1)->where('status', 1)->get();
    }
}
if (!function_exists('getActiveGroup')) {
    function getActiveGroup()
    {
        return Group::orderBy('id', 'desc')->where('status', 1)->get();
    }
}
if (!function_exists('getAllGroup')) {
    function getAllGroup()
    {
        return Group::orderBy('id', 'desc')->get();
    }
}
if (!function_exists('getAllRoles')) {
    function getAllRoles()
    {
        return Role::orderBy('name', 'ASC')->where('id', '!=', 1)->get();
    }
}
if (!function_exists('getAllPermissionMenu')) {
    function getAllPermissionMenu()
    {
        return permission_menu::orderBy('name', 'ASC')->get();
    }
}

if (!function_exists('getFolderName')) {
    function getFolderName($id)
    {
        $id = base64_decode(urldecode($id));
        return Folder::find($id)->name;
    }
}
if (!function_exists('getFolder')) {
    function getFolder($id)
    {
        return Folder::find($id);
    }
}
if (!function_exists('getGroup')) {
    function getGroup($id)
    {
        return Group::find($id);
    }
}
if (!function_exists('getAllGroup')) {
    function getAllGroup()
    {
        return Group::get();
    }
}
if (!function_exists('getFile')) {
    function getFile($id)
    {
        return Data::find($id);
    }
}
if (!function_exists('getGroupName')) {
    function getGroupName($id)
    {
        $id = base64_decode(urldecode($id));
        return Group::find($id)->name;
    }
}
if (!function_exists('getRecentVisit')) {
    function getRecentVisit()
    {

        return RecentVisit::where('user_id', Auth::id())
            ->orderBy('updated_at', 'desc')  // Order by updated_at in descending order
            ->get();
    }
}
if (!function_exists('getUserName')) {
    function getUserName($id)
    {

        $user =        User::find($id);
        return $user->name ?? 'Not Found';
    }
}
if (!function_exists('getAllUser')) {
    function getAllUser()
    {

        $users =        User::get();
        return $users ?? 'Not Found';
    }
}
if (!function_exists('getdataActivity')) {
    function getdataActivity($id)
    {
        $id         =   urldecode(base64_decode($id));
        $activity   =   DataActivity::orderBy('id', 'desc')->where('data_id', $id)->paginate(5);
        return $activity;
    }
}
if (!function_exists('getPreviousUrl')) {
    function getPreviousUrl($location, $id)
    {
        $id =   base64_decode(urldecode($id));
        $url = '';
        if ($location == 'folder') {
            $parent_details  =   Folder::find($id);
            $url = 'data-management';
            if ($parent_details->parent_id != '') {
                $url = 'data-management/folder/' . urlencode(base64_encode($parent_details->parent_id));
            }
        } else {
            if ($location == 'add-data') {
                $parent_id  =   $id;
                $url = 'data-management/folder/' . urlencode(base64_encode($parent_id));
            } else if ($location == 'file-data') {
                $parent_id  =   Data::find($id)->folder_id;
                $url = 'data-management/folder/' . urlencode(base64_encode($parent_id));
            } else {
                $url = 'data-management/file-data/' . urlencode(base64_encode($id));
            }
        }

        return $url;
    }
}

if (!function_exists('permission_helper')) {
    function permission_helper($menu_id, $value)
    {
        // Ensure the user is authenticated before attempting to access user ID
        if (Auth::check()) {
            $userId = Auth::id();
            $userType = User::find($userId)->role_id;
            if ($userType == '1') {
                return true;
            }

            // Check if the permission exists
            $permissionExists = Permission::where([
                'user_type_id' => $userType,
                'module_id' => $menu_id,
                $value => 'Yes'
            ])->exists();

            return $permissionExists; // Return true or false based on the existence of the permission
        } else {
            return false; // Handle unauthenticated state as needed
        }
    }
}
