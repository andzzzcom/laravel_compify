@extends("Front.incl.layout")

	
	@section("content")
	<!-- START SECTION BANNER -->
	<section class="background_bg breadcrumb_section overlay_bg_50 page-title-light fixed_bg" data-img-src="{{ asset('assets/theme1/upload/images/specific/'.$general_settings['header_image_page'])  }}">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-6">
					<div class="page-title">
						<h1>About</h1>
					</div>
				</div>
				<div class="col-sm-6">
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb justify-content-sm-end">
						<li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">About</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION BANNER -->

	<!-- START SECTION ABOUT US -->
	<section class="bg_linen">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12 col-sm-12">
					<div class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">
						{!! $about[0]->content !!}
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION ABOUT US -->  
	@endsection