<form action="" method="GET">
    <div class="row  align-items-end mt-5">
        <!-- Text Input for Search -->
        <div class="form-group col-md-3 col-sm-6">

            <input type="text" class="form-control" id="searchTerm" name="search" value="{{request('search')}}" placeholder="Search by name or email">
        </div>
        <!-- Group Dropdown for Admin Role -->
        @if(Auth::user()->role_id == '1')
        <div class="form-group col-md-2 col-sm-6">

            <select class="form-control" id="filterGroup" name="group">
                <option value="">Select Group</option>
                @foreach($allGroup as $group)
                <option value="{{$group->id}}" {{request('group') == $group->id ? 'selected' : ''}}>{{$group->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-2 col-sm-6">

            <select class="form-control" id="filterRole" name="role">
                <option value="">Select Role</option>
                @foreach(getAllRoles() as $role)
                <option value="{{$role->id}}" {{request('role') == $role->id ? 'selected' : ''}}>{{$role->name}}</option>
                @endforeach
            </select>
        </div>
        @endif
        <!-- Status Dropdown -->
        <div class="form-group col-md-2 col-sm-6">
            <select class="form-control" id="filterStatus" name="status">
                <option value="">Select Status</option>
                <option value="1" {{request('status') == '1' ? 'selected' : ''}}>Approved</option>
                <option value="2" {{request('status') == '2' ? 'selected' : ''}}>Pending</option>
                <option value="0" {{request('status') == '0' ? 'selected' : ''}}>Declined</option>
            </select>
        </div>
        <!-- Filter and Clear Buttons -->
        <div class="form-group col-md-3 col-sm-12 d-flex gap-2 align-items-center mt-sm-3 mt-md-0">
            <button type="submit" class="btn btn-primary">Filter</button>
            <a href="{{url('user-management')}}" class="btn btn-outline-danger">Clear Filter</a>
        </div>
    </div>
</form>
<div class="card mb-4">
    <div class="card-header d-flex gap-3 justify-content-between">
        @if(permission_helper('1','add_opt'))
        <!-- <button class="btn btn-primary mb-3 set_password_type"  href="#" id="add-user" onclick="removeError()">Add User</button> -->
        <a href="{{route('add.user')}}" class="btn btn-primary mb-3 set_password_type">Add User</a>
        @endif
        <form action="{{ route('user.export') }}" method="POST" id="user-export-form">
            @csrf
            <input type="hidden" name="search" id="user-search" value="{{request('search')}}">
            <input type="hidden" name="group" id="user-group" value="{{request('group')}}">
            <input type="hidden" name="role" id="user-role" value="{{request('role')}}">
            <input type="hidden" name="status" id="user-status" value="{{request('status')}}">
            <button type="submit" class="btn btn-primary mb-3" id="user-export-button">Export</button>
        </form>
    </div>
    <div class="card-body">
        <div class="p-1 user-table">
            <table class="table table-striped mb-0 text-nowrap text-md-nowrap table_id">
                <thead>
                    <tr class="border-bottom">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Role</th>
                        <th>Group</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($users))
                    @foreach($users as $user)
                    <tr class="border-bottom">
                        <td><a href="{{route('user.details',['id' => urlencode(base64_encode($user->id))])}}">{{ $user->name }}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if($user->status == "2")
                            <span class="status bg-warning"></span> Pending
                            @elseif($user->status == "0")
                            <span class="status bg-danger"></span> Declined
                            @else
                            <span class="status bg-success"></span> Approved
                            @endif
                        </td>
                        <td>{{$user->role->name}}</td>
                        <td>
                            @php
                            // Explode the assigned_group to get an array of group IDs
                            $assigned_groups = explode(',', $user->assigned_group);

                            // Fetch the corresponding Group models for each group ID
                            $groups = \App\Models\Group::whereIn('id', $assigned_groups)->get();
                            @endphp

                            @foreach($groups as $group)
                            {{ $group->name }}{{ !$loop->last ? ',' : '' }} <!-- Display group names, separated by commas -->
                            @endforeach
                        </td>
                        <td>
                            <div class="button-list">
                                @if($user->role_id != "1")
                                <!-- <a href="javascript:void(0);" class="btn"><i class="ti ti-files"></i></a> -->
                                @if(permission_helper('1','edit_opt'))
                                <a href="javascript:void(0);" class="btn align-content-end btn-primary edit-user set_password_type" data-id="{{$user->id}}" onclick="removeError()"><i class="ti ti-pencil"></i></a>
                                <!-- <a href="{{(route('edit.user',[$user->id]))}}" class="btn align-content-end btn-primary"  ><i class="ti ti-pencil"></i></a> -->
                                @endif
                                @if(permission_helper('1','delete_opt'))
                                <a href="javascript:void(0);" class="btn align-content-end btn-danger delete_user" data-id={{$user->id}}><i class="ti ti-trash"></i></a>
                                @endif
                                @else
                                <p>No Actions Allowed</p>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="roleModalLabel">Add User</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="user_add_submit">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="userName">User Name</label>
                            <input type="text" class="form-control add_user" id="name" name="name">
                            <span class="text-danger error add-name-error" id="name-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="userEmail">Email</label>
                            <input type="email" class="form-control add_user" id="email" name="email">
                            <span class="error text-danger add-email-error" id="email-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="requestStatus">Group</label>

                            <select class="form-control add_user select2" multiple id="add_group_id" name="group[]">

                                @foreach(getAllGroup() as $group)
                                <option value="{{ $group->id }}">{{ ucfirst($group->name) }}</option>
                                @endforeach
                            </select>
                            <span class="error text-danger add-group-error" id="group-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="requestStatus">Role</label>
                            <select class="form-control add_user" id="role_id1" name="role">
                                <option value="">Select Role</option>
                                @foreach(getActiveRoles() as $role)
                                <option value="{{ $role->id }}">{{ ucfirst($role->name) }}</option>
                                @endforeach
                            </select>
                            <span class="error text-danger add-role-error" id="role-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="requestStatus">Status</label>
                            <select class="form-control add_user" id="status" name="status">
                                <option value="">Select status</option>
                                <option value="1">Approved</option>
                                <option value="2">Pending</option>
                                <option value="0">Declined</option>
                            </select>
                            <span class="error text-danger add-status-error" id="status-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="userName">Profile image</label>
                            <input type="file" class="form-control add_user" id="profile_image" name="profile_image">
                            <span class="text-danger error add-profile_image-error" id="profile_image-error"></span>
                        </div>
                        <div class="form-group password-input-group position-relative">
                            <label for="userName">Password</label>
                            <input type="password" class="form-control add_user password" id="password" name="password">
                            <i class="fa fa-eye-slash togglePassword" aria-hidden="true"></i>
                            <span class="text-danger error add-password-error" id="password-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="userName">Confirm Password</label>
                            <input type="password" class="form-control add_user password" id="confirm-password" name="password_confirmation">
                            <span class="text-danger error add-password_confirmation-error" id="password_confirmation-error"></span>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="user_add_submit_button" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->

<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="roleModalLabel">Edit User Details</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="user_submit">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="userName">Name</label>
                        <input type="text" class="form-control" id="userName" name="name">
                        <span class="text-danger error name-error"></span>
                    </div>
                    <div class="form-group">
                        <label for="userEmail">Email</label>
                        <input type="email" class="form-control" id="userEmail" name="email">
                        <span class="text-danger error email-error"></span>
                    </div>
                    <div class="form-group">
                        <label for="requestStatus">Group</label>
                        <select class="form-control add_user" id="userGroup" name="group[]">

                            @foreach(getAllGroup() as $group)
                            <option value="{{ $group->id }}">{{ ucfirst($group->name) }}</option>
                            @endforeach
                        </select>
                        <span class="error text-danger group-error"></span>
                    </div>
                    <div class="form-group">
                        <label for="userRole">Role</label>
                        <select class="form-control add_user" id="userRole" name="role">
                            <option value="" disabled>Select Role</option>
                            @foreach(getAllRoles() as $role)
                            <option value="{{ $role->id }}">{{ ucfirst($role->name) }}</option>
                            @endforeach
                        </select>
                        <span class="error text-danger role-error"></span>
                    </div>

                    <div class="form-group">
                        <label for="userName">Profile image</label>
                        <input type="file" class="form-control add_user" id="edit_profile_image" name="profile_image">
                        <span class="text-danger error profile_image-error"></span>
                        <a target="_blank" id="set_profile_image_path"><img class="set_profile_image mt-1" id="set_profile_image" height="100"></a>
                    </div>
                    <div class="password_div " style="display: none;">
                        <div class="form-group password-input-group position-relative">
                            <label for="">Password</label>
                            <input type="password" class="form-control update_password password"  name="">
                            <i class="fa fa-eye-slash togglePassword" aria-hidden="true"></i>
                            <span class="text-danger error password-error"></span>
                        </div>
                        <div class="form-group ">
                            <label for="userName">Confirm Password</label>
                            <input type="password" class="form-control update_password_confirmation password" name="password_confirmation">
                            <span class="text-danger error password_confirmation-error"></span>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="reset_password_checkbox" name="">
                        <label for="reset_password_checkbox">Reset Password</label>
                    </div>

                    <div class="form-group">
                        <label for="requestStatus">Status</label>
                        <select class="form-control" id="requestStatus" name="status">
                            <option value="1">Approved</option>
                            <option value="2">Pending</option>
                            <option value="0">Declined</option>
                        </select>
                    </div>
                    <input type="hidden" id="userId" name="userId" value="">
                    <span class="text-danger error status-error"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).on('click', '.edit-user', function(e) {
        var UserShowUrl = "{{ url('edit_user') }}/";
        e.preventDefault();
        var user_id = $(this).data('id');
        var url = UserShowUrl + user_id;


        $.ajax({
            url: url, // Assuming this route fetches the role details
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    var user = response.data;

                    // Populate the form fields with the role data
                    $('#userId').val(user.id);
                    $('#userName').val(user.name);
                    $('#userEmail').val(user.email);
                    $('#requestStatus').val(user.status);
                    $('#userRole').val(user.role_id);
                    // Handle multiple groups
                    if (user.assigned_group) {
                        // Assuming `user.assigned_group` is a comma-separated string of group IDs
                        var groupIds = user.assigned_group.split(','); // Convert to an array of IDs
                        $('#userGroup').val(groupIds).trigger('change'); // Set the value and trigger change for select2
                    } else {
                        $('#userGroup').val([]).trigger('change'); // Clear the selection if no groups
                    }
                    $('#set_profile_image').attr('src', '');
                    $('#set_profile_image_path').attr('href', '#');
                    if (user.profile_image) {
                        $('#set_profile_image').attr('src', 'storage/' + user.profile_image);
                        $('#set_profile_image_path').attr('href', 'storage/' + user.profile_image);
                    }

                    $('#userModal').modal('show');
                } else {
                    alert(response.message);
                }
            },

        });
    })


    $('#user_submit').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission
        var form = $('#user_submit')[0]; // Get the form element
        var formData = new FormData(form); // Create FormData object
        var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Get CSRF token
        var url = '{{route("users.update")}}'

        $.ajax({
            url: url, // Use Laravel route helper to get the URL
            type: 'POST',
            data: formData,
            contentType: false, // Required for FormData
            processData: false, // Required for FormData
            headers: {
                'X-CSRF-TOKEN': csrfToken // Add CSRF token to the request headers
            },
            dataType: 'json', // Expect JSON response
            success: function(response) {
                if (response.status === 'success') {
                    $('#userModal').hide('modal');
                    Swal.fire({
                        title: 'Success!',
                        text: 'The user has been updated successfully.',
                        icon: 'success',
                        confirmButtonColor: '#28a745', // Green color
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Reload the current page
                            location.reload(); // This will refresh the page and reflect the changes
                        }
                    });
                } else {
                    $('.error').empty();
                    for (let key in response.errors) {
                        // Check if the key is a property of the object
                        if (response.errors.hasOwnProperty(key)) {
                            // Get the array of error messages for the current key
                            let errorMessages = response.errors[key];
                            // Loop through the error messages array
                            errorMessages.forEach(function(message) {
                                // Log or handle the error message with its key
                                $('.' + key + '-error').text(message)
                                // Optionally, display these messages to the user
                            });
                        }
                    }
                }
            },
            error: function(xhr, status, error) {
                //console.error('AJAX Error:', error);
            }
        });
    });


    $('.delete_user').on('click', function() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You want to delete this user!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#6259ca',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'delete-user',
                    type: 'get',
                    data: {
                        id: $(this).data('id')
                    },
                    success: function(data) {
                        if (data.status == 'success') {
                            Swal.fire({
                                title: 'Success!',
                                text: 'User deleted successfully',
                                icon: 'success',
                                confirmButtonColor: '#6259ca',
                                confirmButtonText: 'Ok'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Reload the current page
                                    location.reload(); // This will refresh the page and reflect the changes
                                }
                            });
                        }
                    },

                })
            } else {}
        });
    })
</script>
