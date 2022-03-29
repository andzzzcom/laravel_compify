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
					<h4 class="text-themecolor">Update Blog Category</h4>
				</div>
				<div class="col-md-7 align-self-center text-right">
					<div class="d-flex justify-content-end align-items-center">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
							<li class="breadcrumb-item"><a href="{{ url('admin/blog_cat') }}">Blog Category</a></li>
							<li class="breadcrumb-item active">Add Blog Category</li>
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
			<form class="form p-t-20" method="post" enctype="multipart/form-data" action="{{ url('admin/blog_cat/edit_act') }}">
				@csrf
				<input type="hidden" name="id_blog_category" value="{{ $edit[0]->id_blog_category }}"> 
				<div class="row">
					<div class="col-lg-6">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Update Blog Category</h4>
								<h5 class="box-title m-b-20">
									@if(Session::has("msg"))
										{{Session::get("msg")}}
									@endif
								</h5>
								<div class="form-group">
									<label for="exampleInputuname">Blog Category Name</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input value="{{ $edit[0]->name }}" type="text" name="name" class="form-control" placeholder="Category Blog" aria-label="Category Blog" aria-describedby="basic-addon1">
									</div>
								</div>		
								
								<div class="form-group">
									<label class="control-label">Thumbnail Image</label>
									<div class="input-group mb-3">
										<div class="card">
											<div class="card-body">
												<img style="margin-bottom:10px;max-width:250px; max-height:150px" src="{{ asset('assets/theme1/images/upload/blog/'.$edit[0]->thumbnail) }}">
												<input type="file" name="thumbnail" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
											</div>
										</div>
									 </div>
								</div>
								
								<div class="form-group">
									<label for="exampleInputuname">Blog Category Description</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input value="{{ $edit[0]->description }}" type="text" name="description" class="form-control" placeholder="Category Description" aria-label="Category Description" aria-describedby="basic-addon1">
									</div>
								</div>			
												
								<div class="form-group">
									<label class="control-label">Blog Category Status</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-info-alt"></i></span>
										</div>
										<select name="status_active" class="form-control custom-select">
											<option @if($edit[0]->status_active == 1) selected @endif value="1">Active</option>
											<option @if($edit[0]->status_active == 0) selected @endif value="0">Not Active</option>
										</select>
									 </div>
								</div>
								<button type="submit" class="btn btn-success waves-effect waves-light m-r-10"> <i class="fa fa-save"></i> Update</button>
								<a href="{{ url('admin/blog_cat') }}" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Cancel</a>
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