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
					<h4 class="text-themecolor">Add Admin</h4>
				</div>
				<div class="col-md-7 align-self-center text-right">
					<div class="d-flex justify-content-end align-items-center">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
							<li class="breadcrumb-item"><a href="{{ url('admin/admin') }}">Admin</a></li>
							<li class="breadcrumb-item active">Add Admin</li>
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
			<form class="form p-t-20" method="post" enctype="multipart/form-data" action="{{ url('admin/admin/add_act') }}">
				@csrf
				<div class="row">
					<div class="col-lg-6">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Add Admin</h4>
								<h5 class="card-title">(Password Default: 12345678)</h5>
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
										<input type="text"  name="name" class="form-control" placeholder="Insert Name" aria-label="Name Admin" aria-describedby="basic-addon1">
									</div>
								</div>	
								
								<div class="form-group">
									<label for="exampleInputuname">Email</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="email" name="email" class="form-control" placeholder="Insert Email" aria-label="Email Admin" aria-describedby="basic-addon1">
									</div>
								</div>		
								
								<div class="form-group">
									<label class="control-label">Avatar</label>
									<div class="input-group mb-3">
										<div class="card">
											<div class="card-body">
												<input type="file" name="avatar" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
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
										<input type="text" name="phone" class="form-control" placeholder="Insert Phone" aria-label="Phone Admin" aria-describedby="basic-addon1">
									</div>
								</div>		
								
								<div class="form-group">
									<label for="exampleInputuname">Address</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" name="address" class="form-control" placeholder="Insert Address" aria-label="Address Admin" aria-describedby="basic-addon1">
									</div>
								</div>		
								
								<div class="form-group">
									<label for="exampleInputuname">Gender</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<select name="gender" class="form-control custom-select">
											<option value="1">Male</option>
											<option value="0">Female</option>
										</select>
									</div>
								</div>		
								
								<div class="form-group">
									<label for="exampleInputuname">Born Date</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input id="datepicker" type="text" name="born_date" class="form-control" placeholder="Insert Born Date" aria-label="Born Date Admin" aria-describedby="basic-addon1">
									</div>
								</div>	
								
								<div class="form-group">
									<label for="exampleInputuname">Born Place</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="ti-notepad"></i></span>
										</div>
										<input type="text" name="born_place" class="form-control" placeholder="Insert Born Place" aria-label="Born Place Admin" aria-describedby="basic-addon1">
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
												<option value="{{$r->id_role}}">{{$r->name}}</option>
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
											<option value="1">Active</option>
											<option value="0">Not Active</option>
										</select>
									 </div>
								</div>
								<button type="submit" class="btn btn-success waves-effect waves-light m-r-10"> <i class="fa fa-save"></i> Add</button>
								<a href="{{ url('admin/admin') }}" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Cancel</a>
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