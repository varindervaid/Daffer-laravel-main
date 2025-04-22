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
        <h2 class="main-content-title tx-24 mg-b-5">Add Grouped Data</h2>
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
                    <form id="add_data_form" action="{{ route('add.more.data', [request('id')]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div id="dynamic-field-container">


                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="title"><b>Group Name</b></label>
                                    <input type="text" class="form-control" name="group_name" id="data_group_name" placeholder="Enter group name" required>
                                    <span class="text-danger error" id="data_group_name_error"></span>
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
        $('#data_Submit_button').on('click', function(e) {
            e.preventDefault();
            $('.error').empty();
            var isValid = true;
            // Clear any previous error highlights
            $('input').css('border', '');

            var group_name = $('#data_group_name').val();
            if (group_name !== '') {
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                var data_id = "{{request('id')}}";
                var url = "{{route('check.data.group.name')}}";

                // Perform the AJAX request and handle form submission inside the callback
                $.ajax({
                    url: url,
                    type: 'post',
                    data: {
                        group_name: group_name,
                        data_id: data_id
                    },
                    headers: {
                        'X-CSRF-TOKEN': csrfToken // Add CSRF token to the request headers
                    },
                    success: function(data) {
                        console.log(data);
                        if (data.status == 'error') {
                            $('#data_group_name_error').text(data.message);
                            $('#data_group_name').css('border', '1px solid red');
                            isValid = false;
                        }

                        // After AJAX completes, validate the rest of the form
                        $('#add_data_form input[required]').each(function() {
                            if ($(this).attr('type') !== 'file') {
                                if ($(this).val().trim() === '') {
                                    isValid = false; // Mark form as invalid
                                    $(this).css('border', '1px solid red'); // Highlight the empty field
                                }
                            }
                        });

                        // Submit the form only if valid
                        if (isValid) {
                            $('#add_data_form').submit();
                        }
                    }
                });
            } else {
                // Handle validation for the rest of the form if group_name is empty
                $('#add_data_form input[required]').each(function() {
                    if ($(this).attr('type') !== 'file') {
                        if ($(this).val().trim() === '') {
                            isValid = false; // Mark form as invalid
                            $(this).css('border', '1px solid red'); // Highlight the empty field
                        }
                    }
                });

                // Submit the form only if valid
                if (isValid) {
                    $('#add_data_form').submit();
                }
            }
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


</script>
@endsection
