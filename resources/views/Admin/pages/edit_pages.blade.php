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
					<h4 class="text-themecolor">Update Pages</h4>
				</div>
				<div class="col-md-7 align-self-center text-right">
					<div class="d-flex justify-content-end align-items-center">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
							<li class="breadcrumb-item"><a href="{{ url('admin/pages') }}">Pages</a></li>
							<li class="breadcrumb-item active">Update Pages</li>
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
			<form class="form p-t-20" method="post" enctype="multipart/form-data" action="{{ url('admin/pages/edit_act') }}">
				@csrf
				<input type="hidden" name="id" value="{{ $edit[0]->id_page }}"> 
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Update Pages</h4>
								<h5 class="box-title m-b-20">
									@if(Session::has("msg"))
										{{Session::get("msg")}}
									@endif
								</h5>								
								<div class="form-group">
									<label for="exampleInputuname">Title</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $edit[0]->title }}" name="title" class="form-control" placeholder="Insert Title" aria-label="Title Pages" aria-describedby="basic-addon1">
									</div>
								</div>	
												
								<div class="form-group">
									<label for="exampleInputuname">Description</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $edit[0]->description }}" name="description" class="form-control" placeholder="Insert Description" aria-label="Description Pages" aria-describedby="basic-addon1">
									</div>
								</div>		
								
								<div class="form-group">
									<label class="control-label">Thumbnail</label>
									<div class="input-group mb-3">
										<div class="card">
											<div class="card-body">
												<img style="margin-bottom:10px;max-width:250px; max-height:150px" src="{{ asset('assets/theme1/images/upload/pages/'.$edit[0]->thumbnail) }}">
												<input type="file" name="thumbnail" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
											</div>
										</div>
									 </div>
								</div>	
												
								<div class="form-group">
									<label for="exampleInputuname">Content</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<textarea style="width:100%;height:500px" id="textareas" name="content" class="form-control" placeholder="Insert Content" aria-label="Content" aria-describedby="basic-addon1">{{ $edit[0]->content }}</textarea>
									</div>
								</div>	
												
								<div class="form-group">
									<label for="exampleInputuname">Meta Title</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $edit[0]->meta_title }}" name="meta_title" class="form-control" placeholder="Insert Meta Title" aria-label="Meta Title" aria-describedby="basic-addon1">
									</div>
								</div>	
												
								<div class="form-group">
									<label for="exampleInputuname">Meta Description</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $edit[0]->meta_description }}" name="meta_description" class="form-control" placeholder="Insert Meta Description" aria-label="Meta Description" aria-describedby="basic-addon1">
									</div>
								</div>	
												
								<div class="form-group">
									<label for="exampleInputuname">Meta Keywords</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $edit[0]->meta_keywords }}" name="meta_keywords" class="form-control" placeholder="Insert Meta Keywords" aria-label="Meta Keywords" aria-describedby="basic-addon1">
									</div>
								</div>	
																	
								<div class="form-group">
									<label class="control-label">Status</label>
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
								<a href="{{ url('admin/pages') }}" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Cancel</a>
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