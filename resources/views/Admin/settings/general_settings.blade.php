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
					<h4 class="text-themecolor">Edit General Settings</h4>
				</div>
				<div class="col-md-7 align-self-center text-right">
					<div class="d-flex justify-content-end align-items-center">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
							<li class="breadcrumb-item active">Edit General Settings</li>
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
			<form class="form p-t-20" method="post" enctype="multipart/form-data" action="{{ url('admin/settings/edit_general_settings_action') }}">
				@csrf
				<input type="hidden" name="id" value="{{ $general[0]->id_setting }}"> 
				<div class="row">
					<div class="col-lg-6">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Edit General Settings</h4>
								<h5 class="box-title m-b-20">
									@if(Session::has("msg"))
										{{Session::get("msg")}}
									@endif
								</h5>								
								<div class="form-group">
									<label for="exampleInputuname">Title Web</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $general[0]->title_web }}" name="title_web" class="form-control" placeholder="Insert Title Web" aria-label="Title Web" aria-describedby="basic-addon1">
									</div>
								</div>	
													
								<div class="form-group">
									<label for="exampleInputuname">Subtitle Web</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $general[0]->subtitle_web }}" name="subtitle_web" class="form-control" placeholder="Insert Subtitle Web" aria-label="Subtitle Web" aria-describedby="basic-addon1">
									</div>
								</div>	
								
								<div class="form-group">
									<label for="exampleInputuname">Favicon Web</label>
									<div class="input-group mb-3">
										<div class="card">
											<div class="card-body">
												<br>
												<img src="{{asset('assets_admin/theme1/upload/images/settings/favicon/'.$general[0]->favicon_web)}}" style="max-width:250px;height:auto;margin-bottom:10px;">
												<br>
												<input type="file" name="favicon_web" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
											</div>
										</div>
									 </div>
								</div>	
													
								<div class="form-group">
									<label for="exampleInputuname">Logo Web</label>
									<div class="input-group mb-3">
										<div class="card">
											<div class="card-body">
												<br>
												<img src="{{asset('assets_admin/theme1/upload/images/settings/logo/'.$general[0]->logo_web)}}" style="max-width:150px;height:auto;margin-bottom:10px;">
												<br>
												<input type="file" name="logo_web" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
											</div>
										</div>
									 </div>
								</div>	
													
								<div class="form-group">
									<label for="exampleInputuname">Url Facebook</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $general[0]->url_facebook }}" name="url_facebook" class="form-control" placeholder="Insert Url Facebook" aria-label="Url Facebook" aria-describedby="basic-addon1">
									</div>
								</div>	
													
								<div class="form-group">
									<label for="exampleInputuname">Url Twitter</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $general[0]->url_twitter }}" name="url_twitter" class="form-control" placeholder="Insert Url Twitter" aria-label="Url Twitter" aria-describedby="basic-addon1">
									</div>
								</div>	
													
								<div class="form-group">
									<label for="exampleInputuname">Url Instagram</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $general[0]->url_instagram }}" name="url_instagram" class="form-control" placeholder="Insert Url Instagram" aria-label="Url Instagram" aria-describedby="basic-addon1">
									</div>
								</div>	
													
								<div class="form-group">
									<label for="exampleInputuname">Url Youtube</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $general[0]->url_youtube }}" name="url_youtube" class="form-control" placeholder="Insert Url Youtube" aria-label="Url Youtube" aria-describedby="basic-addon1">
									</div>
								</div>	
													
								<div class="form-group">
									<label for="exampleInputuname">Address</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-home"></i></span>
										</div>
										<input type="text" value="{{ $general[0]->address }}" name="address" class="form-control" placeholder="Insert Address" aria-label="Address" aria-describedby="basic-addon1">
									</div>
								</div>	
													
								<div class="form-group">
									<label for="exampleInputuname">Phone</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-mobile"></i></span>
										</div>
										<input type="text" value="{{ $general[0]->phone }}" name="phone" class="form-control" placeholder="Insert Phone" aria-label="Url Phone" aria-describedby="basic-addon1">
									</div>
								</div>	
													
								<div class="form-group">
									<label for="exampleInputuname">Email</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-envelope"></i></span>
										</div>
										<input type="text" value="{{ $general[0]->email }}" name="email" class="form-control" placeholder="Insert Email" aria-label="Email" aria-describedby="basic-addon1">
									</div>
								</div>	
													
								<div class="form-group">
									<label for="exampleInputuname">Meta Title</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $general[0]->meta_title }}" name="meta_title" class="form-control" placeholder="Insert Meta Title" aria-label="Meta Title" aria-describedby="basic-addon1">
									</div>
								</div>	
													
								<div class="form-group">
									<label for="exampleInputuname">Meta Description</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $general[0]->meta_description }}" name="meta_description" class="form-control" placeholder="Insert Meta Description" aria-label="Meta Description" aria-describedby="basic-addon1">
									</div>
								</div>	
													
								<div class="form-group">
									<label for="exampleInputuname">Meta Keywords</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $general[0]->meta_keywords }}" name="meta_keywords" class="form-control" placeholder="Insert Meta Keywords" aria-label="Meta Keywords" aria-describedby="basic-addon1">
									</div>
								</div>	
								<button type="submit" class="btn btn-success waves-effect waves-light m-r-10"> <i class="fa fa-save"></i> Update</button>
								<a href="{{ url('admin/settings/edit_general_settings') }}" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Cancel</a>
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