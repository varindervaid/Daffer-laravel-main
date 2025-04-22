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
        <h2 class="main-content-title tx-24 mg-b-5">Add User</h2>

    </div>
</div>


<div class="card mt-2 mb-4">
    <div class="card-header p-3">
        <!-- Header Content -->
    </div>
    <div class="card-body">
        <form id="storeUser" action="{{route('users.store')}}" method="POST" action="" enctype="multipart/form-data">
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
                            <label for="email">Email</label>
                            <input type="text" class="form-control add_user" id="email" name="email" value="{{ old('email') }}">
                            <span class="text-danger error add-email-error" id="email-error">@error('email') {{ $message }} @enderror</span>
                        </div>
                    </div>

                    <!-- Group Field -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="group">Group</label>
                            <select class="form-control add_user "  id="group" name="group">
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
                            <label for="role">Role</label>
                            <select class="form-control add_user" id="role" name="role">
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
                            <input type="file" class="form-control add_user" id="profile-image" name="profile_image">
                            <span class="text-danger error add-profile_image-error" id="profile-image-error">@error('profile_image') {{ $message }} @enderror</span>
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
                            <label for="status">Status</label>
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
<script>
$(document).ready(function () {
    $('#storeUser').on('submit', function () {
        $('.error').html('');
        let formFields = [
            { key: 'name', value: $('#name').val(), label: 'Name' },
            { key: 'email', value: $('#email').val(), label: 'Email' },
            { key: 'status', value: $('#status').val(), label: 'Status' },
            { key: 'password', value: $('#password').val(), label: 'Password' },
            { key: 'confirm_password', value: $('#confirm-password').val(), label: 'Confirm Password' },
            { key: 'role', value: $('#role').val(), label: 'Role' },
            { key: 'group', value: $('#group').val(), label: 'Group' }
        ];
        let isVlidate;

        // Validate each field
        formFields.forEach(field => {
            if (!field.value.trim()) {
                $('#'+field.key+'-error').html(field.label+' is required');
                isVlidate =false;
            }else{
                if(field.key=='email'){
                    if(!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(field.value)){
                        $('#'+field.key+'-error').html('Invalid email format');
                        isVlidate =false;
                    }
                }

                if(field.key=='password'){
                    if(field.value!=$('#confirm-password').val()){
                        $('#'+field.key+'-error').html('Passwords do not match');
                        isVlidate = false;
                    }
                }
            }
        });

        const profileImage = $('#profile-image')[0].files[0];
        if (profileImage) {
            const allowedExtensions = ['jpeg', 'jpg', 'png'];
            const fileExtension = profileImage.name.split('.').pop().toLowerCase();
            const maxSize = 2048 * 1024; // 2048 KB = 2 MB

            if (!allowedExtensions.includes(fileExtension)) {
                $('#profile-image-error').html('Invalid file type. Allowed types are: jpeg, jpg, png');
                isVlidate = false;
            } else if (profileImage.size > maxSize) {
                $('#profile-image-error').html('File size must be less than 2MB');
                isVlidate = false;
            }
        }

        return isVlidate;
    });
});
</script>


@endsection

