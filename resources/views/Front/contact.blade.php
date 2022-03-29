@extends("Front.incl.layout")

	
	@section("content")
	<!-- START SECTION BANNER -->
	<section class="background_bg breadcrumb_section overlay_bg_50 page-title-light fixed_bg" data-img-src="{{ asset('assets/theme1/upload/images/specific/'.$general_settings['header_image_page'])  }}">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-6">
					<div class="page-title">
						<h1>Contact</h1>
					</div>
				</div>
				<div class="col-sm-6">
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb justify-content-sm-end">
						<li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Contact</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION BANNER -->
	
	<!-- START SECTION CONTACT -->
	<section class="small_pb overflow_hide">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="box_shadow4">
						<div class="row no-gutters">
							<div class="col-lg-4 col-md-5">
								<div class="bg-dark small_padding h-100 animation" data-animation="fadeInLeft" data-animation-delay="0.2s">
									<div class="heading_s3 heading_light">
										<h4>Contact Information</h4>
									</div>
									<p class="text-white">{{$general_settings["subtitle_web"]}}</p>
									<ul class="contact_info contact_info_style1 contact_info_light list_none">
										<li>
											<span class="ti-location-pin"></span>
											<address>{{$general_settings["address"]}}</address>
										</li>
										<li>
											<span class="ti-email"></span>
											<a href="mailto:{{$general_settings['email']}}">{{$general_settings["email"]}}</a>
										</li>
										<li>
											<span class="ti-mobile"></span>
											<p>{{$general_settings["phone"]}}</p>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-8 col-md-7">
								<div class="small_padding animation" data-animation="fadeInRight" data-animation-delay="0.3s">
									<div class="heading_s3">
										<h4>Leave Message Here:</h4>
									</div>
									<div class="field_form form_style4">
										<form method="post" name="enq" action="{{url('contact_action')}}">
											@csrf
											<h5 class="box-title m-b-20">
												@if(Session::has("msg"))
													{{Session::get("msg")}}
												@endif
											</h5>	
											<div class="row">
												<div class="form-group col-lg-6">
													<input required="required" placeholder="Enter Name *" class="form-control" name="name" type="text">
													<label>Enter Name</label>
												 </div>
												<div class="form-group col-lg-6">
													<input required="required" placeholder="Enter Email *" class="form-control" name="email" type="email">
													<label>Enter Email</label>
												</div>
												<div class="form-group col-lg-12">
													<input required="required" placeholder="Enter Subject" class="form-control" name="subject" type="text">
													<label>Enter Subject</label>
												</div>
												<div class="form-group col-lg-12">
													<textarea required="required" placeholder="Message *" class="form-control" name="message" rows="4"></textarea>
													<label>Message</label>
												</div>
												<div class="col-lg-12">
													<button type="submit" title="Submit Your Message!" class="btn btn-default" name="submit" value="Submit">Send Message</button>
												</div>
											</div>
										</form>		
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION CONTACT -->

	<!-- START SECTION CONTACT MAP -->
	<section class="small_pt d-none">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-12">
					<div class="contact_map animation" data-animation="fadeInUp" data-animation-delay="0.2s">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193229.77301255226!2d-74.05531241936525!3d40.823236500441624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f613438663b5%3A0xce20073c8862af08!2sW+123rd+St%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1533565007513" allowfullscreen="" frameborder="0"></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION CONTACT MAP -->

	<!-- START SECTION CLIENT LOGO -->
	<section class="bg_linen small_pt small_pb">
		<div class="container">
			<div class="row">
				<div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
					<div class="cl_logo_slider owl-carousel owl-theme" data-margin="30" data-loop="true" data-autoplay="true" data-dots="false" data-autoplay-timeout="2000">
						
						@foreach($clogo as $c)
						<div class="item">
							<a href="#"><img title="{{$c->description}}" src="{{ asset('assets/theme1/images/upload/client/'.$c->name) }}"/></a>
						</div>
						@endforeach
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- START SECTION CLIENT LOGO -->
	@endsection