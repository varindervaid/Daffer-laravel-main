@extends('layouts.master')
@section('styles')

@endsection

@section('content')

{{view('pages.message')}}
<style>
    .modal-open .slider-btns6 {
        display: none;
    }

    .pic__img {
        cursor: pointer;
    }
</style>
<!-- Page Header -->
<div class="page-header">
    <div class="align-items-center d-flex gap-3">
        @if(request('redirection')=='data-export')
        <a href="{{ url('data-export') }}" class="btn text-primary py-0">
            <i class="fa fa-mail-reply-all fa-lg"></i>
        </a>
        @else
        <a href="{{ url(getPreviousUrl(Request::segment(2),Request::segment(3))) }}" class="btn text-primary py-0">
            <i class="fa fa-mail-reply-all fa-lg"></i>
        </a>
        @endif
        <h2 class="main-content-title tx-24 mg-b-5">{{$data->file_name}}</h2>
    </div>
</div>


<section>
    <div class="row">
        <!-- Left Side Card: Main Data and Images -->
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header">
                    @if(permission_helper('4', 'edit_opt'))
                    <div class="me-2" style="float: left;">
                        <a href="{{ route('edit.data', [request('id')]) }}" class="btn btn-primary mb-3">Edit Data</a>
                    </div>
                    @endif
                    @if(permission_helper('4', 'add_opt'))
                    <div class="me-2" style="float: left;">
                        <a href="{{ route('add.more.data', [request('id')]) }}" class="btn btn-primary mb-3">Add Data</a>
                    </div>
                    @endif
                </div>
                <div class="card-body view-data-page">
                    <div class="row">

                        <div class="col-md-4">
                            <!-- Image Slider Section -->
                            @if(count($data->images) > 0)
                            <div class="container image-slider">
                                <div class="pic-container">
                                    @foreach($data->images as $key => $image)
                                    <div class="pic pic-{{ $key + 1 }}" >
                                        <img class="pic__img" src="{{ asset($image->image_path) }}" alt="" onclick="openModal('{{$key}}')">
                                    </div>
                                    @endforeach
                                </div>
                                <div class='slider-btns'>
                                    <button class="btn-left">
                                        < </button>
                                            <button class="btn-right"> > </button>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="col-md-8">
                            <div class="row ">
                                <div class="col-md-6">
                                    <strong for="Status">Status</strong>
                                </div>
                                <div class="col-md-6">
                                    @if($data->status=='online')
                                    <label class="badge rounded-pill bg-success">{{ucfirst($data->status)}}</label>
                                    @else
                                    <label for="Status" class="badge rounded-pill bg-danger">{{ucfirst($data->status)}}</label>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <strong for="Status">System Id</strong>
                                </div>
                                <div class="col-md-6">
                                    <label for="Status">{{$data->system_id}}</label>
                                </div>
                                <div class="col-md-6">
                                    <strong for="Status">Site</strong>
                                </div>
                                <div class="col-md-6">
                                    <label for="Status">{{ucfirst($data->site)}}</label>
                                </div>
                                <div class="col-md-6">
                                    <strong for="Status">Install date</strong>
                                </div>
                                <div class="col-md-6">
                                    <label for="Status">{{date('d M Y',strtotime($data->install_date))}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <!-- Main Data Grid -->

                            @php
                            // Decode the main data JSON
                            $decodedData = json_decode($data->data, true);

                            @endphp
                            @if(!empty($decodedData))
                            @foreach ($decodedData as $key => $fileData)
                            @php
                            $idKey = str_replace(' ', '-', $key); // Replace spaces with hyphens to make it a valid HTML ID
                            @endphp

                            <div class="accordion mt-2" id="deviceView">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $idKey }}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $idKey }}" aria-expanded="false" aria-controls="collapse{{ $idKey }}">
                                            {{ ucfirst($key) }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $idKey }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $idKey }}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            @if(count($decodedData[$key])>0)
                                            <a style="float:right;color:#6259ca" type="button" class="copy-btn hover-fade"><i class="fa fa-copy fa-lg " title="Copy to Clipboard"></i></a>
                                            @endif
                                            <div class="copy-content">
                                                @foreach($fileData as $value)
                                                <div class="item-row">
                                                    <strong>{{ $value['title'] }}:</strong> <span>{{ $value['value'] }}</span>
                                                    @if(permission_helper('4','delete_opt'))
                                                    <i data-group_nam="{{$key}}" data-title="{{$value['title']}}" data-value="{{$value['value']}}" data-id="{{request('id')}}" class="ti ti-trash remove_grouped_item" data-folder-id="1" data-group-id="1" style="color: red; cursor: pointer;"></i><br>
                                                    @endif
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side Card: Other Data -->
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Activity</h5>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="create-note">
                                <span class="fa-stack" style="font-size: 0.5em;">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
                                </span>
                                Create Note
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="create-note-div d-none">
                        <form action="{{route('add.data.activity.note')}}" method="post" id="dataActivityForm">
                            @csrf
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" value="{{old('subject')}}" name="subject" class="form-control">
                                @error('subject')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <span class="text-danger error" id="subject-error"></span>
                            </div>

                            <div class="form-group">
                                <label for="note">Note</label>
                                <textarea class="form-control ckeditor text-black" name="note" id="note">{{old('note')}}</textarea>
                                @error('note')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <span class="text-danger error" id="note-error"></span>
                            </div>
                            <div class="form-group">
                                <label for="follow_up">Follow up</label>
                                <input type="text" readonly name="follow_up" value="{{old('follow_up')}}" id="follow_up" class="form-control datepicker1">
                                @error('follow_up')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <span class="text-danger error" id="follow_up-error"></span>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="data_id" value="{{$data->id}}">
                                <input type="hidden" name="note_id" id="note_id" value="">
                                <input type="submit" name="submit" value="Save" class="btn btn-sm btn-primary">
                                <button type="button" class="btn btn-sm btn-outline-danger create-note">Cancel</button>
                            </div>
                        </form>
                    </div>

                    <div class="activity-container ">

                        @foreach(getdataActivity(request('id')) as $activity)
                        <div class="data-activity  bg-dark-transparent mb-3">
                            <a href="#" class="hover-fade copyDataActivityText"><i class="fa fa-copy fa-lg " title="Copy to Clipboard"></i></a>
                            <span class="activity-text">
                                <p class="mb-0"><a href="#" data-id="{{$activity->id}}" class="update-note">{{$activity->user->name}} ({{date('d-m-Y',strtotime($activity->follow_up))}})- {{$activity->subject}}</a></p>
                                <?= $activity->note ?>
                            </span>
                        </div>
                        @endforeach
                    </div>
                    <!-- Pagination Links -->
                    <div class="mt-5">
                        {{ getdataActivity(request('id'))->links('vendor.pagination.bootstrap-4') }} <!-- This will display Bootstrap styled pagination links -->
                    </div>
                </div>
            </div>
        </div>



    </div>
</section>


<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1></h1>
                <button type="button" class="close"  data-bs-dismiss="modal" aria-bs-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body popup-slider">
                <div class="container image-slider">
                    <div class="pic-container">
                        <!-- <img class="img-fit-cover" id="modalImage" src=""> -->
                        @foreach($data->images as $key => $image)
                        <div class="pic1 pic-{{ $key + 1 }}">
                            <img class="pic__img img-fit-cover" src="{{ asset($image->image_path) }}" alt="" >
                        </div>
                        @endforeach
                    </div>

                    <div class='slider-btns1'>
                        <button class="btn-left1"> < </button>
                                <button class="btn-right1"> > </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<script>
    $('.copyDataActivityText').on('click', function() {
        let targetClass = $(this)
        var $button = $(this)
        let content = targetClass.siblings('.activity-text').text()
        content = content
            .replace(/<[^>]+>/g, '') // Remove HTML tags
            .replace(/\s*\n\s*/g, '\n') // Normalize newlines
            .replace(/\s+$/g, '') // Remove trailing spaces
            .trim();
        navigator.clipboard.writeText(content)
        $button.text('Copied');
        setTimeout(function() {
            $button.html('<i class="fa fa-copy fa-lg " title="Copy to Clipboard"></i>');
        }, 500);


    });

    $(document).ready(function() {
        $('.copy-btn').on('click', function() {
            var $button = $(this); // Store reference to the button
            var content = $button.closest('.accordion-body').find('.copy-content').html();

            // Clean the content: remove HTML tags and normalize newlines
            content = content
                .replace(/<[^>]+>/g, '') // Remove HTML tags
                .replace(/\s*\n\s*/g, '\n') // Normalize newlines
                .replace(/\s+$/g, '') // Remove trailing spaces
                .trim(); // Trim leading/trailing spaces

            // Create a temporary textarea to hold the formatted content
            var tempInput = $('<textarea>');
            $('body').append(tempInput);

            // Preserve newline formatting when setting the value
            tempInput.val(content).select();

            try {
                document.execCommand('copy');
                $button.text('Copied'); // Update button text to "Copied"
                // Revert button text back to "Copy" after 1 second
                setTimeout(function() {
                    $button.html('<i class="fa fa-copy fa-lg" title="Copy to Clipboard" style="color:#6259ca"></i>');
                }, 500);

            } catch (err) {
                console.error('Failed to copy content:', err);
            }

            tempInput.remove(); // Clean up the temporary textarea
        });
    });
    $('#dataActivityForm').on('submit', function(e) {
        $('.error').empty();
        let isValidate = true;
        let subject = $('#subject').val();
        let note = ckeditordata.getData();
        let follow_up = $('#follow_up').val();
        if (subject == '') {
            isValidate = false;
            $('#subject-error').text('The subject field is required.');
        } else {
            if (subject.length > 255) {
                isValidate = false;
                $('#subject-error').text('The subject field must not be greater than 255 characters.');
            }
        }
        if (note == '') {
            isValidate = false;
            $('#note-error').text('The note field is required.');
        }
        if (follow_up == '') {
            isValidate = false;
            $('#follow_up-error').text('The follow up field is required.');
        }

        return isValidate;
    })

    $(".create-note").on('click', function() {
        $('.error').html('');
        $('.create-note-div').toggleClass('d-none');
        $('#subject').val('');
        $('#follow_up').val('');
        $('#note_id').val('');
        if (ckeditordata) {
            ckeditordata.setData(''); // Clear the CKEditor content
        }
    });

    $('.update-note').on('click', function() {
        $('.error').html('');
        let id = $(this).data('id');
        url = "{{route('get.data.activity.note')}}"

        $.ajax({
            url: url,
            type: 'get',
            data: {
                id: id,
            },
            success: function(data) {
                $('#subject').val(data.subject);
                ckeditordata.setData(data.note);
                var dateParts = data.follow_up.split('-');
                var formattedDate = dateParts[2] + '-' + dateParts[1] + '-' + dateParts[0];
                $('#follow_up').val(formattedDate);
                $('#note_id').val(data.id);
                $(".datepicker1").datepicker({
                    dateFormat: "dd-mm-yy"
                });
                $('.create-note-div').removeClass('d-none');
            }
        })
    })

    const slides = document.querySelectorAll('.pic');
    const btnRight = document.querySelector('.btn-right');
    const btnLeft = document.querySelector('.btn-left');

    let curSlide = 0;
    const maxSlide = slides.length;

    const goToSlide = function(slide) {
        slides.forEach(function(s, i) {
            const translateXNum = 80 * (i - slide);
            let translateYNum, rotateDeg, grayscaleNum, zIndexNum, opacityNum;
            if (translateXNum === 0) {
                translateYNum = 0;
                rotateDeg = 0;
                grayscaleNum = 0;
                zIndexNum = 1;
                opacityNum = 100;
            } else if (translateXNum < 0) {
                translateYNum = 5;
                rotateDeg = -5;
                grayscaleNum = 1;
                zIndexNum = 0;
                opacityNum = 20;
            } else {
                translateYNum = 5;
                rotateDeg = 5;
                grayscaleNum = 1;
                zIndexNum = 0;
                opacityNum = 20;
            }
            s.style.transform = `translate(${translateXNum}%, ${translateYNum}%) rotate(${rotateDeg}deg)`;
            s.style.filter = `grayscale(${grayscaleNum})`;
            s.style.zIndex = zIndexNum;
            s.style.opacity = `${opacityNum}%`
        });
    };
    goToSlide(0);

    const nextSlide = function() {
        if (curSlide === maxSlide - 1) {
            curSlide = 0;
        } else {
            curSlide++;
        }
        goToSlide(curSlide);
    }

    const prevSlide = function() {
        if (curSlide === 0) {
            curSlide = maxSlide - 1
        } else {
            curSlide--;
        }
        goToSlide(curSlide);
    }
    if(maxSlide>0){
        btnRight.addEventListener('click', nextSlide)
        btnLeft.addEventListener('click', prevSlide)
    }





    const slides1   = document.querySelectorAll('.pic1');
    const btnRight1 = document.querySelector('.btn-right1');
    const btnLeft1 = document.querySelector('.btn-left1');

    let curSlide1 = 0;

    const maxSlide1 = slides1.length;

    const goToSlide1 = function(slide) {

        slides1.forEach(function(s, i) {

            const translateXNum = 80 * (i - slide);
            let translateYNum, rotateDeg, grayscaleNum, zIndexNum, opacityNum;
            if (translateXNum === 0) {

                translateYNum = 0;
                rotateDeg = 0;
                grayscaleNum = 0;
                zIndexNum = 1;
                opacityNum = 100;
            } else if (translateXNum < 0) {

                translateYNum = 5;
                rotateDeg = -5;
                grayscaleNum = 1;
                zIndexNum = 0;
                opacityNum = 20;
            } else {

                translateYNum = 5;
                rotateDeg = 5;
                grayscaleNum = 1;
                zIndexNum = 0;
                opacityNum = 20;
            }
            s.style.transform = `translate(${translateXNum}%, ${translateYNum}%) rotate(${rotateDeg}deg)`;
            s.style.filter = `grayscale(${grayscaleNum})`;
            s.style.zIndex = zIndexNum;
            s.style.opacity = `${opacityNum}%`
        });
    };


    const nextSlide1 = function() {
        if (curSlide1 == maxSlide1 - 1) {
            curSlide1 = 0;
        } else {
            curSlide1++;
        }
        goToSlide1(curSlide1);
    }

    const prevSlide1 = function() {
        if (curSlide1 == 0) {
            curSlide1 = maxSlide1 - 1
        } else {
            curSlide1--;
        }
        goToSlide1(curSlide1);
    }

        btnRight1.addEventListener('click', nextSlide1)
        btnLeft1.addEventListener('click', prevSlide1)

    function openModal(key) {
        var modal = document.getElementById("imageModal");
        curSlide1 = key;
        goToSlide1(curSlide1);
        $('#imageModal').modal('show');
    }


    $(document).ready(function() {
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

    $('.remove_grouped_item').on('click', function() {
        let group_name = $(this).data('group_nam');
        let title = $(this).data('title');
        let value = $(this).data('value');
        let id = $(this).data('id');
        let url = "{{route('file.item.delete')}}";
        let targetElement = $(this).parent()
        console.log(group_name, title, value, id);

        Swal.fire({
            title: 'Are you sure?',
            text: "You want to delete this item?",
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
                    type: 'post',
                    data: {
                        group_name: group_name,
                        title: title,
                        value: value,
                        id: id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), // CSRF token
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            // Hide or remove the specific row (the entire item-row)
                            targetElement.fadeOut('slow', function() {
                                $(this).remove(); // Remove the row completely from the DOM
                            });
                            if (response.itemCount == 0) {
                                targetElement
                                    .closest('.copy-content') // Find the nearest `.copy-content` container
                                    .siblings('.copy-btn') // Find the `.copy-btn` sibling
                                    .hide(); //
                            }

                            Swal.fire({
                                title: 'Success!',
                                text: response.message,
                                icon: 'success',
                                confirmButtonColor: '#6259ca',
                                confirmButtonText: 'Ok'
                            });

                        } else {
                            // Handle failure case (optional)
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log('Error:', error);
                        alert('An error occurred. Please try again.');
                    }
                });
            }
        });
    });


    let ckeditordata;

    ClassicEditor
        .create(document.querySelector('.ckeditor'), {
            resize_dir: 'both',
        })
        .then(editor => {
            ckeditordata = editor; // Save the editor instance for later use
        })
        .catch(error => {
            console.error('Error initializing CKEditor:', error); // Log any errors
        });
</script>
@endsection
