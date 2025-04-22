@extends('layouts.master')
@section('content')
@if (session('success'))
<div class="alert alert-success mt-3">
    {{ session('success') }}
</div>
@endif
@if (session('error'))
<div class="alert alert-danger m-3">
    {{ session('error') }}
</div>
@endif
<!-- Page Header -->
<div class="page-header ">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5">Edit Profile</h2>

    </div>
</div>


<div class="card mt-2 mb-4">
    <div class="card-header p-3">
        <!-- Header Content -->
    </div>
    <div class="card-body">
        <form id="user_add_submit1" action="{{route('users.store')}}" method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <!-- User Name Field -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">User Name</label>
                            <input type="text" class="form-control add_user" id="name" name="name" value="{{ old('name') }}">
                            <span class="text-danger error add-name-error" id="name-error">@error('name') {{ $message }} @enderror</span>
                        </div>
                    </div>

                    <!-- Email Field -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userEmail">Email</label>
                            <input type="email" class="form-control add_user" id="email" name="email" value="{{ old('email') }}">
                            <span class="text-danger error add-email-error" id="email-error">@error('email') {{ $message }} @enderror</span>
                        </div>
                    </div>

                    <!-- Group Field -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="requestStatus">Group</label>
                            <select class="form-control add_user "  id="add_group_id" name="group">
                                <option value="" >Select Group</option>
                                @foreach(getActiveGroup() as $group)
                                    <option value="{{ $group->id }}" {{ (collect(old('group'))->contains($group->id)) ? 'selected' : '' }}>{{ ucfirst($group->name) }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger error add-group-error" id="group-error">@error('group') {{ $message }} @enderror</span>
                        </div>
                    </div>

                    <!-- Role Field -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="requestStatus">Role</label>
                            <select class="form-control add_user" id="role_id1" name="role">
                                <option value="">Select Role</option>
                                @foreach(getActiveRoles() as $role)
                                    <option value="{{ $role->id }}" {{ old('role') == $role->id ? 'selected' : '' }}>{{ ucfirst($role->name) }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger error add-role-error" id="role-error">@error('role') {{ $message }} @enderror</span>
                        </div>
                    </div>

                    <!-- Profile Image Field -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">Profile Image</label>
                            <input type="file" class="form-control add_user" id="profile_image" name="profile_image">
                            <span class="text-danger error add-profile_image-error" id="profile_image-error">@error('profile_image') {{ $message }} @enderror</span>
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div class="col-lg-6">
                        <div class="form-group password-input-group position-relative">
                            <label for="userName">Password</label>
                            <input type="password" class="form-control add_user password" id="password" name="password">
                            <i class="fa fa-eye-slash togglePassword" aria-hidden="true"></i>
                            <span class="text-danger error add-password-error" id="password-error">@error('password') {{ $message }} @enderror</span>
                        </div>
                    </div>

                    <!-- Confirm Password Field -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">Confirm Password</label>
                            <input type="password" class="form-control add_user password" id="confirm-password" name="password_confirmation">
                            <span class="text-danger error add-password_confirmation-error" id="password_confirmation-error">@error('password_confirmation') {{ $message }} @enderror</span>
                        </div>
                    </div>

                    <!-- Status Field (last) -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="requestStatus">Status</label>
                            <select class="form-control add_user" id="status" name="status">
                                <option value="">Select Status</option>
                                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Approved</option>
                                <option value="2" {{ old('status') == '2' ? 'selected' : '' }}>Pending</option>
                                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Declined</option>
                            </select>
                            <span class="text-danger error add-status-error" id="status-error">@error('status') {{ $message }} @enderror</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">

                <button type="submit" id="user_add_submit_button" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>



@endsection
@section('scripts')
<!-- INTERNAL CHECK-ALL-MAIL JS -->


@endsection
