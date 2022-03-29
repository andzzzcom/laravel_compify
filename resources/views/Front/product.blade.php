@extends("Front.incl.layout")

	
	@section("content")
	<!-- START SECTION BANNER -->
	<section class="background_bg breadcrumb_section overlay_bg_50 page-title-light fixed_bg" data-img-src="{{ asset('assets/theme1/upload/images/specific/'.$general_settings['header_image_page']) }}"> 
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-6">
					<div class="page-title">
						<h1>Product</h1>
					</div>
				</div>
				<div class="col-sm-6">
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb justify-content-sm-end">
						<li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Products</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION BANNER -->

	<!-- START SECTION COURSE -->
	<section>
		<div class="container">
			<div class="row animation" data-animation="fadeInUp" data-animation-delay="0.2s">
				
				@foreach($product as $prod)
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
			<div class="row" style="display:none">
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
	<!-- END SECTION COURSE -->
	@endsection