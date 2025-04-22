
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AuthenticationController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ActivityLogController;
use App\Http\Controllers\Admin\AjaxController;
use App\Http\Controllers\Admin\DataController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('', [Controller::class, 'index']);
Route::middleware(['guest'])->group(function () {
    Route::post('login', [AuthenticationController::class, 'login'])->name('login');
    Route::get('signup', [AuthenticationController::class, 'signup'])->name('signup');
    Route::post('signup', [AuthenticationController::class, 'UserSignup'])->name('user.signup');
    Route::get('/', [AuthenticationController::class, 'signin']);
    Route::get('forgot', [AuthenticationController::class, 'forgot']);
    Route::post('forgotPassword', [AuthenticationController::class, 'ForgotPassword'])->name('forgot_password');
    Route::get('password/reset/{token}', [AuthenticationController::class, 'reset'])->name('password.reset');
    Route::post('password/update', [AuthenticationController::class, 'updatePassword'])->name('password.update');
    Route::get('create-account', [AuthenticationController::class, 'createAccount'])->name('account.create');
});

Route::middleware(['auth'])->group(function () {
    Route::get('index', [DashboardController::class, 'index']);


    Route::get('delete-log', [ActivityLogController::class, 'deleteLog'])->name('delete.log');
    Route::get('activity-log', [ActivityLogController::class, 'index']);
    Route::post('log-export', [ActivityLogController::class, 'exportActivityLog'])->name('log.export');
    Route::get('logout', [AuthenticationController::class, 'logout'])->name('logout');


    Route::get('delete-data-group', [DataController::class, 'deleteDataGroup'])->name('delete.data.group');
    Route::get('delete-data-image', [DataController::class, 'deleteDataImage'])->name('delete.data.image');
    Route::get('data-management/edit-data/{id}', [DataController::class, 'editData'])->name('edit.data');
    Route::post('rename-file', [DataController::class, 'renameFile'])->name('rename.file');
    Route::get('delete-file/{id}', [DataController::class, 'DeleteFile'])->name('delete.file');
    Route::get('data-export', [DataController::class, 'exportData'])->name('data.export');
    Route::post('rename-folder', [DataController::class, 'renameFolder'])->name('rename.folder');
    Route::get('delete-folder/{id}', [DataController::class, 'DeleteFolder'])->name('delete.folder');
    Route::post('assign-group-to-folder', [DataController::class, 'assignGroupToFolder'])->name('assign.group.to.folder');
    Route::get('remove-group-to-folder', [DataController::class, 'removeGroupFromFolder'])->name('remove.group.to.folder');
    Route::post('add-data-activity-note',[DataController::class, 'addDataActivityNote'])->name('add.data.activity.note');
    Route::post('data-management/file-item-delete', [DataController::class, 'fileItemDelete'])->name('file.item.delete');
    Route::get('data-management/file-data/{id}', [DataController::class, 'getFileData'])->name('file.data');
    Route::get('export-file-data/{id}', [DataController::class, 'exportFileData'])->name('export.file.data');
    Route::get('data-management', [DataController::class, 'DataManagement'])->middleware('checkpermission:4,view_opt');
    Route::post('create-folder/{parent_id?}', [DataController::class, 'CreateFolder'])->name('create.folder');
    Route::get('data-management/group/{group_id}', [DataController::class, 'getGroupData'])->name('data.management.group');
    Route::get('data-management/folder/{folder_id}', [DataController::class, 'getFolderData'])->name('data.management.folder');
    Route::match(['get', 'post'], 'data-management/add-data/{folder_id?}', [DataController::class, 'addData'])->name('add.data');
    Route::post('update-data/{id}', [DataController::class, 'updateData'])->name('update.data');
    Route::match(['get', 'post'], 'data-management/add-more-data/{id}', [DataController::class, 'addMoreData'])->name('add.more.data');
    Route::match(['get', 'post'], 'data-management/edit-group-data/{id}/{grouped_name}', [DataController::class, 'editGroupData'])->name('edit.group.data');


    Route::get('user-management', [UserController::class, 'UserManagement'])->name('user.management')->middleware('checkpermission:1,view_opt');
    Route::get('user-management/add-user', [UserController::class, 'addUser'])->name('add.user');
    Route::post('users-store', [UserController::class, 'storeUser'])->name('users.store')->middleware('checkpermission:1,add_opt');
    Route::get('edit_user/{id}', [UserController::class, 'editUser'])->name('edit.user');
    Route::post('users-update', [UserController::class, 'updateUser'])->name('users.update')->middleware('checkpermission:1,edit_opt');
    Route::get('delete-user', [UserController::class, 'deleteUser'])->name('delete.user');
    Route::get('user-details/{id}', [UserController::class, 'userDetails'])->name('user.details');
    Route::get('my-profile', [UserController::class, 'myProfile'])->name('my.profile');
    Route::post('user-export', [UserController::class, 'userExport'])->name('user.export');
    Route::get('delete-profile-image', [UserController::class, 'deleteProfileImage'])->name('delete.profile.image');
    Route::any('save-croped-image',[UserController::class, 'saveCroppedImage'])->name('save.croped.image');
    Route::get('edit-profile', [UserController::class, 'editProfile'])->name('edit.profile');


    Route::post('group-submit', [GroupController::class, 'storeGroup'])->name('groups.store')->middleware('checkpermission:3,add_opt');
    Route::get('edit_group/{id}', [GroupController::class, 'Editgroup']);
    Route::post('group_update', [GroupController::class, 'UpdateGroup'])->middleware('checkpermission:3,edit_opt');
    Route::get('delete-group/{id}', [GroupController::class, 'DeleteGroup'])->middleware('checkpermission:3,delete_opt');


    Route::post('role-submit', [RoleController::class, 'storeRole'])->name('roles.store')->middleware('checkpermission:2,add_opt');
    Route::get('edit_role/{id}', [RoleController::class, 'EditRole']);
    Route::post('role_update', [RoleController::class, 'UpdateRole'])->name('role.update')->middleware('checkpermission:2,edit_opt');
    Route::get('delete-role/{id}', [RoleController::class, 'DeleteRole'])->middleware('checkpermission:2,delete_opt');


    Route::post('check-data-group-name', [AjaxController::class, 'checkDataGroupName'])->name('check.data.group.name');
    Route::get('group-single-data', [AjaxController::class, 'groupSingleData'])->name('group.single.data');
    Route::get('get-folder-details/{id}', [AjaxController::class, 'getFolderDetails'])->name('get.folder.details');
    Route::get('get-data-activity-note',[AjaxController::class,'getDataActivityNote'])->name('get.data.activity.note');
    Route::get('recent-visit', [AjaxController::class, 'recentVisit'])->name('recent.visit');
    Route::get('check-file-name', [AjaxController::class, 'checkFileNameExixtsOrNot'])->name('check.file.name');
    Route::get('get-file-details/{id}', [AjaxController::class, 'getFileDetails'])->name('get.file.details');


    Route::post('user-perrmission', [PermissionController::class, 'store'])->name('user.permission');


    // Route::get('user-management', [DashboardController::class, 'UserManagement'])->middleware('checkpermission:1,view_opt');
    // Route::get('user-management/edit-user/{id}', [UserController::class, 'editUser'])->name('edit.user');
    // Route::post('grpup-export', [DashboardController::class, 'groupExport'])->name('group.export');
    Route::post('upload-profile-image', [DashboardController::class, 'uploadProfileImage'])->name('upload.profile.image');
    // Route::post('database-config', [DashboardController::class, 'getDatabaseConfig'])->name('database.config');
    // Route::post('change-password', [DashboardController::class, 'changePassword'])->name('change.password');


});


Route::get('crop',function(){
    return view('pages/user/imageCrope');
});
