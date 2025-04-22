@extends('layouts.custom-master')

@section('styles')

@endsection

@section('content')

@section('custom-body')
	<body class="ltr main-body leftmenu error-1">
@endsection

@section('custom-body-page')
	<div class="page main-signin-wrapper">
@endsection

			<!-- Row -->
			<div class="row signpages text-center">

				<div class="col-md-12">
					<div class="card">
						<div class="row row-sm">
							<div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
								<div class="mt-5 pt-5 p-2 pos-absolute">
									<img src="{{asset('assets/img/brand/logo-light.png')}}" class="header-brand-img mb-4" alt="logo">
									<div class="clearfix"></div>
									<img src="{{asset('assets/img/svgs/user.svg')}}" class="ht-100 mb-0" alt="user">
									<h5 class="mt-4 text-white">Create Your Account</h5>
									<span class="tx-white-6 tx-13 mb-5 mt-xl-0">Signup to create, discover and connect with the global community</span>
								</div>
							</div>
							<div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
								<div class="main-container container-fluid">
									<div class="row row-sm">
										<div class="card-body mt-2 mb-2">
											<img src="{{asset('assets/img/brand/logo-light.png')}}" class="d-lg-none header-brand-img text-start float-start mb-4 error-logo-light" alt="logo">
											<img src="{{asset('assets/img/brand/logo.png')}}" class=" d-lg-none header-brand-img text-start float-start mb-4 error-logo" alt="logo">
											<div class="clearfix"></div>
											<h5 class="text-start mb-2">Signup for Free</h5>
											<p class="mb-4 text-muted tx-13 ms-0 text-start">It's free to signup and only takes a minute.</p>
											<form method="post" id="userSignup">
												@csrf
												<div class="form-group text-start" id="name_div">
													<label>Name</label>
													<input class="form-control" placeholder="Enter your Name" name="name" type="text">

													<span class="text-danger name_error error"></span>
												</div>
												<div class="form-group text-start" id="email_div">
													<label>Email</label>
													<input class="form-control" placeholder="Enter your email" name="email" type="text">

													<span class="text-danger email_error error"></span>
												</div>
												<div class="form-group text-start" id="password_div">
													<label>Password</label>
													<input class="form-control" placeholder="Enter your password" name="password" type="password">

													<span class="text-danger password_error error"></span>
												</div>
												<div class="form-group text-start" id="profile_image_div">
													<label>Profile Image</label>
													<input class="form-control"  name="profile_image" type="file">

													<span class="text-danger profile_image_error error"></span>
												</div>
												<button type="submit" class="btn btn-main-primary btn-block text-white">Create Account</button>
											</form>
											<div class="text-start mt-5 ms-0">
												<p class="mb-0">Already have an account? <a href="{{url('/')}}">Sign In</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- End Row -->



		</div>




@endsection



@section('scripts')
<script>


	$(document).ready(function(){
		$('#userSignup').submit(function(e){
        e.preventDefault(); // Prevent the default form submission
        var form = $('#userSignup')[0]; // Get the form element
        var formData = new FormData(form); // Create FormData object
        var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Get CSRF token
        var url="{{route('user.signup')}}";
		$('.text-danger').empty();
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
					Swal.fire({
					title: 'Success',
					text: response.message,
					icon: 'success',
					showCancelButton: false,
					confirmButtonColor: '#6259ca',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Ok',
					cancelButtonText: 'cancel!'
					}).then((result) => {
						if (result.isConfirmed) {
							$('#userSignup')[0].reset();

						}
					});
                } else {
					$.each(response.errors, function(field, errorMessages) {
                        // Set the error message for the corresponding field
                        $('.' + field + '_error').text(errorMessages[0]);
                    });

					//   $('#name_div').append('<span class="text-danger">'+response.errors[1]+'</span>')
					//   $('#password_div').append('<span class="text-danger">'+response.errors[2]+'</span>')
                }
            },
            error: function(xhr, status, error) {
				// console.log(error)
                // console.error('AJAX Error:', error);
            }
        });
    });
	})
</script>




@endsection

