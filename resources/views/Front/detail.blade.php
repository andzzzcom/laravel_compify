@extends("Front.incl.layout")

	
	@section("content")
	<!-- START SECTION BANNER -->
	<section class="background_bg breadcrumb_section overlay_bg_50 page-title-light fixed_bg" data-img-src="{{ asset('assets/theme1/upload/images/specific/'.$general_settings['header_image_page']) }}">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-6">
					<div class="page-title">
						<h1>Blog Post</h1>
					</div>
				</div>
				<div class="col-sm-6">
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb justify-content-sm-end">
						<li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
						<li class="breadcrumb-item"><a href="{{ url('blog') }}">Blog</a></li>
						<li class="breadcrumb-item active" aria-current="page">Blog Post</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION BANNER -->
	
	<!-- START SECTION CLASSES -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="single_post">
						<div class="blog_img">
							<a href="#">
								<img src="{{ asset('assets/theme1/images/upload/blog/'. $detail[0]->thumbnail) }}" alt="blog_img1">
							</a>
						</div>
						<div class="blog_content bg-white">
							<div class="blog_text">
								<h2>{{ $detail[0]->title }}</h2>
								<ul class="list_none blog_meta">
									<li><a href="#"><i class="ion-calendar"></i> {{ $detail[0]->created_date }}</a></li>
									<li class="d-none"><a href="#"><i class="ion-chatboxes"></i> 2 Comment</a></li>
								</ul>
								<p>{!! $detail[0]->content !!}</p>
								<div class="py-4 blog_post_footer">
									<div class="row justify-content-between align-items-center">
										<div class="col-md-8 mb-3 mb-md-0">
											<div class="tags">
												@foreach(explode(",", $detail[0]->tag) as $t)
													<a href="#">{{$t}}</a>
												@endforeach
											</div>
										</div>
										<div class="col-md-4 d-none">
											<ul class="list_none social_icons border_social">
												<li><a href="#"><i class="ion-social-facebook"></i></a></li>
												<li><a href="#"><i class="ion-social-twitter"></i></a></li>
												<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
												<li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
												<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="d-none border-top border-bottom py-2 py-md-4 post_navigation">
						<div class="row align-items-center justify-content-center justify-content-sm-between">
							<div class="col-auto">
								<a href="#">
									<div class="d-flex align-items-center">
										<i class="ion-ios-arrow-thin-left mr-3"></i>
										<div>
											<span>blanditiis praesentium</span>
										</div>
									</div>
								</a>
							</div>
							<div class="col-auto">
								<a href="#">
									<div class="d-flex align-items-center flex-row-reverse text-right">
										<i class="ion-ios-arrow-thin-right ml-3"></i>
										<div>
											<span>voluptatum deleniti</span>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="d-none card mt-3 mt-md-5">
						<div class="card-body">
							<div class="author_img">
								<img class="rounded-circle" src="../assets/images/user1.jpg" alt="user1"/>
							</div>
							<div class="author_info">
								<a href="#" class="mb-1 d-inline-block">Maria Redwood</a>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							</div>
						</div>
					</div>
					<div class="d-none related_post border-top">
						<div class="comment-title mb-2 mb-sm-4">
							<h5>Related posts</h5>
						</div>
						<div class="row">
						<div class="col-md-6 mb-md-4 mb-2 pb-2">
							<div class="blog_post blog_style5 box_shadow4">
								<div class="blog_img">
									<a href="#">
										<img src="images/blog_small_img1.jpg" alt="blog_small_img1">
									</a>
								</div>
								<div class="blog_content bg-white">
									<div class="blog_text">
										<h6 class="blog_title font-weight-bold"><a href="#">Varius Phasellus blandit massa enim</a></h6>
										<ul class="list_none blog_meta">
											<li><a href="#"><i class="ion-calendar"></i> April 14, 2018</a></li>
											<li><a href="#"><i class="ion-chatboxes"></i> 2 Comment</a></li>
										</ul>
										<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
										<a href="#" class="text-capitalize">Read More</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 mb-md-4 mb-2 pb-2">
							<div class="blog_post blog_style5 box_shadow4">
								<div class="blog_img">
									<a href="#">
										<img src="images/blog_small_img2.jpg" alt="blog_small_img2">
									</a>
								</div>
								<div class="blog_content bg-white">
									<div class="blog_text">
										<h6 class="blog_title font-weight-bold"><a href="#">Varius Phasellus blandit massa enim</a></h6>
										<ul class="list_none blog_meta">
											<li><a href="#"><i class="ion-calendar"></i> April 14, 2018</a></li>
											<li><a href="#"><i class="ion-chatboxes"></i> 2 Comment</a></li>
										</ul>
										<p>Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
										<a href="#" class="text-capitalize">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
					<div class="d-none comment-area border-top">
						<div class="comment-title mb-2 mb-sm-4">
							<h5>(03) Comments</h5>
						</div>
						<ul class="list_none comment_list">
							<li class="comment_info">
								<div class="d-flex">
									<div class="user_img">
										<img src="../assets/images/user2.jpg" alt="user2">
									</div>
									<div class="comment_content">
										<div class="d-flex align-items-md-center">
											<div class="meta_data">
												<h6><a href="#">Walter Mark</a></h6>
												<div class="comment-time">MARCH 5, 2018, 6:05 PM</div>
											</div>
											<div class="ml-auto">
												<a href="#" class="comment-reply"><i class="ion-reply-all"></i>Reply</a>
											</div>
										</div>
										<p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire that the cannot foresee the pain and trouble that.</p>
									</div>
								</div>
							</li>
							<li class="comment_info reply">
								<div class="d-flex">
									<div class="user_img">
										<img src="../assets/images/user3.jpg" alt="user3">
									</div>
									<div class="comment_content">
										<div class="d-flex align-items-md-center">
											<div class="meta_data">
												<h6><a href="#">Sandhya Rani</a></h6>
												<div class="comment-time">april 8, 2018, 5:15 PM</div>
											</div>
											<div class="ml-auto">
												<a href="#" class="comment-reply"><i class="ion-reply-all"></i>Reply</a>
											</div>
										</div>
										<p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire that the cannot foresee the pain and trouble that.</p>
									</div>
								</div>
							</li>
							<li class="comment_info">
								<div class="d-flex">
									<div class="user_img">
										<img src="../assets/images/user4.jpg" alt="user4">
									</div>
									<div class="comment_content">
										<div class="d-flex align-items-md-center">
											<div class="meta_data">
												<h6><a href="#">Laura Sandel</a></h6>
												<div class="comment-time">april 15, 2018, 10:30 PM</div>
											</div>
											<div class="ml-auto">
												<a href="#" class="comment-reply"><i class="ion-reply-all"></i>Reply</a>
											</div>
										</div>
										<p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire that the cannot foresee the pain and trouble that.</p>
									</div>
								</div>
							</li>
						</ul>
						<div class="comment-title mb-2 mb-sm-4">
							<h5>Write a comment</h5>
						</div>
						<form class="field_form form_style4" name="enq" method="post">
							<div class="row">
								<div class="form-group col-md-4">
									<input name="name" class="form-control rounded-0" placeholder="Your Name" required="required" type="text">
									<label>Your Name</label>
								</div>
								<div class="form-group col-md-4">
									<input name="email" class="form-control rounded-0" placeholder="Your Email" required="required" type="email">
									<label>Your Email</label>
								</div>
								<div class="form-group col-md-4">
									<input name="website" class="form-control rounded-0" placeholder="Your Website" required="required" type="text">
									<label>Your Website</label>
								</div>
								<div class="form-group col-md-12">
									<textarea rows="3" name="message" class="form-control rounded-0" placeholder="Your Comment" required="required"></textarea>
									<label>Your Comment</label>
								</div>
								<div class="form-group col-md-12">
									<button value="Submit" name="submit" class="btn btn-default rounded-0" title="Submit Your Message!" type="submit">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-3 mt-lg-0 mt-4 pt-3 pt-lg-0">
					<div class="sidebar">
						<div class="widget d-none">
							<div class="newsletter_form">
								<form> 
									<div class="outline_input-black">
										<input required="" placeholder="Search..." type="text">
									</div>
									<button type="submit" title="Subscribe" class="btn btn-submit border-0" name="submit" value="Submit">
										<span class="ti-search"></span>
									</button>
								</form>
							</div>
						</div>
						<div class="widget">
							<h5 class="widget_title">Recent Posts</h5>
							<ul class="recent_post border_bottom_dash list_none">
								@foreach($all as $a)
								<li>
									<div class="post_footer">
										<div class="post_img">
											<a href="{{url('blog/detail/'.$a->id_blog)}}"><img src="{{ asset('assets/theme1/images/upload/blog/'. $a->thumbnail) }}" style="width:50px;height:auto" alt="letest_post1"></a>
										</div>
										<div class="post_content">
											<h6><a href="{{url('blog/detail/'.$a->id_blog)}}">{{$a->title}}</a></h6>
											<p class="small m-0">{{$a->created_date}}</p>
										</div>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
						<div class="d-none widget">
							<h5 class="widget_title">Categories</h5>
							<ul class="list_none widget_categories border_bottom_dash">
								<li><a href="#"><span class="categories_name">Design</span><span class="categories_num">(9)</span></a></li>
								<li><a href="#"><span class="categories_name">Lifestyle</span><span class="categories_num">(6)</span></a></li>
								<li><a href="#"><span class="categories_name">Photos</span><span class="categories_num">(4)</span></a></li>
								<li><a href="#"><span class="categories_name">Creative</span><span class="categories_num">(7)</span></a></li>
								<li><a href="#"><span class="categories_name">Branding</span><span class="categories_num">(12)</span></a></li>
							</ul>
						</div>
						<div class="widget d-none">
							<h5 class="widget_title">tags</h5>
							<div class="tags">
								<a href="#">General</a>
								<a href="#">Design</a>
								<a href="#">jQuery</a>
								<a href="#">Branding</a>
								<a href="#">Modern</a>
								<a href="#">Blog</a>
								<a href="#">Quotes</a>
								<a href="#">Advertisement</a>
							</div>
						</div>
						<div class="widget d-none">
							<h5 class="widget_title">Archive</h5>
							<ul class="list_none widget_archive border_bottom_dash">
								<li><a href="#"><span class="archive_year">June 2017</span><span class="archive_num">(12)</span></a></li>
								<li><a href="#"><span class="archive_year">May 2017</span><span class="archive_num">(5)</span></a></li>
								<li><a href="#"><span class="archive_year">March 2017</span><span class="archive_num">(6)</span></a></li>
								<li><a href="#"><span class="archive_year">January 2017</span><span class="archive_num">(7)</span></a></li>
								<li><a href="#"><span class="archive_year">April 2016</span><span class="archive_num">(10)</span></a></li>
							</ul>
						</div>
						<div class="widget d-none">
							<h5 class="widget_title">Newsletter</h5>
							<div class="newsletter_form">
							<form> 
								<div class="outline_input-black">
									<input required="" placeholder="Enter Email Address" type="text">
								</div>
								<button type="submit" title="Subscribe" class="btn btn-submit border-0" name="submit" value="Submit">
									<span class="ti-email"></span>
								</button>
							</form>
						</div>
						</div>
					</div>
				</div>
			</div>        
		</div>
	</section>
	<!-- END SECTION CLASSES -->

	@endsection