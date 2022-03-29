@extends("Front.incl.layout")

	
	@section("content")
	<!-- START SECTION BANNER -->
	<section class="background_bg breadcrumb_section overlay_bg_50 page-title-light fixed_bg" data-img-src="{{ asset('assets/theme1/upload/images/specific/'.$general_settings['header_image_page']) }}">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-6">
					<div class="page-title">
						<h1>Blog</h1>
					</div>
				</div>
				<div class="col-sm-6">
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb justify-content-sm-end">
						<li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Blog</li>
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
			<div class="row justify-content-left animation" data-animation="fadeInUp" data-animation-delay="0.2s">
				
				@foreach($blog as $b)
				<div style="height:400px;" class="col-lg-4 col-md-6 mb-4 pb-md-2">
					<div class="blog_post blog_style5 box_shadow4">
						<div class="blog_img">
							<a href="{{ url('blog/detail/'.$b->id_blog) }}">
								<img style="max-height:200px;width:auto" src="{{ asset('assets/theme1/images/upload/blog/'. $b->thumbnail) }}" alt="blog_small_img1">
							</a>
						</div>
						<div class="blog_content">
							<div class="blog_text">
								<h6 class="blog_title font-weight-bold">
									<a href="{{ url('blog/detail/'.$b->id_blog) }}">{{ $b->title }}</a>
								</h6>
								<ul class="list_none blog_meta">
									<li><a href="#"><i class="ion-calendar"></i> {{ $b->created_date }}</a></li>
									<li class="d-none"><a href="#"><i class="ion-chatboxes"></i> 2 Comment</a></li>
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
			<div class="row d-none">
				<div class="col-12 mt-md-4 mt-3">
					<ul class="pagination pagination_style7 justify-content-center">
						<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="ion-ios-arrow-thin-left"></i></a></li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#"><i class="ion-ios-arrow-thin-right"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION CLASSES -->
	@endsection