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
<style>
    .custom-profile {
        font-family: 'Arial', sans-serif;
        padding: 20px;
    }

    .profile-image-section img {
        border: 4px solid #ddd;
        border-radius: 10px;
    }

    .profile-image-section .btn {
        font-size: 14px;
        margin-top: 10px;
    }

    .info-section,
    .status-section {
        padding: 15px;
        margin-bottom: 20px;
        border-left: 5px solid #007bff;
    }

    .dark-theme .section-title {
        color: #d0d0e2;
    }

    .section-title {
        font-size: 18px;
        font-weight: bold;
        color: #333;
        margin-bottom: 15px;
        text-transform: uppercase;
    }

    .info-section dl dt {
        font-weight: bold;
        color: #555;
    }

    .info-section dl dd {
        margin-bottom: 0.8rem;
    }

    .status-section .status-display {
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }

    .badge {
        display: flex;
        align-items: center;
        font-size: 16px;
        padding: 10px;
        border-radius: 8px;
    }

    .badge i {
        margin-right: 8px;
    }

    .status-section .bg-warning {
        background-color: #ffc107;
        color: #fff;
    }

    .status-section .bg-danger {
        background-color: #dc3545;
        color: #fff;
    }

    .status-section .bg-success {
        background-color: #28a745;
        color: #fff;
    }

    .hide {
        display: none;
    }
</style>
<!-- Page Header -->
<div class="page-header">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5">My Profile</h2>
        <ol class="breadcrumb d-none">
            <li class="breadcrumb-item"><a href="{{url('user-management')}}">Users List</a></li>
            <li class="breadcrumb-item active" aria-current="page">My Profile</li>
        </ol>
    </div>
</div>

<section>
    <div class="container mt-4 custom-container-cls">
        <div class="row">
            <div class="col-md-12">
                <!-- User Details Card -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">My profile</h5>
                    </div>
                    <div class="card-body custom-profile">
                        <div class="row">
                            <!-- Profile Image Section -->
                            <div class="col-md-4 text-center profile-image-section">
                                @if ($user->profile_image)
                                <a href="{{ asset('storage/profile_images/' . basename($user->profile_image)) }}" target="_blank">
                                    <img class="userProfile" src="{{ asset('storage/profile_images/' . basename($user->profile_image)) }}" alt="Profile Image" class="img-fluid rounded mb-3" style="max-width: 150px;">
                                </a>
                                <br>
                                <a href="#" class="btn btn-danger mt-2" id="remove_profile_image" data-id="{{ $user->id }}">Remove Image</a>
                                @else
                                <img src="{{ asset('storage/profile_images/human-icon.jpg') }}" alt="Profile Image" class="img-fluid rounded mb-3 userProfile" style="max-width: 150px;">
                                <!-- <br>
                                <a href="#" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#upload_image" data-id="{{ $user->id }}">Upload Image</a> -->
                                <main class="page cropped_image_section">
                                    <div class="box">
                                        <input type="file" id="file-input" class="form-control" />
                                    </div>
                                    <div class="box-2">
                                        <div class="result"></div>
                                    </div>
                                    <div class="box-2 img-result hide">
                                        <img class="cropped" src="" alt="">
                                    </div>
                                    <div class="box">
                                        <div class="options hide d-none">
                                            <label> Width</label>
                                            <input type="number" class="img-w" value="300" min="100" max="1200" />
                                        </div>
                                        <button class="btn btn-primary save hide">Save</button>
                                    </div>
                                </main>
                                @endif
                            </div>

                            <!-- User Information Section -->
                            <div class="col-md-8">
                                <div class="info-section">
                                    <h5 class="section-title">User Information</h5>
                                    <dl class="row mb-0">
                                        <dt class="col-sm-4">Name</dt>
                                        <dd class="col-sm-8 opacity-75">{{ $user->name }}</dd>

                                        <dt class="col-sm-4">Email</dt>
                                        <dd class="col-sm-8 opacity-75">{{ $user->email }}</dd>
                                        @if(!empty($user->assigned_group))
                                        <dt class="col-sm-4">Group</dt>
                                        <dd class="col-sm-8 opacity-75">
                                            @php
                                            $assigned_groups = explode(',', $user->assigned_group);
                                            $groups = \App\Models\Group::whereIn('id', $assigned_groups)->get();
                                            @endphp
                                            @foreach($groups as $group)
                                            {{ $group->name }}{{ !$loop->last ? ', ' : '' }}
                                            @endforeach
                                        </dd>
                                        @endif
                                        <dt class="col-sm-4">Role</dt>
                                        <dd class="col-sm-8 opacity-75">{{ $user->role->name }}</dd>

                                        <dt class="col-sm-4">Created At</dt>
                                        <dd class="col-sm-8 opacity-75">{{ $user->created_at->format('d M Y H:i') }}</dd>
                                    </dl>
                                </div>

                                <!-- Status Section -->
                                <div class="status-section mt-4">
                                    <h5 class="section-title">Status</h5>
                                    <div class="status-display">
                                        @if($user->status == "2")
                                        <span class="badge bg-warning p-2">
                                            <i class="fas fa-clock"></i> Pending
                                        </span>
                                        @elseif($user->status == "0")
                                        <span class="badge bg-danger p-2">
                                            <i class="fas fa-times"></i> Declined
                                        </span>
                                        @else
                                        <span class="badge bg-success p-2">
                                            <i class="fas fa-check"></i> Approved
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="upload_image" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="roleModalHeading">Upload Image</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="upload_image_form" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="profile_image">Profile Image</label>
                        <input type="file" class="form-control" style="height:auto" id="upload_profile_image" name="profile_image">
                        <span class="text-danger error"></span>
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


<!-- CROP IMAGE JS START -->
<script>
    // vars
    let result = document.querySelector('.result'),
        img_result = document.querySelector('.img-result'),
        img_w = document.querySelector('.img-w'),
        img_h = document.querySelector('.img-h'),
        options = document.querySelector('.options'),
        save = document.querySelector('.save'),
        dwn = document.querySelector('.download'),
        upload = document.querySelector('#file-input'),
        cropper = '';

    // on change show image with crop options
    upload.addEventListener('change', (e) => {
        if (e.target.files.length) {
            const reader = new FileReader();
            reader.onload = (e) => {
                if (e.target.result) {
                    let img = document.createElement('img');
                    img.id = 'image';
                    img.src = e.target.result
                    result.innerHTML = '';
                    result.appendChild(img);
                    save.classList.remove('hide');
                    cropper = new Cropper(img);
                }
            };
            reader.readAsDataURL(e.target.files[0]);
        }
    });

    // save on click
    save.addEventListener('click', (e) => {
        e.preventDefault();
        let imgSrc = cropper.getCroppedCanvas({
            width: img_w.value // input value
        }).toDataURL();

        var url = "{{route('save.croped.image')}}";
        $.ajax({
            url: url, // Your URL here
            type: 'post',
            data: {
                image_value: imgSrc // Your data to be sent
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Adding the CSRF token to the request header
            },
            success: function(response) {
                if (response.status === 'success') {
                    $('.cropped_image_section').hide();
                    //btn.closest('tr').remove();
                    Swal.fire({
                        title: 'Success!',
                        text: 'Profile image updated successfully',
                        icon: 'success',
                        confirmButtonColor: '#6259ca',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload(); // This will refresh the page and reflect the changes
                        }
                    });


                }
            },
            error: function(xhr, status, error) {

            }
        });
    });
</script>

<!-- CROP IMAGE JS END -->
<script>
    $('#upload_image_form').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission
        var form = $('#upload_image_form')[0]; // Get the form element
        var formData = new FormData(form); // Create FormData object
        var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Get CSRF token
        var url = '{{ route("upload.profile.image") }}';


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
                console.log(response)
                if (response.status === 'success') {

                    // var role = response.data;
                    // var statusClass = 'bg-success'
                    // var statusText = 'Active'

                    Swal.fire({
                        title: 'Success!',
                        text: 'The profile image has been uploaded successfully.',
                        icon: 'success',
                        confirmButtonColor: '#6259ca',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Reload the current page
                            location.reload(); // This will refresh the page and reflect the changes
                        }
                    });

                    $('#upload_image').modal('hide');
                    // $('#role_submit')[0].reset();
                    // Optionally clear the form or perform other actions
                } else {
                    $('.error').text(response.errors.profile_image[0]);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
            }
        });
    });


    // remove profile image code start
    $('#remove_profile_image').on('click', function() {
        var url = '{{route("delete.profile.image") }}';
        var id = $(this).data('id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You want to delete this profile image!",
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
                    type: 'get',
                    dataType: 'json',
                    data: {
                        id: id
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                title: 'Success!',
                                text: 'Profile image deleted successfully',
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
                            console.error('Error fetching role:', response.message);
                        }
                    },

                });

            } else {
                console.log('Delete action cancelled');
            }
        });
    })
    // remove profile image code end
</script>






@endsection
@section('scripts')


@endsection
