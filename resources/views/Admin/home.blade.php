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
					<h4 class="text-themecolor">Admin Panel | {{ $general_settings["title_web"] }}</h4>
				</div>
				<div class="col-md-7 align-self-center text-right">
					<div class="d-flex justify-content-end align-items-center">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
						</ol>
						<a href="{{ url('admin/product/add') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Product</a>
						<a href="{{ url('admin/gallery/add') }}" class="btn btn-success d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Gallery</a>
						<a href="{{ url('admin/team/add') }}" class="btn btn-warning d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Team</a>
						<a href="{{ url('admin/blog/add') }}" class="btn btn-primary d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Blog Post</a>
						<a href="{{ url('admin/pages/add') }}" class="btn btn-danger d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Page</a>
					</div>
				</div>
			</div>
			<!-- ============================================================== -->
			<!-- End Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- Info box -->
			<!-- ============================================================== -->
			<!-- .row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">List Product</h4>
							<h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
							<div class="table-responsive m-t-5">
								<h5 class="box-title m-b-5">
									@if(Session::has("msg"))
										{{Session::get("msg")}}
									@endif
								</h5>
								<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th width="5%">No</th>
											<th width="20%"></th>
											<th width="30%">Name</th>
											<th width="10%">Created Date</th>
											<th width="15%">Last Updated Date</th>
											<th width="10%">Status</th>
											<th width="10%"></th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>No</th>
											<th></th>
											<th>Name</th>
											<th>Created date</th>
											<th>Last Updated Date</th>
											<th>Status</th>
											<th></th>
										</tr>
									</tfoot>
									<tbody>
										@php
											$i = 1
										@endphp
										@foreach($prod as $prod)
											<tr>
												<td>{{$i}}</td>
												<td><img src="{{asset('assets/theme1/images/upload/product/'.$prod->thumbnail)}}" style="max-width:50px; height:auto"></td>
												<td>{{$prod->name}}</td>
												<td>{{$prod->created_date}}</td>
												<td>{{$prod->last_updated_date}}</td>
												<td>
													@if($prod->status_active == 1)
													   <p class="label label-success">Active</p>
													@else
														<p class="label label-danger">Not Active</p>
													@endif
												</td>
												<td>
													<a href="{{url('admin/product/edit', $prod->id_product)}}"><i class="fa fa-edit fa-2x"></i> </a>
												</td>
											</tr>
										@php
											$i = $i + 1
										@endphp
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
								
			</div>
			<!-- /.row -->
			<!-- ============================================================== -->
			<!-- End Info box -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- Comment - table -->
			<!-- ============================================================== -->
		   
			<!-- ============================================================== -->
			<!-- End Comment - chats -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- End Page Content -->
			<!-- ============================================================== -->
			
		</div>
		<!-- ============================================================== -->
		<!-- End Container fluid  -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- End Page wrapper  -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	@endsection