<?php

use App\Models\{permission};
?>
<div class="card mb-4">
    <div class="card-header p-3">
        @if(permission_helper('2','add_opt'))
        <button type="button" class="btn btn-primary add_role" data-bs-toggle="modal" data-bs-target="#roleModal" onclick="removeError()">Add Role</button>
        @endif

        @if(Auth::user()->role_id=='1')
        <button class="btn btn-primary" style="float:right" href="#" id="user-permission">Role Permission</button>
        @endif
    </div>

    <div class="card-body">
        <div class=" py-2">
            <table id="rolesTable" class="table table-striped mb-0 text-nowrap text-md-nowrap table_id">
                <thead>
                    <tr class="border-bottom">
                        <th>Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $role)
                    <tr class="border-bottom">
                        <td>{{ucfirst($role->name)}}</td>
                        @if($role->status)
                        <td><span class="status bg-success"></span> Active</td>
                        @else
                        <td><span class="status bg-danger"></span> InActive</td>
                        @endif
                        <td>
                            <div class="button-list">
                                @if($role->id!="1")
                                @if(permission_helper('2','edit_opt'))
                                <button class="btn btn-primary align-content-end edit_role" data-id="{{$role->id}}" onclick="removeError()"><i class="ti ti-pencil"></i></button>
                                @endif
                                @if(permission_helper('2','delete_opt'))
                                <button class="btn btn-danger align-content-end delete_role" data-id="{{$role->id}}"><i class="ti ti-trash"></i></button>
                                @endif
                                @else
                                <p>Not Allows</p>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="roleModalHeading">Add Role</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="role_submit">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="roleName">Role Name</label>
                        <input type="text" class="form-control" id="role" name="role" placeholder="Enter role name">
                        <input type="hidden" id="role_id" name="role_id" value="">
                        <span class="text-danger error"></span>
                    </div>


                    <div class="form-group" id="selectContainer">

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="UserPermissionModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="roleModalLabel">Role Permission</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form id="" action="{{ route('user.permission') }}" method="post">
                    @csrf


                    @foreach(getAllRoles() as $role)
                    <!-- Role Toggle Header -->
                    <div class="accordion" id="accordionRolePermissions">
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="roleHeader_{{ $role->id }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRole_{{ $role->id }}" aria-expanded="false" aria-controls="collapseRole_{{ $role->id }}">
                                    {{ $role->name }}
                                </button>
                            </h5>
                            <div id="collapseRole_{{ $role->id }}" class="accordion-collapse collapse" aria-labelledby="roleHeader_{{ $role->id }}" data-bs-parent="#accordionRolePermissions">
                                <div class="accordion-body">
                                    <!-- Role Permissions -->
                                    @foreach(getAllPermissionMenu() as $permission_menu)
                                    <div class="row align-items-center pb-2 border-bottom mb-2">
                                        <div class="col-md-5">
                                            <h6 class="user-title">{{ $permission_menu->name }}</h6>
                                        </div>
                                        <div class="col-md-7 d-flex gap-2 flex-wrap">
                                            <div class="form-check pe-4 ps-0">
                                                <label class="mb-0" for="view_{{ $role->id }}_{{ $permission_menu->id }}">View</label>
                                                <input type="checkbox" value="Yes" {{ permission::where(['user_type_id' => $role->id, 'module_id' => $permission_menu->id, 'view_opt' => 'Yes'])->exists() ? 'checked' : '' }} class="form-check-input end-0" id="view_{{ $role->id }}_{{ $permission_menu->id }}" name="permissions[{{ $role->id }}][{{ $permission_menu->id }}][view]">
                                            </div>
                                            <div class="form-check pe-4 ps-0">
                                                <label class="mb-0" for="add_{{ $role->id }}_{{ $permission_menu->id }}">Add</label>
                                                <input type="checkbox" value="Yes" {{ permission::where(['user_type_id' => $role->id, 'module_id' => $permission_menu->id, 'add_opt' => 'Yes'])->exists() ? 'checked' : '' }} class="form-check-input end-0" id="add_{{ $role->id }}_{{ $permission_menu->id }}" name="permissions[{{ $role->id }}][{{ $permission_menu->id }}][add]">
                                            </div>
                                            <div class="form-check pe-4 ps-0">
                                                <label class="mb-0" for="edit_{{ $role->id }}_{{ $permission_menu->id }}">Edit</label>
                                                <input type="checkbox" value="Yes" {{ permission::where(['user_type_id' => $role->id, 'module_id' => $permission_menu->id, 'edit_opt' => 'Yes'])->exists() ? 'checked' : '' }} class="form-check-input end-0" id="edit_{{ $role->id }}_{{ $permission_menu->id }}" name="permissions[{{ $role->id }}][{{ $permission_menu->id }}][edit]">
                                            </div>
                                            <div class="form-check pe-4 ps-0">
                                                <label class="mb-0" for="delete_{{ $role->id }}_{{ $permission_menu->id }}">Delete</label>
                                                <input type="checkbox" value="Yes" {{ permission::where(['user_type_id' => $role->id, 'module_id' => $permission_menu->id, 'delete_opt' => 'Yes'])->exists() ? 'checked' : '' }} class="form-check-input end-0" id="delete_{{ $role->id }}_{{ $permission_menu->id }}" name="permissions[{{ $role->id }}][{{ $permission_menu->id }}][delete]">
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $('#role_submit').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission
        var form = $('#role_submit')[0]; // Get the form element
        var formData = new FormData(form); // Create FormData object
        var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Get CSRF token
        var url;
        if ($('#role_id').val() == "") {
            var SubmitRoleUrl = '{{ route("roles.store") }}';
            url = SubmitRoleUrl;
        } else {
            var UpdateRoleUrl = '{{url("role_update")}}'
            var url = UpdateRoleUrl
        }

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
                    if (response.action == "add") {
                        var role = response.data;
                        var statusClass = 'bg-success'
                        var statusText = 'Active'

                        Swal.fire({
                            title: 'Success!',
                            text: 'The role has been created successfully.',
                            icon: 'success',
                            confirmButtonColor: '#6259ca',
                            confirmButtonText: 'Ok'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Reload the current page
                                location.reload(); // This will refresh the page and reflect the changes
                            }
                        });
                    } else {
                        Swal.fire({
                            title: 'Success!',
                            text: 'The role has been updated successfully.',
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
                    $('#roleModal').modal('hide');
                    $('#role_submit')[0].reset();
                    // Optionally clear the form or perform other actions
                } else {
                    $('.error').text(response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
            }
        });
    });


    $(document).on('click', '.edit_role', function() {
        var roleShowUrl = "{{ url('edit_role') }}/";
        $('#roleModalHeading').html('Edit Role')
        var role_id = $(this).data('id');
        var url = roleShowUrl + role_id;
        $.ajax({
            url: url, // Assuming this route fetches the role details
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    var role = response.data;
                    // Populate the form fields with the role data
                    $('#role_id').val(role.id);
                    $('#role').val(role.name);
                    $('#roleModal').modal('show');
                    let roleStatus = role.status
                    const selectedActive = (roleStatus == 1) ? 'selected' : '';
                    const selectedInactive = (roleStatus == 0) ? 'selected' : '';

                    const selectHtml = `
                            <label for="status">Status</label>
                            <select id="status" class="form-control" name="status">
                                <option value="1" ${selectedActive}>Active</option>
                                <option value="0" ${selectedInactive}>Inactive</option>
                            </select>
                        `;
                    $('#selectContainer').html(selectHtml);
                } else {
                    alert(response.message);
                }
            },

        });
    });


    $(document).on('click', '.delete_role', function() {
        var roleDeleteUrl = "{{url('delete-role')}}/";
        var btn = $(this);
        var role_id = $(this).data('id');
        var url = roleDeleteUrl + role_id;
        Swal.fire({
            title: 'Are you sure?',
            text: "Deleting this role will permanently remove all associated users. This action is irreversible. Do you wish to proceed?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#6259ca',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url, // Assuming this route fetches the role details
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            // btn.closest('tr').remove();
                            Swal.fire({
                                title: 'Success!',
                                text: 'Role deleted successfully',
                                icon: 'success',
                                confirmButtonColor: '#6259ca',
                                confirmButtonText: 'Ok'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Reload the current page
                                    location.reload(); // This will refresh the page and reflect the changes
                                }
                            });


                        } else {

                            alert(response.message);
                        }
                    },

                });

            } else {}
        });
    });

    $('.add_role').on('click', function() {
        $('#roleModalHeading').html('Add Role');
        $('#selectContainer').html('')
    })

    $('#user-permission').on('click', function() {
        $('#UserPermissionModal').modal('show');
    })
</script>
