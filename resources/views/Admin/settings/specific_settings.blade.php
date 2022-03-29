@extends("Admin.incl.layout")

	@section("content")
	<!-- ============================================================== -->
	<!-- Page wrapper  -->
	<!-- ============================================================== -->
	<div class="page-wrapper">
		<!-- ============================================================== -->
		<!-- Container fluid  -->
		<!-- ============================================================== -->
		<div class="container-fluid">
			<!-- ============================================================== -->
			<!-- Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<div class="row page-titles">
				<div class="col-md-5 align-self-center">
					<h4 class="text-themecolor">Edit Specific Settings</h4>
				</div>
				<div class="col-md-7 align-self-center text-right">
					<div class="d-flex justify-content-end align-items-center">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
							<li class="breadcrumb-item active">Edit Specific Settings</li>
						</ol>
					</div>
				</div>
			</div>
			<!-- ============================================================== -->
			<!-- End Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- Start Page Content -->
			<!-- Row -->
			<form class="form p-t-20" method="post" enctype="multipart/form-data" action="{{ url('admin/settings/edit_specific_settings_action') }}">
				@csrf
				<input type="hidden" name="id" value="{{ $specific[0]->id_setting }}"> 
				<div class="row">
					<div class="col-lg-6">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Header Slider Settings</h4>
								<h5 class="box-title m-b-20">
									@if(Session::has("msg"))
										{{Session::get("msg")}}
									@endif
								</h5>								
								<div class="form-group">
									<label for="exampleInputuname">Header Title I</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $specific[0]->header_title_1 }}" name="header_title_1" class="form-control" placeholder="Header Title I" aria-label="Header Title I" aria-describedby="basic-addon1">
									</div>
								</div>				
								
								<div class="form-group">
									<label for="exampleInputuname">Header Subtitle I</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<textarea name="header_subtitle_1" class="form-control" placeholder="Header Subtitle I" aria-label="Header Subtitle I" aria-describedby="basic-addon1">{{ $specific[0]->header_subtitle_1 }}</textarea>
									</div>
								</div>		
								
								<div class="form-group">
									<label for="exampleInputuname">Slider Image I</label>
									<div class="input-group mb-3">
										<div class="card">
											<div class="card-body">
												<br>
												<img src="{{asset('assets/theme1/upload/images/specific/'.$specific[0]->slider_image_1)}}" style="max-width:250px;height:auto;margin-bottom:10px;">
												<br>
												<input type="file" name="slider_image_1" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
											</div>
										</div>
									 </div>
								</div>			
								
								<div class="form-group">
									<label for="exampleInputuname">Header Title II</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $specific[0]->header_title_2 }}" name="header_title_2" class="form-control" placeholder="Header Title II" aria-label="Header Title II" aria-describedby="basic-addon1">
									</div>
								</div>		
								
								<div class="form-group">
									<label for="exampleInputuname">Header Subtitle II</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<textarea name="header_subtitle_2" class="form-control" placeholder="Header Subtitle II" aria-label="Header Subtitle II" aria-describedby="basic-addon1">{{ $specific[0]->header_subtitle_2 }}</textarea>
									</div>
								</div>		
								
								<div class="form-group">
									<label for="exampleInputuname">Slider Image II</label>
									<div class="input-group mb-3">
										<div class="card">
											<div class="card-body">
												<br>
												<img src="{{asset('assets/theme1/upload/images/specific/'.$specific[0]->slider_image_2)}}" style="max-width:250px;height:auto;margin-bottom:10px;">
												<br>
												<input type="file" name="slider_image_2" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
											</div>
										</div>
									 </div>
								</div>		
								
								<div class="form-group">
									<label for="exampleInputuname">Header Title III</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $specific[0]->header_title_3 }}" name="header_title_3" class="form-control" placeholder="Header Title III" aria-label="Header Title III" aria-describedby="basic-addon1">
									</div>
								</div>	
								
								<div class="form-group">
									<label for="exampleInputuname">Header Subtitle III</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<textarea name="header_subtitle_3" class="form-control" placeholder="Header Subtitle III" aria-label="Header Subtitle II" aria-describedby="basic-addon1">{{ $specific[0]->header_subtitle_3 }}</textarea>
									</div>
								</div>		
								
								<div class="form-group">
									<label for="exampleInputuname">Slider Image III</label>
									<div class="input-group mb-3">
										<div class="card">
											<div class="card-body">
												<br>
												<img src="{{asset('assets/theme1/upload/images/specific/'.$specific[0]->slider_image_3)}}" style="max-width:250px;height:auto;margin-bottom:10px;">
												<br>
												<input type="file" name="slider_image_3" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
											</div>
										</div>
									 </div>
								</div>		
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Selling Point Settings</h4>
								<div class="form-group">
									<label for="exampleInputuname">Selling Point I</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $specific[0]->selling_point_1 }}" name="selling_point_1" class="form-control" placeholder="Selling Point I" aria-label="Selling Point I" aria-describedby="basic-addon1">
									</div>
								</div>	
								
								<div class="form-group">
									<label for="exampleInputuname">Selling Sub Point I</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<textarea name="selling_point_sub_1" class="form-control" placeholder="Selling Point Sub I" aria-label="Selling Point Sub I" aria-describedby="basic-addon1">{{ $specific[0]->selling_point_sub_1 }}</textarea>
									</div>
								</div>	
								
								<div class="form-group">
									<label for="exampleInputuname">Selling Point II</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $specific[0]->selling_point_2 }}" name="selling_point_2" class="form-control" placeholder="Selling Point II" aria-label="Selling Point II" aria-describedby="basic-addon1">
									</div>
								</div>	
								
								<div class="form-group">
									<label for="exampleInputuname">Selling Sub Point II</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<textarea name="selling_point_sub_2" class="form-control" placeholder="Selling Point Sub II" aria-label="Selling Point Sub II" aria-describedby="basic-addon1">{{ $specific[0]->selling_point_2 }}</textarea>
									</div>
								</div>	
								
								<div class="form-group">
									<label for="exampleInputuname">Selling Point III</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $specific[0]->selling_point_3 }}" name="selling_point_3" class="form-control" placeholder="Selling Point III" aria-label="Selling Point III" aria-describedby="basic-addon1">
									</div>
								</div>	
								
								<div class="form-group">
									<label for="exampleInputuname">Selling Sub Point III</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<textarea name="selling_point_sub_3" class="form-control" placeholder="Selling Point Sub III" aria-label="Selling Point Sub III" aria-describedby="basic-addon1">{{ $specific[0]->selling_point_sub_3 }}</textarea>
									</div>
								</div>	
								
								<h4 class="card-title">About Settings</h4>
								<div class="form-group">
									<label for="exampleInputuname">About Title</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<textarea name="about_title" class="form-control" placeholder="About Title" aria-label="About Title" aria-describedby="basic-addon1">{{ $specific[0]->about_title }}</textarea>
									</div>
								</div>	
								
								<div class="form-group">
									<label for="exampleInputuname">About Subtitle</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<textarea name="about_subtitle" class="form-control" placeholder="About Subtitle" aria-label="About Subtitle" aria-describedby="basic-addon1">{{ $specific[0]->about_subtitle }}</textarea>
									</div>
								</div>	
																
								<div class="form-group">
									<label for="exampleInputuname">About Image</label>
									<div class="input-group mb-3">
										<div class="card">
											<div class="card-body">
												<br>
												<img src="{{asset('assets/theme1/upload/images/specific/'.$specific[0]->about_image)}}" style="max-width:250px;height:auto;margin-bottom:10px;">
												<br>
												<input type="file" name="about_image" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
											</div>
										</div>
									 </div>
								</div>	
								
								<h4 class="card-title">Header Image Page Settings</h4>
								<div class="form-group">
									<label for="exampleInputuname">Header Image Page</label>
									<div class="input-group mb-3">
										<div class="card">
											<div class="card-body">
												<br>
												<img src="{{asset('assets/theme1/upload/images/specific/'.$specific[0]->header_image_page)}}" style="max-width:250px;height:auto;margin-bottom:10px;">
												<br>
												<input type="file" name="header_image_page" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
											</div>
										</div>
									 </div>
								</div>	
								
								<h4 class="card-title">Background Image Admin Panel Settings</h4>
								<div class="form-group">
									<label for="exampleInputuname">Background Image Admin Panel</label>
									<div class="input-group mb-3">
										<div class="card">
											<div class="card-body">
												<br>
												<img src="{{asset('assets/theme1/upload/images/specific/'.$specific[0]->bg_admin_panel)}}" style="max-width:250px;height:auto;margin-bottom:10px;">
												<br>
												<input type="file" name="bg_admin_panel" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
											</div>
										</div>
									 </div>
								</div>	
								<button type="submit" class="btn btn-success waves-effect waves-light m-r-10"> <i class="fa fa-save"></i> Update</button>
								<a href="{{ url('admin/settings/edit_specific_settings') }}" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Cancel</a>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!-- Row -->
		</div>
		<!-- ============================================================== -->
		<!-- End Container fluid  -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- End Page wrapper  -->
	<!-- ============================================================== -->
	@endsection