<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\permission;
use Illuminate\Http\Request;
use App\Models\{Role, permission_menu};
use App\Http\Controllers\Admin\ActivityLogger;
use Illuminate\Support\Facades\Auth;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $roles              =   Role::get();
        $permission_menu    =   permission_menu::get();
        Permission::truncate();

        foreach ($roles as $role){
            foreach ($permission_menu as $permission){
                $arr = [];
                $arr['user_type_id']   =   $role->id;
                $arr['module_id']      =   $permission->id;
                $arr['view_opt']       =   !empty($_POST['permissions'][$role->id][$permission->id]['view'])?$_POST['permissions'][$role->id][$permission->id]['view']:'';
                $arr['add_opt']        =   !empty($_POST['permissions'][$role->id][$permission->id]['add'])?$_POST['permissions'][$role->id][$permission->id]['add']:'';
                $arr['edit_opt']       =   !empty($_POST['permissions'][$role->id][$permission->id]['edit'])?$_POST['permissions'][$role->id][$permission->id]['edit']:'';
                $arr['delete_opt']     =   !empty($_POST['permissions'][$role->id][$permission->id]['delete'])?$_POST['permissions'][$role->id][$permission->id]['delete']:'';
                permission::create($arr);
            }
        }
        ActivityLogger::log('Permission Updated', 'User ' . Auth::user()->name . ' updated permission.');
        return redirect()->back()->with('success', 'Permissions have been reset successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(permission $permission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, permission $permission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(permission $permission)
    {
        //
    }
}
