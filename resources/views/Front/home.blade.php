@extends("Front.incl.layout")

	
	@section("content")
    
	<!-- START SECTION BANNER -->
	<section class="banner_section p-0 full_screen">
		<div id="carouselExampleControls" class="banner_content_wrap carousel slide light_arrow3" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active background_bg overlay_bg_60" data-img-src="{{ asset('assets/theme1/upload/images/specific/'.$general_settings['slider_image_1']) }}">
					<div class="banner_slide_content">
						<div class="container"><!-- STRART CONTAINER -->
						<div class="row">
							<div class="col-xl-7 col-md-9">
								<div class="banner_content4 text_white">
									<h2 class="animation font-weight-bold" data-animation="fadeInLeft" data-animation-delay="1s"> {{$general_settings['header_title_1']}}</h2>
									<p class="animation my-4" data-animation="fadeInLeft" data-animation-delay="1.5s">{{$general_settings['header_subtitle_1']}}</p>
								</div>
							</div>
						</div>
					</div><!-- END CONTAINER-->
					</div>
				</div>
				<div class="carousel-item background_bg overlay_bg_60" data-img-src="{{ asset('assets/theme1/upload/images/specific/'.$general_settings['slider_image_2']) }}">
					<div class="banner_slide_content">
						<div class="container"><!-- STRART CONTAINER -->
							<div class="row justify-content-center">
								<div class="col-xl-8 col-sm-10 text-center">
									<div class="banner_content4 text_white">
										<h2 class="animation font-weight-bold" data-animation="fadeInDown" data-animation-delay="1s">{{$general_settings['header_title_2']}}</h2>
										<p class="animation my-4" data-animation="fadeInUp" data-animation-delay="1.5s">{{$general_settings['header_subtitle_2']}}</p>
									</div>
								</div>
							</div>
						</div><!-- END CONTAINER-->
					</div>
				</div>
				<div class="carousel-item background_bg overlay_bg_60" data-img-src="{{ asset('assets/theme1/upload/images/specific/'.$general_settings['slider_image_3']) }}">
					<div class="banner_slide_content">
						<div class="container"><!-- STRART CONTAINER -->
						<div class="row">
							<div class="col-xl-7 col-md-9">
								<div class="banner_content4 text_white">
									<h2 class="animation font-weight-bold" data-animation="fadeInRight" data-animation-delay="1s">{{$general_settings['header_title_3']}}</h2>
									<p class="animation my-4" data-animation="fadeInRight" data-animation-delay="1.5s">{{$general_settings['header_title_3']}}</p>
								</div>
							</div>
						</div>
					</div><!-- END CONTAINER-->
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><i class="ion-chevron-right"></i></a>
		</div>
	</section>
	<!-- END SECTION BANNER -->

	<!-- START SECTION FEATURE -->
	<section class="pb_70">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="icon_box icon_box_style_14 bg_danger text_white animation" data-animation="fadeInUp" data-animation-delay="0.2s">
						<div class="box_icon mb-3">
							<i class="fa fa-book"></i>
						</div>
						<div class="icon_box_content">
							<h5>{{$general_settings['selling_point_1']}}</h5>
							<p>{{$general_settings['selling_point_sub_1']}} </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="icon_box icon_box_style_14 bg_blue2 text_white animation" data-animation="fadeInUp" data-animation-delay="0.4s">
						<div class="box_icon mb-3">
							<i class="fa fa-globe"></i>
						</div>
						<div class="icon_box_content">
							<h5>{{$general_settings['selling_point_2']}}</h5>
							<p>{{$general_settings['selling_point_sub_2']}} </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="icon_box icon_box_style_14 bg_light_green2 text_white animation" data-animation="fadeInUp" data-animation-delay="0.6s">
						<div class="box_icon mb-3">
							<i class="fa fa-user-tie"></i>
						</div>
						<div class="icon_box_content">
							<h5>{{$general_settings['selling_point_3']}}</h5>
							<p>{{$general_settings['selling_point_sub_3']}} </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- START SECTION ABOUT US -->
	<section class="bg_linen">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-sm-12">
					<div class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">
						<div class="heading_s3"> 
						  <h2>{{$general_settings['about_title']}}</h2>
						</div>
						<p>{{$general_settings['about_subtitle']}}</p>
					  </div>
				</div>
				<div class="col-lg-6">
					<div class="animation mt-4 mt-lg-0" data-animation="fadeInUp" data-animation-delay="0.2s">
						<img class="w-100" src="{{ asset('assets/theme1/upload/images/specific/'.$general_settings['about_image']) }}" alt="about_img"/>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION ABOUT US -->  

	<!-- START SECTION CLASSES -->
	<section class="pb_70">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-9 text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
					<div class="heading_s3 text-center">
						<h2>Our Products</h2>
					</div>
					<p>These are our feature products</p>
					<div class="small_divider clearfix"></div>
				</div>
			</div>
			<div class="row animation" data-animation="fadeInUp" data-animation-delay="0.2s">
			
				@foreach($prod as $prod)
				<div class="col-lg-4 col-md-6">
					<div class="classes_box box_shadow4">
						<div class="classes_img">
							<center><a href="#"><img style="height:250px;width:auto" src="{{ asset('assets/theme1/images/upload/product/'.$prod->thumbnail) }}" alt="image"></a></center>
							<div class="apply_btn">
								<a href="#" class="btn btn-default rounded-0">Rp {{str_replace(",", ".", number_format($prod->price))}},-</a>
							</div>
						</div>
						<div class="cl_price">
							<span>Rp {{str_replace(",", ".", number_format($prod->price))}},-</span>
						</div>
						<div class="classes_info">
							<div class="classes_title">
								<h6><a href="#">{{$prod->name}}</a></h6>
							</div>
							<div class="classes_desc" style="height:70px">
								<p>{{$prod->description}}</p>
							</div>
							<div class="courses_info">
								<div class="d-none rating_stars">
									<i class="ion-android-star"></i>
									<i class="ion-android-star"></i>
									<i class="ion-android-star"></i>
									<i class="ion-android-star"></i>
									<i class="ion-android-star-half"></i> 
								</div>
								<ul class="list_none content_meta">
									<li><span class="text-primary font-weight-bold">Rp {{str_replace(",", ".", number_format($prod->price))}},-</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				
			</div>
		</div>
	</section>
	<!-- END SECTION CLASSES -->

	<!-- START SECTION CALL TO ACTION -->
	<section class="parallax_bg overlay_bg_60 fixed_bg" data-parallax-bg-image="{{ asset('assets/theme1/images/pic_4.jpg') }}">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.1s">
						<div class="box_counter counter_style5 text-center">
							<img src="{{ asset('assets/theme1/images/icon1.png') }}" alt="icon"/>
							<h3 class="counter_text"><span class="counter">{{$count[2]}}</span>+</h3>
							<p>Products</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
						<div class="box_counter counter_style5 text-center">
							<img src="{{ asset('assets/theme1/images/icon2.png') }}" alt="icon"/>
							<h3 class="counter_text"><span class="counter">{{$count[0]}}</span></h3>
							<p>Blog Posts</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
						<div class="box_counter counter_style5 text-center">
							<img src="{{ asset('assets/theme1/images/icon3.png') }}" alt="icon"/>
							<h3 class="counter_text"><span class="counter">{{$count[1]}}</span>+</h3>
							<p>Teams</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
						<div class="box_counter counter_style5 text-center">
							<img src="{{ asset('assets/theme1/images/icon4.png') }}" alt="icon"/>
							<h3 class="counter_text"><span class="counter">{{$count[3]}}</span>+</h3>
							<p>Testimonials</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION CALL TO ACTION -->

	<!-- START SECTION EVENT -->
	<section class="d-none pb_70">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-9 text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
					<div class="heading_s3 text-center">
						<h2>Upcoming Events</h2>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
					<div class="small_divider clearfix"></div>
				</div>
			</div>
			<div class="row animation" data-animation="fadeInUp" data-animation-delay="0.2s">
				<div class="col-lg-4 col-md-6">
					<div class="event_box box_shadow4">
						<div class="event_img">
							<a href="#"><img src="{{ asset('assets/theme1/images/event_img1.jpg') }}" alt="event_img">
							<div class="event_date">
								<h6><span>24</span> Apr</h6>
							</div>
							</a>
						</div>
						<div class="event_info">	
							<h6 class="event_title"><a href="#">I will lecture on diversity and different languages.</a></h6>
							<ul class="list_none event_meta">
								<li><i class="ti-location-pin"></i>New York City</li>
								<li><i class="ti-time"></i>9:00 - 4:00</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="event_box box_shadow4">
						<div class="event_img">
							<a href="#"><img src="{{ asset('assets/theme1/images/event_img2.jpg') }}" alt="event_img">
							<div class="event_date">
								<h6><span>22</span> May</h6>
							</div>
							</a>
						</div>
						<div class="event_info">	
							<h6 class="event_title"><a href="#">Term Activities: Secrets Big and Small will be discussed</a></h6>
							<ul class="list_none event_meta">
								<li><i class="ti-location-pin"></i>New York City</li>
								<li><i class="ti-time"></i>9:00 - 4:00</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="event_box box_shadow4">
						<div class="event_img">
							<a href="#"><img src="{{ asset('assets/theme1/images/event_img3.jpg') }}" alt="event_img">
							<div class="event_date">
								<h6><span>15</span> Jun</h6>
							</div>
							</a>
						</div>
						<div class="event_info">	
							<h6 class="event_title"><a href="#">Modern language courses will be done for the English word </a></h6>
							<ul class="list_none event_meta">
								<li><i class="ti-location-pin"></i>New York City</li>
								<li><i class="ti-time"></i>9:00 - 4:00</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION EVENT -->

	<!-- START SECTION REGISTER -->
	<section class="d-none background_bg overlay_bg_60 fixed_bg" data-img-src="{{ asset('assets/theme1/images/register_bg.jpg') }}">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="text_white text-center animation offer_info" data-animation="fadeInUp" data-animation-delay="0.02s">
						<div class="heading_s3 heading_light">
							<h2>Get The Coaching Training Today!</h2>
						</div>
						<p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text. Amet rerum quis odio voluptas dolorem placeat soluta sit officiis odit velit voluptates voluptatum.</p>
						<a href="#" class="btn btn-white rounded-0 mt-md-3">Get Started</a>
					</div>
				</div>
				<div class="col-lg-5 mt-4 mt-lg-0">
					<div class="bg-white apply_form animation" data-animation="fadeInUp" data-animation-delay="0.02s">
						<div class="heading_s3 mb-3">
							<h3>Apply For Online Courses</h3>
						</div>
						<p>If you are going to use a passage of Lorem Ipsum you need to be anything hidden in the middle of text</p>
						<div class="form_style4">
							<form method="post" name="enq" class="pt-md-2">
								<div class="row">
									<div class="form-group col-12">
										<input required="required" placeholder="Enter Name *" class="form-control rounded-0" name="name" type="text">
										<label>Enter Name</label>
									 </div>
									<div class="form-group col-12">
										<input required="required" placeholder="Enter Email *" class="form-control rounded-0" name="email" type="email">
										<label>Enter Email</label>
									</div>
									<div class="form-group col-12">
										<input required="required" placeholder="Enter Phone No *" class="form-control rounded-0" name="phone" type="tel">
										<label>Enter Phone No</label>
									</div>
									<div class="form-group col-12">
										<div class="custom_select">
											<select class="form-control rounded-0">
												<option value="">Select Course</option>
												<option value="1">Course One</option>
												<option value="2">Course Two</option>
												<option value="3">Course Three</option>
												<option value="4">Course Four</option>
											</select>
											<label>Select Course</label>
										</div>
									</div>
									<div class="col-12">
										<button type="submit" class="btn btn-default rounded-0" name="submit" value="Submit">Register Now</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION REGISTER -->

	<!-- START SECTION TEAM -->
	<section class="pb_70">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-9 text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
					<div class="heading_s3 mb-md-3 text-center">
						<h2>Our Teams</h2>
					</div>
					<p>These are our featured teams.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="cleafix small_divider"></div>
				</div>
			</div>
			<div class="row animation" data-animation="fadeInUp" data-animation-delay="0.2s">
				
				@foreach($team as $t)
				<div class="col-lg-3 col-sm-6 mb-4 pb-sm-2 text-center">
					<div class="team_box light_gray_bg">
						<div class="team_img">
							<img style="max-width:250px;height:250px" src="{{ asset('assets/theme1/images/upload/team/'.$t->photo) }}" alt="{{$t->name}}">
						</div>
						<div class="team_title">
							<h5>{{$t->name}}</h5>
							<span>{{$t->description}}</span>
						</div>
						<ul class="list_none social_icons border_social">
							<li><a href="{{$t->url_facebook}}"><i class="ion-social-facebook"></i></a></li>
							<li><a href="{{$t->url_twitter}}"><i class="ion-social-twitter"></i></a></li>
							<li><a href="{{$t->url_instagram}}"><i class="ion-social-instagram"></i></a></li>
							<li><a href="{{$t->url_linkedin}}"><i class="ion-social-linkedin-outline"></i></a></li>
						</ul>
					</div>
				</div>
				@endforeach
				
			</div>
		</div>
	</section>
	<!-- END SECTION TEAM -->

	<!-- START SECTION TESTIMONIAL -->
	<section class="bg_linen">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-9 animation text-center" data-animation="fadeInUp" data-animation-delay="0.2s">
					<div class="heading_s3 text-center">	
						<h2>Clients Testimonials</h2>
					</div>
					<p class="m-0">Here are some of our clients testimonials.</p>
					<div class="clearfix small_divider"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
					<div class="testimonial_slider testimonial_style4 carousel_slider owl-carousel owl-theme" data-margin="10" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "1199":{"items": "3"}}'>
					
					@foreach($ctest as $t)
					<div class="item">
						<div class="testimonial_box box_shadow3 bg-white text-justify">
							<div class="testimonial_img">
								<img style="height:60px;width:auto;" class="rounded-circle m-auto" src="{{ asset('assets/theme1/images/upload/client/'.$t->photo) }}" title="{{$t->name}}">
							</div>
							<div class="testi_meta">
								<h6>{{$t->name}}</h6>
								<span>{{$t->description}}</span><br>
								<p style="height:120px">{{$t->testimonial}}</p>
							</div>
						</div>
					</div>
					@endforeach
					
				</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION TESTIMONIAL -->

	<!-- START SECTION BLOG -->
	<section class="pb_70">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-9 animation text-center" data-animation="fadeInUp" data-animation-delay="0.2s">
					<div class="heading_s3 text-center">
						<h2>Our Latest Blog</h2>
					</div>
					<p>This is our featured blog post</p>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="clearfix small_divider"></div>
				</div>
			</div>
			<div class="row justify-content-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
			
				@foreach($blog as $b)
				<div class="col-lg-4 col-md-6 mb-4 pb-md-2">
					<div class="blog_post blog_style5 box_shadow4">
						<div class="blog_img">
							<a href="{{ url('blog/detail/'.$b->id_blog) }}">
								<img style="max-height:200px;width:auto" src="{{ asset('assets/theme1/images/upload/blog/'. $b->thumbnail) }}" alt="blog_small_img1">
							</a>
						</div>
						<div class="blog_content">
							<div class="blog_text">
								<h6 class="blog_title font-weight-bold"><a href="{{ url('blog/detail/'.$b->id_blog) }}">{{$b->title}}</a></h6>
								<ul class="list_none blog_meta">
									<li><a href="#"><i class="ion-calendar"></i> {{$b->created_date}}</a></li>
								</ul>
								<p style="height:50px;">
									{{ Str::of(strip_tags($b->content))->limit(50) }}
								</p>
								<a href="{{ url('blog/detail/'.$b->id_blog) }}" class="text-capitalize">Read More</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				
			</div>
		</div>
	</section>
	<!-- END SECTION BLOG -->

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