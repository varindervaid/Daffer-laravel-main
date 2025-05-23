@extends('layouts.master')

@section('styles')

@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">About Us</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page">About Us</li>
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center">
									<button type="button" class="btn btn-white btn-icon-text my-2 me-2">
									  <i class="fe fe-download me-2"></i> Import
									</button>
									<button type="button" class="btn btn-white btn-icon-text my-2 me-2">
									  <i class="fe fe-filter me-2"></i> Filter
									</button>
									<button type="button" class="btn btn-primary my-2 btn-icon-text">
									  <i class="fe fe-download-cloud me-2"></i> Download Report
									</button>
								</div>
							</div>
						</div>
						<!-- End Page Header -->

						<div class="container">
							<!-- Row-->
							<div class="row row-sm">
								<div class="col-xl-12">
									<div class="text-center p-4">
										<h2>We're a Team of Creators & Innovators.</h2>
										<p class="px-0 px-md-5">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
									</div>
								</div>
							</div>
							<!-- End Row -->

							<!-- Row-->
							<div class="row row-sm">
								<div class="col-xl-12">
									<div class="card custom-card">
										<img src="{{asset('assets/img/media/team.jpg')}}" alt="img" class="rounded-6">
									</div>
								</div>
							</div>
							<!-- End Row -->

							<!-- Row -->
							<div class="row row-sm">
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="row row-sm">
										<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="mt-5">
												<h3 class="mb-3">Creative <span class="text-primary">Design</span> for a Bright Future.</h3>
												<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered by injected humour, or randomised words which don't look even slightly believable.</p>
												<p>All the Lorem Ipsum generators on the Internet tend to repeat Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
												<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
												<a href="javascript:void(0);" class="btn ripple btn-primary btn-sm" role="button">Contact Us</a>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="text-xl-end text-center">
												<img src="{{asset('assets/img/media/team.png')}}" alt="img" class="rounded-6">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

							<!-- Row -->
							<div class="row row-sm">
								<div class="col-xl-12">
									<div class="pt-5 pb-4">
										<h3>The Values We Live By...</h3>
										<p class="tx-14 mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam similique provident Lorem ipsum dolor sit amet consectetur !</p>
										<div>
											<div class="d-flex mb-4">
												<div>
													<svg class="moto-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
														<path fill="#b2b1ff" d="M12,14c-3.31371,0-6-2.68629-6-6s2.68629-6,6-6s6,2.68629,6,6C17.99638,11.31221,15.31221,13.99638,12,14z"/>
														<path fill="#6d7ee5" d="M15.70056,12.71338C14.68073,13.5155,13.39789,13.99847,12,14c-1.39984,0-2.68463-0.48334-3.70532-1.28693
														c-3.31274,1.32574-5.80756,4.38422-6.22925,8.17853c-0.05969,0.54901,0.33679,1.04248,0.88574,1.10254L20.93945,22
														c0.03656,0,0.07306-0.00201,0.10938-0.00586c0.54895-0.06006,0.94543-0.55353,0.88574-1.10254
														C21.51917,17.15436,19.06299,14.05371,15.70056,12.71338z"/></svg>
												</div>
												<div class="ms-4">
													<h5 class="tx-medium">Hardworking !</h5>
													<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos sint, officia vel ab perferendis, dolores placeat dolor aliquam debitis eius, illum ullam ratione blanditiis fugiat omnis beatae odio vitae!</p>
												</div>
											</div>
											<div class="d-flex mb-4">
												<div>
													<svg class="moto-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#6d7ee5" d="M18.30652,12.22144C17.42371,13.00647,16.27399,13.49854,15,13.5c-0.27161,0-0.53668-0.02515-0.79553-0.06805
														c-0.02734-0.0235-0.0592-0.04138-0.08691-0.06451C15.87512,14.83368,17,17.03186,17,19.5
														c0.00012,0.55212-0.44733,0.99988-0.99945,1H22c0.00018,0,0.00037,0,0.00055,0c0.55212-0.00012,0.99957-0.44788,0.99945-1
														C23,16.26233,21.07294,13.48047,18.30652,12.22144z"/><path fill="#d8d8ff" d="M9,13.5c-2.76142,0-5-2.23858-5-5s2.23858-5,5-5s5,2.23858,5,5C13.99676,11.26008,11.76008,13.49676,9,13.5z"/><path fill="#d8d8ff" d="M9,13.5c-2.76142,0-5-2.23858-5-5s2.23858-5,5-5s5,2.23858,5,5C13.99676,11.26008,11.76008,13.49676,9,13.5z"/><path fill="#b2b1ff" d="M12.30652,12.22144C11.42371,13.00647,10.27399,13.49854,9,13.5c-1.27496,0-2.42566-0.49194-3.30884-1.27747
													C2.92603,13.48206,1,16.26324,1,19.5c0,0.00018,0,0.00037,0,0.00055C1.00012,20.05267,1.44788,20.50012,2,20.5h14
													c0.00018,0,0.00037,0,0.00055,0c0.55212-0.00012,0.99957-0.44788,0.99945-1C17,16.26233,15.07294,13.48047,12.30652,12.22144z"/><path fill="#8c8aff" d="M15,3.5c-1.13092,0-2.16235,0.38959-3,1.02264c0.27319,0.20648,0.52069,0.43982,0.74603,0.69696
													c0.06305,0.07129,0.12244,0.1452,0.1814,0.21991c0.1225,0.15692,0.23669,0.3175,0.34003,0.48859
													c0.09247,0.15088,0.17731,0.30621,0.25354,0.4671c0.04248,0.09119,0.08508,0.18079,0.12213,0.27484
													c0.09668,0.24109,0.17462,0.49084,0.2326,0.74908c0.01355,0.06134,0.02277,0.12347,0.03406,0.18567
													C13.9635,7.89581,14,8.19293,14,8.5c-0.00037,0.31476-0.03644,0.61975-0.09338,0.91718
													C13.89838,9.4613,13.89355,9.5061,13.88416,9.5498c-0.05542,0.25159-0.13452,0.49341-0.22681,0.72888
													c-0.03632,0.09467-0.07178,0.18842-0.11359,0.28021c-0.0835,0.17963-0.17883,0.35236-0.28241,0.51971
													c-0.26056,0.42926-0.58179,0.8111-0.95508,1.14301c0.69098,0.31439,1.32922,0.72186,1.89819,1.21033
													C14.46332,13.47485,14.72839,13.5,15,13.5c2.76007-0.00323,4.99677-2.23993,5-5C20,5.73859,17.76141,3.5,15,3.5z"/></svg>
												</div>
												<div class="ms-4">
													<h5 class="tx-medium">Team Work for Better Results !</h5>
													<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos sint, officia vel ab perferendis illum ullam ratione blanditiis fugiat omnis beatae odio vitae!</p>
												</div>
											</div>
											<div class="d-flex">
												<div>
													<svg class="moto-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><circle cx="12" cy="9.25" r="6" fill="#c1c0ff"/><path fill="#6d7ee5" d="M19.57391,17.01288L17.00854,12.56l-0.00873,0.00433C15.92511,14.18231,14.08795,15.25,12,15.25c-0.1286,0-0.25439-0.01123-0.38098-0.01923l0.38953,0.66925l2.37408,4.11218c0.13806,0.23914,0.44385,0.32111,0.68304,0.18304c0.07391-0.04266,0.13562-0.10358,0.17938-0.17682l1.32349-2.21844l2.57941-0.0376c0.27612-0.00397,0.4967-0.23108,0.49268-0.5072C19.6394,17.17004,19.61646,17.08667,19.57391,17.01288z"/><path fill="#6d7ee5" d="M11.61896,15.23071c-1.92963-0.12152-3.61176-1.14911-4.62012-2.66864l-2.56421,4.45081c-0.04248,0.07379-0.06549,0.15717-0.06671,0.24231c-0.00397,0.27612,0.21661,0.50323,0.49274,0.5072L7.44,17.79999l1.32355,2.21844c0.0437,0.07324,0.10547,0.13416,0.17938,0.17682c0.23914,0.13806,0.54492,0.05609,0.68298-0.18304L12,15.90002l0.00427-0.00732l-0.38525-0.66193L11.61896,15.23071z"/></svg>
												</div>
												<div class="ms-4">
													<h5 class="tx-medium">Best Quality !</h5>
													<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos sint, officia vel ab perferendis, dolores placeat dolor aliquam debitis eius, illum ullam ratione blanditiis fugiat omnis beatae odio vitae!</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

							<!-- Row -->
							<div class="row row-sm">
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
									<div class="card custom-card bg-primary-transparent">
										<div class="card-body">
											<div class="counter-status">
												<div class="text-center mb-1">
													<svg class="statistics-icon bg-secondary-light" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><circle cx="10" cy="8.5" r="5" fill="#fb8dbe"/><path fill="#f1388b" d="M13.30884,12.22253C12.42566,13.00806,11.27496,13.5,10,13.5s-2.42566-0.49194-3.30884-1.27747C3.92603,13.48206,2,16.26324,2,19.5c0,0.00018,0,0.00037,0,0.00055C2.00012,20.05267,2.44788,20.50012,3,20.5h14c0.00018,0,0.00037,0,0.00055,0c0.55212-0.00012,0.99957-0.44788,0.99945-1C18,16.26324,16.07397,13.48206,13.30884,12.22253z"/><path fill="#f74f75" d="M18.3335,13.5c-0.26526,0.0003-0.51971-0.10515-0.707-0.293l-1.3335-1.333c-0.38694-0.39399-0.38123-1.02706,0.01275-1.414c0.38897-0.38202,1.01228-0.38202,1.40125,0l0.62647,0.626l1.95953-1.96c0.39399-0.38694,1.02706-0.38123,1.414,0.01275c0.38202,0.38897,0.38202,1.01227,0,1.40125l-2.6665,2.667C18.85321,13.39485,18.59877,13.5003,18.3335,13.5z"/></svg>
												</div>
												<div class="text-center mb-1">
													<h2 class="counter mb-2 tx-normal">5,432</h2>
													<h6 class="mb-0 text-muted tx-normal">Total Customers</h6>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
									<div class="card custom-card bg-primary-transparent">
										<div class="card-body">
											<div class="counter-status">
												<div class="text-center mb-1">
													<svg class="statistics-icon bg-warning-light" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#ffc37a" d="M12,14.5c-3.26461,0.00094-6.4876-0.73267-9.43018-2.14648C2.22156,12.18802,1.99974,11.83676,2,11.45117V9.5c0.00181-1.65611,1.34389-2.99819,3-3h14c1.65611,0.00181,2.99819,1.34389,3,3v1.95215c0.00003,0.3859-0.22189,0.73741-0.57031,0.90332C18.48677,13.76762,15.26418,14.50051,12,14.5z M21,11.45215L21,11.45215z"/><path fill="#ff9b21" d="M10,6.5v-1c0.00055-0.55206,0.44794-0.99945,1-1h2c0.55206,0.00055,0.99945,0.44794,1,1v1h2v-1c-0.00183-1.65613-1.34387-2.99817-3-3h-2c-1.65613,0.00183-2.99817,1.34387-3,3v1H10z"/><path fill="#ff9b21" d="M21.42969,12.35547C18.48676,13.76764,15.26416,14.50049,12,14.5c-3.26459,0.00092-6.48761-0.73267-9.43018-2.14648C2.22156,12.18805,1.99976,11.83673,2,11.45117V18.5c0.00183,1.65613,1.34387,2.99817,3,3h14c1.65613-0.00183,2.99817-1.34387,3-3v-7.04785C22.00006,11.83807,21.77814,12.18958,21.42969,12.35547z"/><path fill="#ff9b21" d="M8,15.5c-0.55214,0.00014-0.99986-0.44734-1-0.99948C7,14.50035,7,14.50017,7,14.5v-2c0-0.55229,0.44772-1,1-1s1,0.44771,1,1v2c0.00014,0.55214-0.44734,0.99986-0.99948,1C8.00035,15.5,8.00017,15.5,8,15.5z M16,15.5c-0.55214,0.00014-0.99986-0.44734-1-0.99948c0-0.00017,0-0.00035,0-0.00052v-2c0-0.55229,0.44771-1,1-1c0.55228,0,1,0.44771,1,1v2c0.00014,0.55214-0.44734,0.99986-0.99948,1C16.00035,15.5,16.00017,15.5,16,15.5z"/></svg>
												</div>
												<div class="text-center mb-1">
													<h2 class="counter mb-2 tx-normal">500</h2>
													<h6 class="mb-0 text-muted tx-normal">Employees</h6>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
									<div class="card custom-card bg-primary-transparent">
										<div class="card-body">
											<div class="counter-status">
												<div class="text-center mb-1">
													<svg class="statistics-icon bg-danger-light" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#fd6074" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99"/><path fill="#f19595" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z"/></svg>
												</div>
												<div class="text-center mb-1">
													<h2 class="counter mb-2 tx-normal">298</h2>
													<h6 class="mb-0 text-muted tx-normal">Completed Projects</h6>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
									<div class="card custom-card bg-primary-transparent">
										<div class="card-body">
											<div class="counter-status">
												<div class="text-center mb-1">
													<svg class="statistics-icon bg-info-light" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><circle cx="12" cy="9.25" r="6" fill="#6dd6ff"/><path fill="#01b8ff" d="M19.57391,17.01288L17.00854,12.56l-0.00873,0.00433C15.92511,14.18231,14.08795,15.25,12,15.25c-0.1286,0-0.25439-0.01123-0.38098-0.01923l0.38953,0.66925l2.37408,4.11218c0.13806,0.23914,0.44385,0.32111,0.68304,0.18304c0.07391-0.04266,0.13562-0.10358,0.17938-0.17682l1.32349-2.21844l2.57941-0.0376c0.27612-0.00397,0.4967-0.23108,0.49268-0.5072C19.6394,17.17004,19.61646,17.08667,19.57391,17.01288z"/><path fill="#01b8ff" d="M11.61896,15.23071c-1.92963-0.12152-3.61176-1.14911-4.62012-2.66864l-2.56421,4.45081c-0.04248,0.07379-0.06549,0.15717-0.06671,0.24231c-0.00397,0.27612,0.21661,0.50323,0.49274,0.5072L7.44,17.79999l1.32355,2.21844c0.0437,0.07324,0.10547,0.13416,0.17938,0.17682c0.23914,0.13806,0.54492,0.05609,0.68298-0.18304L12,15.90002l0.00427-0.00732l-0.38525-0.66193L11.61896,15.23071z"/></svg>
												</div>
												<div class="text-center mb-1">
													<h2 class="counter mb-2 tx-normal">180</h2>
													<h6 class="mb-0 text-muted tx-normal">Awards won</h6>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

							<!-- Row -->
							<div class="row row-sm">
								<div class="py-3">
									<h3>Meet Our Bright Team.</h3>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
									<div class="card custom-card our-team">
										<div class="card-body">
											<div class="picture avatar-lg online text-center">
												<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/users/5.jpg')}}">
											</div>
											<div class="text-center mt-3">
												<a href="{{url('profile')}}"><h5 class="pro-user-username text-dark mt-2 mb-0">Dennis Trexy</h5></a>
												<p class="pro-user-desc text-muted mb-1">Web Developer</p>
												<div class="text-center tx-14 mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam !</div>
											</div>
											<div class="text-center mt-3">
												<a href="https://www.facebook.com/" target="_blank" class="btn btn-sm ripple bg-primary-transparent text-primary rounded-circle me-1"><i class="mdi mdi-facebook"></i></a>
												<a href="https://myaccount.google.com/" target="_blank" class="btn btn-sm ripple bg-danger-transparent text-danger rounded-circle me-1"><i class="mdi mdi-google"></i></a>
												<a href="https://twitter.com/" target="_blank" class="btn btn-sm ripple bg-info-transparent text-info rounded-circle"><i class="mdi mdi-twitter"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
									<div class="card custom-card our-team">
										<div class="card-body">
											<div class="picture avatar-lg online text-center">
												<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/users/6.jpg')}}">
											</div>
											<div class="text-center mt-3">
												<a href="{{url('profile')}}"><h5 class="pro-user-username text-dark mt-2 mb-0">Benedict Vallone</h5></a>
												<p class="pro-user-desc text-muted mb-1">Web Designer</p>
												<div class="text-center tx-14 mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam !</div>
											</div>
											<div class="text-center mt-3">
												<a href="https://www.facebook.com/" target="_blank" class="btn btn-sm ripple bg-primary-transparent text-primary rounded-circle me-1"><i class="mdi mdi-facebook"></i></a>
												<a href="https://myaccount.google.com/" target="_blank" class="btn btn-sm ripple bg-danger-transparent text-danger rounded-circle me-1"><i class="mdi mdi-google"></i></a>
												<a href="https://twitter.com/" target="_blank" class="btn btn-sm ripple bg-info-transparent text-info rounded-circle"><i class="mdi mdi-twitter"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
									<div class="card custom-card our-team">
										<div class="card-body">
											<div class="picture avatar-lg online text-center">
												<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/users/7.jpg')}}">
											</div>
											<div class="text-center mt-3">
												<a href="{{url('profile')}}"><h5 class="pro-user-username text-dark mt-2 mb-0">Robbie Ruder</h5></a>
												<p class="pro-user-desc text-muted mb-1">Web Developer</p>
												<div class="text-center tx-14 mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam !</div>
											</div>
											<div class="text-center mt-3">
												<a href="https://www.facebook.com/" target="_blank" class="btn btn-sm ripple bg-primary-transparent text-primary rounded-circle me-1"><i class="mdi mdi-facebook"></i></a>
												<a href="https://myaccount.google.com/" target="_blank" class="btn btn-sm ripple bg-danger-transparent text-danger rounded-circle me-1"><i class="mdi mdi-google"></i></a>
												<a href="https://twitter.com/" target="_blank" class="btn btn-sm ripple bg-info-transparent text-info rounded-circle"><i class="mdi mdi-twitter"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
									<div class="card custom-card our-team">
										<div class="card-body">
											<div class="picture avatar-lg online text-center">
												<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/users/8.jpg')}}">
											</div>
											<div class="text-center mt-3">
												<a href="{{url('profile')}}"><h5 class="pro-user-username text-dark mt-2 mb-0">Mariane Galeon</h5></a>
												<p class="pro-user-desc text-muted mb-1">Web Designer</p>
												<div class="text-center tx-14 mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam !</div>
											</div>
											<div class="text-center mt-3">
												<a href="https://www.facebook.com/" target="_blank" class="btn btn-sm ripple bg-primary-transparent text-primary rounded-circle me-1"><i class="mdi mdi-facebook"></i></a>
												<a href="https://myaccount.google.com/" target="_blank" class="btn btn-sm ripple bg-danger-transparent text-danger rounded-circle me-1"><i class="mdi mdi-google"></i></a>
												<a href="https://twitter.com/" target="_blank" class="btn btn-sm ripple bg-info-transparent text-info rounded-circle"><i class="mdi mdi-twitter"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->
						</div>
						
@endsection

@section('scripts')

		

@endsection