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
					<h4 class="text-themecolor">List Product</h4>
				</div>
				<div class="col-md-7 align-self-center text-right">
					<div class="d-flex justify-content-end align-items-center">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
							<li class="breadcrumb-item active">Product</li>
						</ol>
					</div>
				</div>
			</div>
			<!-- ============================================================== -->
			<!-- End Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- Start Page Content -->
			<!-- ============================================================== -->
			<div class="row">
				<div class="col-12">
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
											<th width="10%"></th>
											<th width="35%">Name</th>
											<th width="15%">Price</th>
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
											<th>Price</th>
											<th>Last Updated Date</th>
											<th>Status</th>
											<th></th>
										</tr>
									</tfoot>
									<tbody>
										@php
											$i = 1
										@endphp
										@foreach($list as $prod)
											<tr>
												<td>{{$i}}</td>
												<td><img src="{{asset('assets/theme1/images/upload/product/'.$prod->thumbnail)}}" style="max-width:150px; height:auto"></td>
												<td>{{$prod->name}}</td>
												<td>Rp {{number_format($prod->price, 2)}},-</td>
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
													<a href="#" onclick="remove_product({{$prod->id_product}})"><i class="fa fa-trash fa-2x"></i> </a>
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
			<!-- ============================================================== -->
			<!-- End PAge Content -->
			<!-- ============================================================== -->
			
		</div>
		<!-- ============================================================== -->
		<!-- End Container fluid  -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- End Page wrapper  -->
	<!-- ============================================================== -->
	
	
	
	<script>
		function remove_product(id)
		{
			var t = $('#_token').val();
			var c = confirm("Are you sure delete this Product?");
			if(c == true){
				$.ajax({
					headers:{
						'X-CSRF-TOKEN': t
					},
					url:'{{ url("admin/product/delete_act") }}',
					type:"POST",
					data: {id:id},
					success: function(result){
						if(result == 1){
							alert("Successfully Removed !");
						}else{
							alert("Failed Removed !");
						}
						location.reload();
					}
				});
			}else
			{
				return false;
			}
		}
	
	</script>
	@endsection