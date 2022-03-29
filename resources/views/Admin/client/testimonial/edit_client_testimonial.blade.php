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
					<h4 class="text-themecolor">Update Gallery</h4>
				</div>
				<div class="col-md-7 align-self-center text-right">
					<div class="d-flex justify-content-end align-items-center">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
							<li class="breadcrumb-item"><a href="{{ url('admin/client_testimonial') }}"> Client's Testimonial</a></li>
							<li class="breadcrumb-item active">Update Client's Testimonial</li>
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
			<form class="form p-t-20" method="post" enctype="multipart/form-data" action="{{ url('admin/client_testimonial/edit_act') }}">
				@csrf
				<input type="hidden" name="id_client_testimonial" value="{{ $edit[0]->id_client_testimonial }}"> 
				<div class="row">
					<div class="col-lg-6">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Update Gallery</h4>
								<h5 class="box-title m-b-20">
									@if(Session::has("msg"))
										{{Session::get("msg")}}
									@endif
								</h5>
								
								<div class="form-group">
									<label for="exampleInputuname">Client's Name</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input value="{{$edit[0]->name}}" type="text" name="name" class="form-control" placeholder="Client's Name" aria-label="Client's Name" aria-describedby="basic-addon1">
									</div>
								</div>	
								
								<div class="form-group">
									<label class="control-label">Client's Photo</label>
									<div class="input-group mb-3">
										<div class="card">
											<div class="card-body">
												<img style="margin-bottom:10px;max-width:250px; max-height:150px" src="{{ asset('assets/theme1/images/upload/client/'.$edit[0]->photo) }}">
												<input type="file" name="photo" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
											</div>
										</div>
									 </div>
								</div>
								
								<div class="form-group">
									<label for="exampleInputuname">Client's Description</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" name="description" class="form-control" placeholder="Client's Description" aria-label="Client's Description" aria-describedby="basic-addon1" value="{{$edit[0]->description}}">
									</div>
								</div>	
								
								<div class="form-group">
									<label for="exampleInputuname">Client's Testimonial</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<textarea name="testimonial" class="form-control" placeholder="Client's Testimonial" aria-label="Client's Testimonial" aria-describedby="basic-addon1">{{$edit[0]->testimonial}}</textarea>
									</div>
								</div>	
																		
								<div class="form-group">
									<label class="control-label">Client's Testimonial Status</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-info-alt"></i></span>
										</div>
										<select name="status_active" class="form-control custom-select">
											<option @if($edit[0]->status_active == 1) selected @endif value="1">Active</option>
											<option @if($edit[0]->status_active == 0) selected @endif  value="0">Not Active</option>
										</select>
									 </div>
								</div>
								<button type="submit" class="btn btn-success waves-effect waves-light m-r-10"> <i class="fa fa-save"></i> Update</button>
								<a href="{{ url('admin/client_testimonial') }}" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Cancel</a>
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