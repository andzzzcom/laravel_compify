@extends("Front.incl.layout")

	
	@section("content")
	<!-- START SECTION BANNER -->
	<section class="background_bg breadcrumb_section overlay_bg_50 page-title-light fixed_bg" data-img-src="{{ asset('assets/theme1/upload/images/specific/'.$general_settings['header_image_page'])  }}">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-6">
					<div class="page-title">
						<h1>Gallery</h1>
					</div>
				</div>
				<div class="col-sm-6">
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb justify-content-sm-end">
						<li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Gallery</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION BANNER -->

	<!-- START SECTION GALLERY -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="portfolio_container work_col3 gutter_medium image_gallery gallery_hover_style2">
						<li class="grid-sizer"></li>   
						
						@foreach($gallery as $gal)
							<li class="portfolio-item">
								<div class="image_gallery_item">
									<a href="{{ asset('assets/theme1/images/upload/gallery/'.$gal->name) }}">
										<div class="gallery_img">
											<img src="{{ asset('assets/theme1/images/upload/gallery/'.$gal->name) }}" alt="image" style="height:250px;width:auto">
										</div>
										<div class="gallary_hover_box">
											<i class="ti-zoom-in"></i>
										</div>
									</a>
								</div>
								<div class="classes_info">
									<div class="classes_desc" style="height:70px">
										<p class="font-weight-bold text-primary">{{$gal->description}}</p>
									</div>
								</div>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION GALLERY -->
	@endsection