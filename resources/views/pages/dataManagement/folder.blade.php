@extends('layouts.master')
@section('styles')
@endsection
@section('content')
{{view('pages.message')}}
<!-- Page Header -->
<div class="page-header">
    <div class="align-items-center d-flex gap-3">

        <a href="{{ url(getPreviousUrl(Request::segment(2),Request::segment(3))) }}" class="btn text-primary py-0">
            <i class="fa fa-mail-reply-all fa-lg"></i>
        </a>
        <h2 class="main-content-title tx-24 mg-b-5">
            {{ getFolderName(request('folder_id')) }}
        </h2>
    </div>
</div>

<form action="" method="GET">
    <div class="row  align-items-end mt-5">
        <!-- Text Input for Search -->
        <div class="form-group col-md-3 col-sm-6">

            <input type="text" class="form-control" id="searchTerm" name="search" value="{{request('search')}}" placeholder="Search">
        </div>
        <!-- Group Dropdown for Admin Role -->


        <div class="form-group col-md-3 col-sm-12 d-flex gap-2 align-items-center mt-sm-3 mt-md-0">
            <button type="submit" class="btn btn-primary">Filter</button>
            <a href="{{url('data-management/folder/'.request('folder_id'))}}" class="btn btn-outline-danger">Clear Filter</a>
        </div>
    </div>
</form>
<section>
    <div class="card mb-4">
        <div class="card-header p-3">
            @if(permission_helper('4','add_opt'))
            <div class="">
                <a style="float:left" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-parent_id="{{$parent_id}}" href="#" id="add-folder" onclick="removeError()">Create Folder</a>
                @if(request()->segment(2)=='folder')
                <a style="float:right" class="btn btn-primary" href="{{ route('add.data', [urlencode(base64_encode($parent_id)) ]) }}" id="add-data">Add Data</a>
                @endif
            </div>
            @endif
        </div>

        <div class="card-body">
            <div class=" log-table">

                <table id="" class="table table-striped mb-0 text-nowrap text-md-nowrap table_id">
                    <thead>
                        <tr class="border-bottom">
                            <th>Data</th>
                            <th>Created By</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($datas as $data)
                        <tr>
                            <td>
                                <a trarget="_blank" data-type="file" data-id="{{$data->id}}" href="{{route('file.data',[urlencode(base64_encode($data->id))])}}" class="text-black recent_viewed"><i class="far fa-file me-2"></i> {{ $data->file_name ?? 'No file name' }}</a>
                            </td>
                            <td>
                                {{$data->users? ucfirst($data->users->name):'Not found'}}
                            </td>
                            <td>
                                {{date('d-m-Y',strtotime($data->created_at))}}
                            </td>
                            <td>
                                @if(permission_helper('4','edit_opt'))
                                <a href="#" data-file_id="{{$data->id}}" class="btn btn-primary  rename_file" onclick="removeError()"><i class="ti ti-pencil"></i></a>
                                @endif
                                @if(permission_helper('4','delete_opt'))
                                <a href="#" data-id="{{$data->id}}" data-type="file" class="btn btn-danger delete_folder_or_file"><i class="ti ti-trash"></i></a>
                                @endif
                            </td>
                        </tr>
                        @endforeach


                        @foreach($folders as $key => $folder)
                        <tr>
                            <td>
                                <a href="{{ url('data-management/folder', ['group_id' => urlencode(base64_encode($folder->id))]) }}"
                                    class="recent_viewed" data-type="folder" data-id="{{$folder->id}}"> <!-- Change #007bff to your desired color -->
                                    <i class="fa fa-folder text-warning me-2"></i> {{ $folder->name }}
                                </a>
                            </td>

                            <td>
                                {{$folder->users?ucfirst($folder->users->name):'Not found'}}

                            </td>
                            <td>
                                {{date('d-m-Y',strtotime($folder->created_at))}}
                            </td>
                            <td>
                                @if(permission_helper('4','edit_opt'))
                                <a href="#" data-folder_id="{{$folder->id}}" class="btn btn-primary  rename_folder" onclick="removeError()"><i class="ti ti-pencil"></i></a>
                                @endif
                                @if(permission_helper('4','delete_opt'))
                                <a href="#" data-id="{{$folder->id}}" data-type="folder" class="btn btn-danger delete_folder_or_file "><i class="ti ti-trash"></i></a>
                                @endif
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>

<!-- add folder popup -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Folder</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('create.folder', $parent_id) }}" id="folder_form" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="folderName" class="form-label">Folder Name</label>
                        <input type="text" name="folder_name" class="form-control" id="folderName" placeholder="Enter folder name">
                        <input type="hidden" name="under" value="{{request()->segment(2)}}">
                        <span class="text-danger error" id="name-error"></span>
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
<!-- add folder popup -->

<!-- rename folder modal-->
<div class="modal fade" id="renameFolderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rename Folder</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('rename.folder')}}" method="POST" id="rename_folder_form">
                    @csrf
                    <div class="mb-3">
                        <label for="folderName" class="form-label">Folder Name</label>
                        <input type="text" name="folder_name" class="form-control" id="renameFolder" placeholder="Enter folder name">
                        <input type="hidden" name="folder_id" id="folder_id">
                        <span class="text-danger error name-error"></span>
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
<!-- rename folder modal-->

<!-- rename file modal-->
<div class="modal fade" id="renameFileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rename File</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('rename.file')}}" id="rename_file_form" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="folderName" class="form-label">File Name</label>
                        <input type="text" name="file_name" class="form-control" id="renameFile" placeholder="Enter file name">
                        <input type="hidden" name="file_id" id="file_id">
                        <span class="text-danger error" id="file_name-error"></span>
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
<!-- rename file modal-->




<script>

    $("#backButtonFromFolderPage").on('click', function(){
        $.ajax({

        })
    })

    $('#rename_file_form').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission
        var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Get CSRF token
        var url = "{{route('rename.file')}}";

        $.ajax({
            url: url, // Use Laravel route helper to get the URL
            type: 'POST',
            data: {
                file_name: $('#renameFile').val(),
                file_id: $('#file_id').val()
            },
            headers: {
                'X-CSRF-TOKEN': csrfToken // Add CSRF token to the request headers
            },
            success: function(response) {
                if (response.status === 'success') {
                    $('#renameFileModal').modal('hide');
                    Swal.fire({
                        title: 'Success!',
                        text: 'File renamed successfully',
                        icon: 'success',
                        confirmButtonColor: '#6259ca',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Reload the current page
                            location.reload(); // This will refresh the page and reflect the changes
                        }
                    });
                    // Optionally clear the form or perform other actions
                } else {
                    $('.error').empty();

                    for (let key in response.errors) {
                        // Check if the key is a property of the object
                        if (response.errors.hasOwnProperty(key)) {
                            // Get the array of error messages for the current key
                            let errorMessages = response.errors[key];
                            // Loop through the error messages array

                            $('#' + key + '-error').html(errorMessages[0])
                        }
                    }
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
            }
        });
    });
    $('#rename_folder_form').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission
        var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Get CSRF token
        var url = "{{route('rename.folder')}}";
        $.ajax({
            url: url, // Use Laravel route helper to get the URL
            type: 'POST',
            data: {
                name: $('#renameFolder').val(),
                folder_id: $('#folder_id').val()
            },
            headers: {
                'X-CSRF-TOKEN': csrfToken // Add CSRF token to the request headers
            },
            success: function(response) {
                if (response.status === 'success') {
                    $('#renameFolderModal').modal('hide');
                    Swal.fire({
                        title: 'Success!',
                        text: 'Folder renamed successfully',
                        icon: 'success',
                        confirmButtonColor: '#6259ca',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Reload the current page
                            location.reload(); // This will refresh the page and reflect the changes
                        }
                    });
                    // Optionally clear the form or perform other actions
                } else {
                    $('.error').empty();

                    for (let key in response.errors) {
                        // Check if the key is a property of the object
                        if (response.errors.hasOwnProperty(key)) {
                            // Get the array of error messages for the current key
                            let errorMessages = response.errors[key];
                            // Loop through the error messages array

                            $('.' + key + '-error').html(errorMessages[0])
                        }
                    }
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
            }
        });
    });
    //delete file & folder code
    $('#folder_form').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission

        var path = window.location.pathname;

        // Split the path into segments
        var segments = path.split('/');

        // Check if the second segment exists and get it
        var secondSegment = segments.length > 2 ? segments[2] : null;

        var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Get CSRF token

        var url = "{{ route('create.folder', $parent_id) }}";


        $.ajax({
            url: url, // Use Laravel route helper to get the URL
            type: 'POST',
            data: {
                under: secondSegment,
                name: $('#folderName').val()
            },
            headers: {
                'X-CSRF-TOKEN': csrfToken // Add CSRF token to the request headers
            },
            dataType: 'json', // Expect JSON response
            success: function(response) {
                if (response.status === 'success') {
                    $('#exampleModal').modal('hide');
                    Swal.fire({
                        title: 'Success!',
                        text: 'Folder created successfully',
                        icon: 'success',
                        confirmButtonColor: '#6259ca',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Reload the current page
                            location.reload(); // This will refresh the page and reflect the changes
                        }
                    });
                    // Optionally clear the form or perform other actions
                } else {
                    $('.error').empty();
                    for (let key in response.errors) {
                        // Check if the key is a property of the object
                        if (response.errors.hasOwnProperty(key)) {
                            // Get the array of error messages for the current key
                            let errorMessages = response.errors[key];
                            // Loop through the error messages array
                            $('#' + key + '-error').html(errorMessages[0])
                        }
                    }
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
            }
        });
    });
    // $('#folder_form').on('submit', function() {
    //     $('#exampleModal').modal('hide');
    // });
    $('.delete_folder_or_file').on('click', function() {
        // let type = $(this).data('type')=='file'?'file':'folder';
        let id = $(this).data('id');
        let url = "{{ route('delete.folder', ':id') }}";
        url = url.replace(':id', id);
        let data_type = 'Folder';

        if ($(this).data('type') == 'file') {
            data_type = 'File';
            url = "{{ route('delete.file', ':id') }}";
            url = url.replace(':id', id); // Replace placeholder with the actual ID
        }
        $(this).data('id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You want to delete this " + data_type.toLowerCase() + '!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#6259ca',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    type: 'get',
                    success: function(data) {
                        if (data.status == 'success') {
                            Swal.fire({
                                title: 'Success!',
                                text: data_type + ' deleted successfully',
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
    //delete file & folder code
    // rename file code
    $('.rename_file').on('click', function() {
        let file_id = $(this).data('file_id');
        var url = '{{ route("get.file.details", ":id") }}'; // Using a placeholder for folder_id

        url = url.replace(':id', file_id);
        $.ajax({
            url: url,
            type: 'get',
            data: {
                file_id: file_id,
            },
            success: function(data) {

                console.log(data.status);
                if (data.status === 'success') {
                    // Update the form inputs with folder details from the response
                    $('#renameFile').val(data.file.file_name); // Assuming `name` is in `data.folder`
                    $('#file_id').val(data.file.id); // Assuming `id` is in `data.folder`
                    // Show the modal
                    $('#renameFileModal').modal('show');
                }

            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Error renaming folder:', textStatus, errorThrown);
            }

        })
    })
    // rename folder code


    // rename folder code
    $('.rename_folder').on('click', function() {
        let folder_id = $(this).data('folder_id');
        var url = '{{ route("get.folder.details", ":id") }}'; // Using a placeholder for folder_id

        url = url.replace(':id', folder_id);
        $.ajax({
            url: url,
            type: 'get',
            data: {
                folder_id: folder_id,
            },
            success: function(data) {

                console.log(data.status);
                if (data.status === 'success') {
                    // Update the form inputs with folder details from the response
                    $('#renameFolder').val(data.folder.name); // Assuming `name` is in `data.folder`
                    $('#folder_id').val(data.folder.id); // Assuming `id` is in `data.folder`

                    // Show the modal
                    $('#renameFolderModal').modal('show');
                }

            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Error renaming folder:', textStatus, errorThrown);
            }

        })
    })

    // rename folder code
</script>



@endsection
@section('scripts')
<!-- INTERNAL CHECK-ALL-MAIL JS -->


@endsection
