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
					<h4 class="text-themecolor">Update Team</h4>
				</div>
				<div class="col-md-7 align-self-center text-right">
					<div class="d-flex justify-content-end align-items-center">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
							<li class="breadcrumb-item"><a href="{{ url('admin/team') }}">Team</a></li>
							<li class="breadcrumb-item active">Update Team</li>
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
			<form class="form p-t-20" method="post" enctype="multipart/form-data" action="{{ url('admin/team/edit_act') }}">
				@csrf
				<input type="hidden" name="id" value="{{ $edit[0]->id_team }}"> 
				<div class="row">
					<div class="col-lg-6">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Update Team</h4>
								<h5 class="box-title m-b-20">
									@if(Session::has("msg"))
										{{Session::get("msg")}}
									@endif
								</h5>								
								<div class="form-group">
									<label for="exampleInputuname">Name</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $edit[0]->name }}" name="name" class="form-control" placeholder="Insert Name" aria-label="Name Team" aria-describedby="basic-addon1">
									</div>
								</div>	
								
								<div class="form-group">
									<label for="exampleInputuname">Email</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="email" value="{{ $edit[0]->email }}" name="email" class="form-control" placeholder="Insert Email" aria-label="Email Team" aria-describedby="basic-addon1">
									</div>
								</div>		
								
								<div class="form-group">
									<label class="control-label">Photo</label>
									<div class="input-group mb-3">
										<div class="card">
											<div class="card-body">
												<img style="margin-bottom:10px;max-width:250px; max-height:150px" src="{{ asset('assets/theme1/images/upload/team/'.$edit[0]->photo) }}">
												<input type="file" name="photo" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
											</div>
										</div>
									 </div>
								</div>	
								
								<div class="form-group">
									<label for="exampleInputuname">Phone</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $edit[0]->phone }}" name="phone" class="form-control" placeholder="Insert Phone" aria-label="Phone Team" aria-describedby="basic-addon1">
									</div>
								</div>		
								
								<div class="form-group">
									<label for="exampleInputuname">Address</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $edit[0]->address }}" name="address" class="form-control" placeholder="Insert Address" aria-label="Address Team" aria-describedby="basic-addon1">
									</div>
								</div>		
								
								<div class="form-group">
									<label for="exampleInputuname">Gender</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<select name="gender" class="form-control custom-select">
											<option @if($edit[0]->gender == 1) selected @endif value="1">Male</option>
											<option @if($edit[0]->gender == 0) selected @endif value="0">Female</option>
										</select>
									</div>
								</div>	
								
								<div class="form-group">
									<label for="exampleInputuname">Description</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $edit[0]->description }}" name="description" class="form-control" placeholder="Insert Description" aria-label="Description Team" aria-describedby="basic-addon1">
									</div>
								</div>	
								
								<div class="form-group">
									<label for="exampleInputuname">Born Date</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" id="datepicker" value="{{ $edit[0]->born_date }}" name="born_date" class="form-control" placeholder="Insert Born Date" aria-label="Born Date Team" aria-describedby="basic-addon1">
									</div>
								</div>	
								
								<div class="form-group">
									<label for="exampleInputuname">Born Place</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{ $edit[0]->born_place }}" name="born_place" class="form-control" placeholder="Insert Born Place" aria-label="Born Place Team" aria-describedby="basic-addon1">
									</div>
								</div>	
								
								<div class="form-group">
									<label for="exampleInputuname">URL Facebook</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-facebook"></i></span>
										</div>
										<input type="text" value="{{$edit[0]->url_facebook}}" name="url_facebook" class="form-control" placeholder="Insert URL Facebook" aria-label="URL Facebook" aria-describedby="basic-addon1">
									</div>
								</div>	
								
								<div class="form-group">
									<label for="exampleInputuname">URL Twitter</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" value="{{$edit[0]->url_twitter}}" name="url_twitter" class="form-control" placeholder="Insert URL Twitter" aria-label="URL Twitter" aria-describedby="basic-addon1">
									</div>
								</div>	
								
								<div class="form-group">
									<label for="exampleInputuname">URL Instagram</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-instagram"></i></span>
										</div>
										<input type="text" value="{{$edit[0]->url_instagram}}" name="url_instagram" class="form-control" placeholder="Insert URL Instagram" aria-label="URL Instagram" aria-describedby="basic-addon1">
									</div>
								</div>	
								
								<div class="form-group">
									<label for="exampleInputuname">URL Linkedin</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-linkedin"></i></span>
										</div>
										<input type="text" value="{{$edit[0]->url_linkedin}}" name="url_linkedin" class="form-control" placeholder="Insert URL Linkedin" aria-label="URL Linkedin" aria-describedby="basic-addon1">
									</div>
								</div>	
																
								<div class="form-group">
									<label for="exampleInputuname">Role</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<select name="role" class="form-control custom-select">
											@foreach($role as $r)
												<option @if($r->id_role==$edit[0]->role) selected @endif value="{{$r->id_role}}">{{$r->name}}</option>
											@endforeach
										</select>
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
								<a href="{{ url('admin/team') }}" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Cancel</a>
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