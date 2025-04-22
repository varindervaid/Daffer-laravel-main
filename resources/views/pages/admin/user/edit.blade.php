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
        <h2 class="main-content-title tx-24 mg-b-5">Edit User</h2>

    </div>
</div>


<div class="card mt-2 mb-4">
    <div class="card-header p-3">
        <h5>Edit User</h5>
    </div>
    <div class="card-body">
        <form action='{{ route("users.update") }}' method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <!-- Name Field -->
                    <div class="col-lg-6 mb-3">
                        <div class="form-group">
                            <label for="userName">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name', $userData->name) }}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Email Field -->
                    <div class="col-lg-6 mb-3">
                        <div class="form-group">
                            <label for="userEmail">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email', $userData->email) }}">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Group Field -->
                    <div class="col-lg-6 mb-3">
                        <div class="form-group">
                            <label for="userGroup">Group</label>
                            <select class="form-control" id="userGroup" name="group[]">
                                @foreach(getAllGroup() as $group)
                                <option value="{{ $group->id }}"
                                    {{ in_array($group->id, old('group', $userData->groups->pluck('id')->toArray())) ? 'selected' : '' }}>
                                    {{ ucfirst($group->name) }}
                                </option>
                                @endforeach
                            </select>
                            @error('group')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Role Field -->
                    <div class="col-lg-6 mb-3">
                        <div class="form-group">
                            <label for="userRole">Role</label>
                            <select class="form-control" id="userRole" name="role">
                                <option value="" disabled>Select Role</option>
                                @foreach(getAllRoles() as $role)
                                <option value="{{ $role->id }}"
                                    {{ $role->id == old('role', $userData->role_id) ? 'selected' : '' }}>
                                    {{ ucfirst($role->name) }}
                                </option>
                                @endforeach
                            </select>
                            @error('role')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Profile Image Field -->
                    <div class="col-lg-6 mb-3">
                        <div class="form-group">
                            <label for="edit_profile_image">Profile Image</label>
                            <input type="file" class="form-control" id="edit_profile_image" name="profile_image">
                            @error('profile_image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <a target="_blank" id="set_profile_image_path" href="{{ asset($userData->profile_image) }}">
                                <img class="set_profile_image mt-1" id="set_profile_image" src="{{ asset($userData->profile_image) }}" height="100" alt="Profile Image Preview">
                            </a>
                        </div>
                    </div>

                    <!-- Request Status Field -->
                    <div class="col-lg-6 mb-3">
                        <div class="form-group">
                            <label for="requestStatus">Request Status</label>
                            <select class="form-control" id="requestStatus" name="status">
                                <option value="1" {{ $userData->status == 1 ? 'selected' : '' }}>Approved</option>
                                <option value="2" {{ $userData->status == 2 ? 'selected' : '' }}>Pending</option>
                                <option value="0" {{ $userData->status == 0 ? 'selected' : '' }}>Declined</option>
                            </select>
                            @error('status')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row password_div" style="display: none;">
                    <div class="col-lg-6 mb-3">
                        <div class="form-group password-input-group position-relative">
                            <label for="userPassword">Password</label>
                            <input type="password" class="form-control update_password" name="password">
                            <i class="fa fa-eye-slash togglePassword" aria-hidden="true"></i>
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <div class="form-group">
                            <label for="userPasswordConfirmation">Confirm Password</label>
                            <input type="password" class="form-control update_password_confirmation" name="password_confirmation">
                            @error('password_confirmation')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Hidden User ID Field -->
                <input type="hidden" id="userId" name="userId" value="{{ $userData->id }}">
            </div>

            <div class="modal-footer">
                <!-- Reset Password Checkbox -->
                <div class="form-check me-2">
                    <input type="checkbox" class="form-check-input" id="reset_password_checkbox" name="reset_password"
                        {{ !empty($errors->first('password')) ? 'checked' : '' }}>

                    <label for="reset_password_checkbox">Reset Password</label>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>










@endsection
@section('scripts')
<!-- INTERNAL CHECK-ALL-MAIL JS -->


@endsection
