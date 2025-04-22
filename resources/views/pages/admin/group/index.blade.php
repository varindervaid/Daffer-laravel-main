<div class="card mb-4">
    <div class="card-header p-3">
        @if(permission_helper('3','add_opt'))
        <button type="button" class="btn btn-primary add_group" style="float:right" data-bs-toggle="modal" data-bs-target="#groupModal" onclick="removeError()">Add Group</button>
        @endif

    </div>

    <div class="card-body">
        <div class=" py-2 group-table">
            <table class="table table-striped table mb-0 table_id table-bordered" id="groupsTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allGroup as $group)
                    <tr>
                        <td>{{ ucfirst($group->name) }}</td>
                        @if($group->status)
                        <td><span class="status bg-success"></span>Active</td>
                        @else
                        <td><span class="status bg-danger"></span>InActive</td>
                        @endif
                        <td>
                            <div class="button-list">
                                @if(permission_helper('3','edit_opt'))
                                <button type="button" class="btn btn-primary align-content-end edit_group" data-id="{{$group->id}}" onclick="removeError()"><i class="ti ti-pencil"></i></button>
                                @endif
                                @if(permission_helper('3','delete_opt'))
                                <button class="btn btn-danger align-content-end delete_group" data-id="{{$group->id}}"><i class="ti ti-trash"></i></button>
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



<div class="modal fade" id="groupModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="groupModalHeading">Add Group</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="group_submit">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="userName">Name</label>
                        <input type="text" class="form-control" id="group_name" name="name">
                        <span class="text-danger error" id="name-error"></span>

                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="group_status" name="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                        <span class="text-danger error status-error" id="status-error"></span>
                    </div>
                    <input type="hidden" id="group_id" name="group_id" value="">

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
    $('#group_submit').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission
        var form = $('#group_submit')[0]; // Get the form element
        var formData = new FormData(form); // Create FormData object
        var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Get CSRF token
        var url;
        if ($('#group_id').val() == "") {
            var SubmitRoleUrl = '{{ route("groups.store") }}';
            url = SubmitRoleUrl;
        } else {
            var UpdateGroupUrl = '{{url("group_update")}}'
            var url = UpdateGroupUrl
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
                            text: 'The group has been created successfully.',
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
                            text: 'The group has been updated successfully.',
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
                    $('#groupModal').modal('hide');
                    $('#group_submit')[0].reset();
                    // Optionally clear the form or perform other actions
                } else {
                    $('.error').empty();
                    for (let key in response.message) {
                        if (response.message.hasOwnProperty(key)) {
                            let errorMessages = response.message[key][0];
                            $('#' + key + '-error').text(errorMessages)
                        }
                    }
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
            }
        });
    });


    $('#groupsTable tbody').on('click', '.edit_group', function() {
        $('#groupModalHeading').html('Edit Group');
        $.ajax({
            url: 'group-single-data',
            type: 'get',
            data: {
                id: $(this).data('id'),
            },
            success: function(response) {
                $('#group_name').val(response.name)
                $('#group_status').val(response.status)
                $('#group_id').val(response.id)
                $('#groupModal').modal('show')
            }
        })
    })


    $(document).on('click', '.delete_group', function() {

        var groupDeleteUrl = "{{url('delete-group')}}/";
        var btn = $(this);
        var role_id = $(this).data('id');
        var url = groupDeleteUrl + role_id;
        Swal.fire({
            title: 'Are you sure?',
            text: "Deleting this group will permanently remove all assigned groups from the folder and delete the group from the user table. This action is irreversible. Do you wish to proceed?",
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
                            //btn.closest('tr').remove();
                            Swal.fire({
                                title: 'Success!',
                                text: 'Group deleted successfully',
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

                        }
                    },

                });

            } else {}
        });
    });
</script>
