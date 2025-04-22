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

        <h2 class="main-content-title tx-24 mg-b-5">Add Data</h2>
    </div>
</div>

<section>
    <div class="row">
        <!-- Left Side Card: Input Fields -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header p-3 mt-2">
                    <h6 class="card-title">Dynamic Input Fields</h6>
                </div>
                <div class="card-body">
                    <form id="add_data_form" action="{{route('add.data',[request('folder_id')])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div id="dynamic-field-container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="value"><b>File Name</b></label>
                                            <input type="text" name="file_name" id="file_name" class="form-control" placeholder="Enter file name" required maxlength="50">
                                            <span class="error text-danger" id="file_name-error"></span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="value"><b>Upload Image</b></label>
                                            <input type="file" name="images[]" multiple id="upload_image" class="form-control" placeholder="Enter file name" required>
                                            <span class="error text-danger" id="image-error"></span>

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="value"><b>Status</b></label>
                                            <select name="status" id="" class="form-control">
                                                <option value="online">Online</option>
                                                <option value="offline">Offline</option>
                                            </select>
                                            <span class="error text-danger" id="file_name-error"></span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="value"><b>Site</b></label>
                                            <input type="text" name="site" id="site" class="form-control" placeholder="Enter site" required>
                                            <span class="error text-danger" id="file_name-error"></span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="install_date"><b>Install Date</b></label>
                                            <input type="text" readonly name="install_date" id="install_date" class="form-control datepicker1" required>
                                            <span class="error text-danger" id="file_name-error"></span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="value"><b>System Id</b></label>
                                            <input type="text" name="system_id" id="system_id" class="form-control" placeholder="Enter system id" required>
                                            <span class="error text-danger" id="file_name-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div id="preview-container" style="margin-top: 10px; display: flex; flex-wrap: wrap; gap: 10px;"></div>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="title"><b>Group Name</b></label>
                                    <input type="text" class="form-control" name="group_name" placeholder="Enter group name" required>
                                </div>
                            </div>

                            <div class="row dynamic-field-row">
                                <div class="form-group col-md-4">
                                    <label for="title"><b>Field Title</b></label>
                                    <input type="text" class="form-control" name="fields[0][title]" placeholder="Enter title" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="value"><b>Field Value</b></label>
                                    <input type="text" class="form-control" name="fields[0][value]" placeholder="Enter value" required>
                                </div>
                                <div class="form-group col-md-4" style="margin-top: 27px;">
                                    <button type="button" class="btn btn-primary" id="add_dynamic_field">Add Field</button>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary mt-3" id="data_Submit_button">Save</button>
                    </form>
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
                            <div class="preview-wrapper" style="position: relative; display: inline-block; width: 80px; height: 80px; margin: 5px;" data-name="${file.name}" data-size="${file.size}">
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
        $('#data_Submit_button').on('click', function(e) {
            e.preventDefault();
            $('.error').empty();
            var folder_id = "{{ request('folder_id') }}";
            var url = "{{route('check.file.name')}}";
            var isValid = true;

            // Clear any previous error highlights
            $('input').css('border', '');


            // Loop through all input fields and check if any are empty
            $('#add_data_form input[required]').each(function() {
                if ($(this).attr('type') !== 'file') {
                    if ($(this).val().trim() === '') {
                        isValid = false; // Mark form as invalid
                        $(this).css('border', '1px solid red'); // Highlight the empty field
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
                        folder_id: folder_id,
                        id: ''
                    },
                    success: function(response) {
                        console.log(response)
                        if (response.status == 'error') {
                            isValid = false;
                            $('#file_name-error').html(response.message)
                        } else {
                            if (isValid) {
                                $('#add_data_form').submit();
                            }
                        }
                    }
                })
            }

            // If all required fields are filled, submit the form

        });

        // $('#data_Submit_button').on('click', function() {
        //     $('#add_data_form').submit();
        // })




        let fieldIndex = 1; // Track dynamic field index

        $('#add_dynamic_field').on('click', function() {
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

            $('#dynamic-field-container').append(newField);
            fieldIndex++;
        });

        // Remove dynamic fields
        $(document).on('click', '.remove-field', function() {
            $(this).closest('.dynamic-field-row').remove();
        });
    });

    document.getElementById('backButton').addEventListener('click', function() {
        if (document.referrer) {
            window.history.back();
        } else {
            window.location.href = "{{ url('/') }}"; // Redirect to homepage or a default page
        }
    });
</script>
@endsection
