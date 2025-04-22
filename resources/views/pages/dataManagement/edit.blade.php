@extends('layouts.master')
@section('styles')
<!-- Add any additional CSS styling if needed -->
@endsection

@section('content')
@if (session('success'))
<div class="alert alert-success mt-3">
    {{ session('success') }}
</div>
@endif
@if (session('error'))
<div class="alert alert-danger mt-3">
    {{ session('error') }}
</div>
@endif

<!-- Page Header -->
<div class="page-header">
    <div class="align-items-center d-flex gap-3">
        <a href="{{ url(getPreviousUrl(Request::segment(2),Request::segment(3))) }}" class="btn text-primary py-0">
            <i class="fa fa-mail-reply-all fa-lg"></i>
        </a>
        <h2 class="main-content-title tx-24 mg-b-5">Edit Data</h2>
    </div>
</div>

<section>
    <div class="row">
        <!-- Left Side Card: Input Fields -->
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header ">

                </div>
                <div class="card-body">
                    <form action="{{route('update.data',[request('id')])}}" id="edit_data_form" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div id="dynamic-field-container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row dynamic-field-row">

                                        <div class="form-group col-md-6">
                                            <label for="value"><b>File name</b></label>
                                            <input type="text" name="file_name" id="file_name" value="{{$data->file_name}}" class="form-control" placeholder="Enter file name" required>
                                            <span class="error text-danger" id="file_name-error"></span>
                                        </div>

                                        <div class="form-group col-md-6 ">
                                            <label for="value" class="text-nowrap"><b>Upload Image</b></label>
                                            <div class="">

                                                <input type="file" name="images[]" multiple id="upload_image" class="form-control" placeholder="Enter file name" required>
                                                <span class="error text-danger" id="image-error"></span>

                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="status"><b>Status</b></label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="online" {{$data->status=='online'?'selected':''}}>Online</option>
                                                <option value="offline" {{$data->status=='offline'?'selected':''}}>Offline</option>
                                            </select>
                                            <span class="error text-danger" id="file_name-error"></span>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="site"><b>Site</b></label>
                                            <input type="text" name="site" value="{{$data->site}}" id="site" class="form-control" placeholder="Enter site" required>
                                            <span class="error text-danger" id="file_name-error"></span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="install_date"><b>Install date</b></label>
                                            <input type="text" readonly name="install_date" value="{{date('d-m-Y',strtotime($data->install_date))}}" id="install_date" class="form-control datepicker1" required>
                                            <span class="error text-danger" id="file_name-error"></span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="system_id"><b>System Id</b></label>
                                            <input type="text" name="system_id" value="{{$data->system_id}}" id="system_id" class="form-control" placeholder="Enter system id" required>
                                            <span class="error text-danger" id="file_name-error"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @php
                            $dataGroups = [];
                            $dataGroups[] = array_keys(json_decode($data->data, true)); // Get the keys
                            @endphp

                            @if(count($dataGroups) > 0)
                            @foreach($dataGroups[0] as $dataGroup)
                            <div class="col-md-4 mb-3">
                                <div class="p-3 deleteDataGroupText  bg-light rounded">
                                    {{$dataGroup}}
                                    @if(permission_helper('4','delete_opt'))
                                    <a href="#" class="deleteDataGroup" data-group-name="{{$dataGroup}}" data-id={{$data->id}}><i class="ti ti-trash text-danger"></i></a>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <button type="button" id="data_Submit_button" class="btn btn-primary mt-3">Save</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-4 imageDiv">
            <div class="card mb-4">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <div class="col-md-12">

                        @if(count($data->images)>0)
                        <label><b>Uploaded Image</b></label>
                        <div class="d-flex flex-wrap mb-2">

                            @foreach($data->images as $image)
                            <div class="" style="position: relative; display: inline-block; width: 80px; height: 80px; margin: 2px; padding:2px">
                                <a href="{{asset($image->image_path)}}" target="_blank"><img src="{{asset($image->image_path)}}" alt="image" style="width: 100%; height: 100%; object-fit: cover; border-radius: 5px; border: 1px solid #ccc;"></a>
                                <button type="button" class="data_image_delete  pos-absolute" data-id="{{$image->id}}" style="background: none; border: none; cursor: pointer; color: red;line-height: normal;right: -4px;top: -4px;">
                                    <i class="fas fa-times-circle"></i> <!-- Font Awesome cross icon -->
                                </button>
                            </div>
                            @endforeach
                        </div>
                        <hr>
                        @endif

                        <div id="preview-container" style="margin-top: 10px; display: flex; flex-wrap: wrap; padding:2px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        let fileArray = []; // To store selected files
        const $uploadInput = $('#upload_image');
        const $previewContainer = $('#preview-container');

        // Handle file selection
        $uploadInput.on('change', function(event) {
            const files = Array.from(event.target.files);
            $('#image-error').text(''); // Clear error messages

            files.forEach((file) => {
                if (file.type.startsWith('image/')) {
                    // Avoid adding duplicate files
                    if (!fileArray.some((f) => f.name === file.name && f.size === file.size)) {
                        fileArray.push(file); // Add file to array

                        // Create a preview element
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const $previewWrapper = $(`
                            <div class="preview-wrapper" style="position: relative; display: inline-block; width: 80px; height: 80px; margin: 2px;padding:2px" data-name="${file.name}" data-size="${file.size}">
                                <img src="${e.target.result}" style="width: 100%; height: 100%; object-fit: cover; border-radius: 5px; border: 1px solid #ccc;">
                                <i class="fas fa-times-circle remove-icon" style="position: absolute; top: -5px; right: -5px; color: red; cursor: pointer;"></i>
                            </div>
                        `);

                            // Add click event to remove icon
                            $previewWrapper.find('.remove-icon').on('click', function() {
                                const fileName = $previewWrapper.data('name');
                                const fileSize = $previewWrapper.data('size');
                                // Remove the file from the array
                                fileArray = fileArray.filter((f) => !(f.name === fileName && f.size === fileSize));
                                // Remove the preview
                                $previewWrapper.remove();
                                // Update the input field
                                updateInputFiles();
                            });

                            $previewContainer.append($previewWrapper);
                        };
                        reader.readAsDataURL(file);
                    }
                } else {
                    $('#image-error').text(`File "${file.name}" is not a valid image.`);
                }
            });

            updateInputFiles(); // Sync input files
        });

        // Update the file input to reflect the current fileArray
        function updateInputFiles() {
            const dataTransfer = new DataTransfer();
            fileArray.forEach((file) => dataTransfer.items.add(file)); // Add remaining files
            $uploadInput[0].files = dataTransfer.files; // Update input files
        }
    });

    $(document).ready(function() {
        $('.deleteDataGroup').on('click', function() {
            let targetClass = $(this);
            let url = "{{route('delete.data.group')}}";
            let id = $(this).data('id');
            let groupName = $(this).data('group-name');
            Swal.fire({
                title: 'Are you sure?',
                text: "You want to detele this group?",
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
                        data: {
                            'id': id,
                            'groupName': groupName,
                        },
                        success: function(response) {
                            if (response.status === 'success') {

                                Swal.fire({
                                    title: 'Success!',
                                    text: response.message,
                                    icon: 'success',
                                    confirmButtonColor: '#6259ca',
                                    confirmButtonText: 'Ok'
                                }).then(result=>{
                                    if(result.isConfirmed){
                                        targetClass.parent().parent().animate({
                                            opacity: 0
                                        }, 'slow', function() {
                                            $(this).hide(); // Hide after fading
                                        });
                                    }
                                })


                            } else {
                                console.error('Error fetching role:', response.message);
                            }
                        },

                    });

                } else {}
            });
        })

        $('.data_image_delete').on('click', function() {
            let currentElement = $(this);
            url = "{{route('delete.data.image')}}"
            id = $(this).data('id')
            Swal.fire({
                title: 'Are you sure?',
                text: "You want to detele this image?",
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
                        data: {
                            'id': id,
                        },
                        success: function(response) {
                            if (response.status === 'success') {
                                //btn.closest('tr').remove();
                                Swal.fire({
                                    title: 'Success!',
                                    text: 'Image deleted successfully',
                                    icon: 'success',
                                    confirmButtonColor: '#6259ca',
                                    confirmButtonText: 'Ok'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        currentElement.parent().animate({
                                            opacity: 0
                                        }, 'slow', function() {
                                            $(this).hide(); // Hide after fading
                                        });

                                    }
                                });


                            } else {
                                console.error('Error fetching role:', response.message);
                            }
                        },

                    });

                } else {}
            });
        })

        $('#data_Submit_button').on('click', function(e) {
            e.preventDefault();
            $('.error').empty();
            var id = "{{ request('id') }}";
            var url = "{{route('check.file.name')}}";
            var isValid = true;

            // Clear any previous error highlights
            $('input').css('border', '');


            // Loop through all input fields and check if any are empty
            $('#edit_data_form input[required]').each(function() {
                if ($(this).attr('type') !== 'file') {
                    if ($(this).val().trim() === '') {
                        isValid = false;
                        $(this).css('border', '1px solid red');
                    }
                }

            });
            fileInput = $('#upload_image');
            let allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
            if (fileInput[0].files.length > 0) {
                for (let i = 0; i < fileInput[0].files.length; i++) {
                    let fileName = fileInput[0].files[i].name; // Get the file name
                    if (!allowedExtensions.exec(fileName)) {
                        isValid = false;
                        fileInput.addClass('error');
                        $('#image-error').html('Please upload image files (JPG, JPEG, PNG)')
                        break;
                    }
                }
            }
            if ($('#file_name').val()) {
                $.ajax({
                    url: url,
                    type: 'get',
                    data: {
                        file_name: $('#file_name').val(),
                        folder_id: '',
                        id: id
                    },
                    success: function(response) {
                        console.log(response)
                        if (response.status == 'error') {
                            isValid = false;
                            $('#file_name-error').html(response.message)
                        } else {
                            if (isValid) {
                                $('#edit_data_form').submit();
                            }
                        }
                    }
                })
            }

            // If all required fields are filled, submit the form

        });

        // Function to get the maximum index from the existing dynamic fields
        function getMaxFieldIndex() {
            let maxIndex = 0;
            // Loop through each field name attribute to extract the index
            $('input[name^="fields"]').each(function() {
                // Extract the index from the name attribute (fields[0][title], etc.)
                let name = $(this).attr('name');
                let matches = name.match(/\[(\d+)\]/); // Extract the number inside brackets
                if (matches && matches[1]) {
                    let index = parseInt(matches[1]);
                    if (index > maxIndex) {
                        maxIndex = index;
                    }
                }
            });
            return maxIndex;
        }

        // On add field button click
        $('#add_dynamic_field').on('click', function() {
            // Get the current maximum field index and increment it
            let fieldIndex = getMaxFieldIndex() + 1;

            const newField = `
            <div class="row dynamic-field-row mt-3">
                <div class="form-group col-md-4">
                    <label for="title"><b>Field Title</b></label>
                    <input type="text" class="form-control" name="fields[${fieldIndex}][title]" placeholder="Enter title" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="value"><b>Field Value</b></label>
                    <input type="text" class="form-control" name="fields[${fieldIndex}][value]" placeholder="Enter value" required>
                </div>
                <div class="form-group col-md-4" style="margin-top: 27px;">
                    <button type="button" class="btn btn-danger remove-field">Remove</button>
                </div>
            </div>`;

            // Append the new field
            $('#dynamic-field-container').append(newField);
        });

        // Remove dynamic fields
        $(document).on('click', '.remove-field', function() {
            $(this).closest('.dynamic-field-row').remove();
        });
    });
</script>


@endsection
