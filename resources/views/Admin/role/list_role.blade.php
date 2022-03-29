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
					<h4 class="text-themecolor">List Role</h4>
				</div>
				<div class="col-md-7 align-self-center text-right">
					<div class="d-flex justify-content-end align-items-center">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
							<li class="breadcrumb-item active">Role</li>
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
							<h4 class="card-title">List Role</h4>
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
											<th width="50%">Role Name</th>
											<th width="10%">Created Date</th>
											<th width="15%">Last Updated Date</th>
											<th width="10%">Status</th>
											<th width="10%"></th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>No</th>
											<th>Role Name</th>
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
										@foreach($list as $role)
											<tr>
												<td>{{$i}}</td>
												<td>{{$role->name}}</td>
												<td>{{$role->created_date}}</td>
												<td>{{$role->last_updated_date}}</td>
												<td>
													@if($role->status_active == 1)
													   <p class="label label-success">Active</p>
													@else
														<p class="label label-danger">Not Active</p>
													@endif
												</td>
												<td>
													<a href="" onclick="editRole('{{$role->id_role}}')" style="cursor:pointer" data-toggle="modal" data-target="#myModal"><i class="fa fa-user fa-2x"></i> </a>
													<a href="{{url('admin/role/edit', $role->id_role)}}"><i class="fa fa-edit fa-2x"></i> </a>
													<a href="#" onclick="remove_role({{$role->id_role}})"><i class="fa fa-trash fa-2x"></i> </a>
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
	
	
		<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Role Permissions</h4>
			  </div>
			  <div class="modal-body">
				<p>List Menu for this Role:</p>
			  </div>
				<div id="PermissionList" style="padding:25px;padding-top:5px"></div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>

		  </div>
		</div>
	
	<script>
		function remove_role(id)
		{
			var t = $('#_token').val();
			var c = confirm("Are you sure delete this Role?");
			if(c == true){
				$.ajax({
					headers:{
						'X-CSRF-TOKEN': t
					},
					url:'{{ url("admin/role/delete_act") }}',
					type:"POST",
					data: {id:id},
					success: function(result){
						if(result == 1){
							alert("Successfully Removed Role !");
						}else{
							alert("Failed Removed Role !");
						}
						location.reload();
					}
				});
			}else
			{
				return false;
			}
		}
		
		
		function editRole(idRole)
		{
			var t = $('#_token').val();
			$("#PermissionList").empty();
			$.ajax({
				headers:{
					'X-CSRF-TOKEN': t
				},
				method:'POST',
				data: {id_role:idRole},
				cache:false,
				url:'{{url("admin/role/get_role_menu")}}',
				success:function(result)
				{
					console.log(result);
					var results = result.split("-----");
					var data = results[0];
					var perm = results[1];
					
					data = JSON.parse(data);
					perm = JSON.parse(perm);
					
					//alert(data.length);
					for(var i = 0; i<data.length; i++)
					{					
						var bool = 0;
						for(var j = 0; j<perm.length; j++)
						{
							if(perm[j].menu_id == data[i].id_menu)
							{
								bool = 1;
							}
						}
						if(bool == 1)
						{
							var appended = "<p>"+(i+1)+". "+data[i].name+" : <span id='label-text"+data[i].id_menu+"'>ok</span></p> <p><button id='statBtn"+data[i].id_menu+"' onclick='updateStatusRole(0, "+idRole+", "+data[i].id_menu+")' class='btn btn-danger'>Set Not Ok</button></p><br>";
							$("#PermissionList").append(appended);
						}
						if(bool == 0)
						{
							var appended = "<p>"+(i+1)+". "+data[i].name+" : <span id='label-text"+data[i].id_menu+"'>not ok</span></p> <p><button id='statBtn"+data[i].id_menu+"' onclick='updateStatusRole(1, "+idRole+", "+data[i].id_menu+")' class='btn btn-success'>Set Ok</button> </p><br>";
							$("#PermissionList").append(appended);
						}
					}
					
				}
			});
		}
			
		function updateStatusRole(stat, idRole, idMenu)
		{
			var t = $('#_token').val();
			//alert(idRole + "->" + idMenu);
			$.ajax({
				headers:{
					'X-CSRF-TOKEN': t
				},
				method:'POST',
				data: {stat:stat, id_role:idRole, id_menu:idMenu},
				cache:false,
				url:'{{url("admin/role/update_status_role")}}',
				success:function(result)
				{
					if(result == 0)
					{
						$("#statBtn"+idMenu).attr('class', 'btn btn-success');
						$("#statBtn"+idMenu).text('Set Ok').attr("onclick", "updateStatusRole(1, "+idRole+", "+idMenu+")");
						$("#label-text"+idMenu).html('Not Ok');
						
					}else if(result == 1)
					{
						$("#statBtn"+idMenu).attr('class', 'btn btn-danger');
						$("#statBtn"+idMenu).text('Set Not Ok').attr("onclick", "updateStatusRole(0, "+idRole+", "+idMenu+")");
						$("#label-text"+idMenu).html('Ok');
					}else
					{
						alert("Failed Updated!");
					}
				}
			});
		}
	</script>
	@endsection