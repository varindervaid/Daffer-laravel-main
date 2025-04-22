
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
    .hide {
        display: none;
    }
</style>
<!-- Page Header -->
<div class="page-header">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5">User Details</h2>
        <ol class="breadcrumb d-none">
            <li class="breadcrumb-item"><a href="{{url('user-management')}}">Users List</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Details</li>
        </ol>
    </div>
</div>

<section>
    <div class="container mt-4 custom-container-cls">
        <div class="row">
            <div class="col-md-12 p-4">
                <!-- User Details Card -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">User Details</h5>
                    </div>
                    <div class="card-body custom-User-info">
                        <dl class="row">
                            <dt class="col-3">Name</dt>
                            <dd class="col-9 opacity-75">{{ $user->name }}</dd>

                            <dt class="col-3">Email</dt>
                            <dd class="col-9 opacity-75">{{ $user->email }}</dd>

                            <dt class="col-3">Group</dt>
                            <dd class="col-9 opacity-75">
                                @php
                                // Explode the assigned_group to get an array of group IDs
                                $assigned_groups = explode(',', $user->assigned_group);

                                // Fetch the corresponding Group models for each group ID
                                $groups = \App\Models\Group::whereIn('id', $assigned_groups)->get();
                                @endphp

                                @foreach($groups as $group)
                                {{ $group->name }}{{ !$loop->last ? ',' : '' }} <!-- Display group names, separated by commas -->
                                @endforeach
                            </dd>
                            <dt class="col-3">Role</dt>
                            <dd class="col-9 opacity-75">{{ $user->role->name }}</dd>

                            <dt class="col-3">Status</dt>
                            <dd class="col-9 opacity-75">
                                @if($user->status == "2")
                                <span class="status bg-warning"></span> Pending
                                @elseif($user->status == "0")
                                <span class="status bg-danger"></span> Declined
                                @else
                                <span class="status bg-success"></span> Approved
                                @endif
                            </dd>

                            <dt class="col-3">Created At</dt>
                            <dd class="col-9 opacity-75">{{ $user->created_at->format('d M Y') }}</dd>
                        </dl>
                        <div class="row">
                            <!-- <dt class="col-sm-3">Profile Image</dt> -->
                            <div class="col-md-6">
                                @if ($user->profile_image)
                                <a href="{{ asset('storage/profile_images/' . basename($user->profile_image)) }}" target="_blank"><img class="userProfile" src="{{ asset('storage/profile_images/' . basename($user->profile_image)) }}" alt="Profile Image" class="img-fluid" style="max-width: 150px;"></a>
                                <a href="#" class="btn btn-primary mt-2" id="remove_profile_image" data-id="{{$user->id}}">Remove Image</a>
                                @else
                                    <img src="{{ asset('storage/profile_images/human-icon.jpg' ) }}" alt="Profile Image" class="img-fluid userProfile" style="max-width: 150px;">
                                    <div class="box mt-2 mb-2">
                                        <input type="file" style="width:237px" id="file-input" class="form-control" />
                                    </div>
                                    <div class="box-2">
                                        <div class="result"></div>
                                    </div>
                                    <div class="box-2 img-result hide">

                                        <img class="cropped" src="" alt="">
                                    </div>
                                    <div class="box">
                                        <div class="options hide">
                                            <input type="hidden" class="img-w" value="300" min="100" max="1200" />
                                        </div>
                                        <button class="btn btn-primary save hide mt-2">Save</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@php
    $encodedId = request()->segment(count(request()->segments()));
@endphp
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
        let userId = "{{ $encodedId }}";
        $.ajax({
            url: url, // Your URL here
            type: 'post',
            data: {
                image_value: imgSrc, // Your data to be sent
                userId: userId
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.status === 'success') {
                    $('.cropper-container').hide();
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

