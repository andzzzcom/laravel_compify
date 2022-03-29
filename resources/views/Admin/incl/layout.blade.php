@section("header")
<!DOCTYPE html>
<html>
@show

	@section("header_settings")
	<head>		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Tell the browser to be responsive to screen width -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Favicon icon -->
		<link rel="icon" type="image" sizes="16x16" href="{{ asset('assets_admin/theme1/upload/images/settings/favicon/'.$general_settings['favicon_web']) }}">
		<title>@yield("title_web", $general_settings['title_web'] ): Admin Panel</title>
		
		<!-- This page CSS -->
		<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
		<link rel="stylesheet" href="{{ asset('assets_admin/theme1/node_modules/dropify/dist/css/dropify.min.css') }}">
		<!-- chartist CSS -->
		<link href="{{ asset('assets_admin/theme1/node_modules/morrisjs/morris.css') }}" rel="stylesheet">
		<!--Toaster Popup message CSS -->
		<link href="{{ asset('assets_admin/theme1/node_modules/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
		<!-- Morris CSS -->
		<link href="{{ asset('assets_admin/theme1/node_modules/morrisjs/morris.css') }}" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="{{ asset('assets_admin/theme1/dist/css/style.min.css') }}" rel="stylesheet">
		<!-- Dashboard 1 Page CSS -->
		<link href="{{ asset('assets_admin/theme1/dist/css/pages/dashboard1.css') }}" rel="stylesheet">
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="{{ asset('assets_admin/theme1/node_modules/jquery/jquery-3.2.1.min.js') }}"></script>
		<link rel="stylesheet" href="{{ url('assets/theme1/fontawesome/css/all.css') }}">
	</head>
	@show
	
	<body class="skin-blue fixed-layout">
		<input type="hidden" name="_token" id="_token" value="{{ $general_settings['csrf_admin'] }}">
		@include("Admin.incl.header")
		@include("Admin.incl.sidebar")
		@include("Admin.incl.content")
		@include("Admin.incl.footer")
	  
	
		@section("footer")    
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Bootstrap popper Core JavaScript -->
		<script src="{{ asset('assets_admin/theme1/node_modules/popper/popper.min.js') }}"></script>
		<script src="{{ asset('assets_admin/theme1/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
		<!-- slimscrollbar scrollbar JavaScript -->
		<script src="{{ asset('assets_admin/theme1/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
		<!--Wave Effects -->
		<script src="{{ asset('assets_admin/theme1/dist/js/waves.js') }}"></script>
		<!--Menu sidebar -->
		<script src="{{ asset('assets_admin/theme1/dist/js/sidebarmenu.js') }}"></script>
		<!--Custom JavaScript -->
		<script src="{{ asset('assets_admin/theme1/dist/js/custom.min.js') }}"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->
		<!--morris JavaScript -->
		<script src="{{ asset('assets_admin/theme1/node_modules/raphael/raphael-min.js') }}"></script>
		<script src="{{ asset('assets_admin/theme1/node_modules/morrisjs/morris.min.js') }}"></script>
		<script src="{{ asset('assets_admin/theme1/node_modules/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
		<!-- Popup message jquery -->
		<script src="{{ asset('assets_admin/theme1/node_modules/toast-master/js/jquery.toast.js') }}"></script>
		<!-- Chart JS -->
		<script src="{{ asset('assets_admin/theme1/dist/js/dashboard1.js') }}"></script>
		
		<!-- This is data table -->
		<script src="{{ asset('assets_admin/theme1/node_modules/datatables/jquery.dataTables.min.js') }}"></script>
		<!-- start - This is for export functionality only -->
		<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
		<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
		<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
		<!-- jQuery file upload -->
		<script src="{{ asset('assets_admin/theme1/node_modules/dropify/dist/js/dropify.min.js') }}"></script>
		<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
		<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      
		<script>
		$(document).ready(function() {
			tinymce.init({
				selector: '#textareas'
			});
			// Basic
			$('.dropify').dropify();

			// Translated
			$('.dropify-fr').dropify({
				messages: {
					default: 'Glissez-déposez un fichier ici ou cliquez',
					replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
					remove: 'Supprimer',
					error: 'Désolé, le fichier trop volumineux'
				}
			});

			// Used events
			var drEvent = $('#input-file-events').dropify();

			drEvent.on('dropify.beforeClear', function(event, element) {
				return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
			});

			drEvent.on('dropify.afterClear', function(event, element) {
				alert('File deleted');
			});

			drEvent.on('dropify.errors', function(event, element) {
				console.log('Has Errors');
			});

			var drDestroy = $('#input-file-to-destroy').dropify();
			drDestroy = drDestroy.data('dropify')
			$('#toggleDropify').on('click', function(e) {
				e.preventDefault();
				if (drDestroy.isDropified()) {
					drDestroy.destroy();
				} else {
					drDestroy.init();
				}
			})
		});
		
		$(document).ready(function() {
			$('#myTable').DataTable();
			$(document).ready(function() {
				var table = $('#example').DataTable({
					"columnDefs": [{
						"visible": false,
						"targets": 2
					}],
					"order": [
						[2, 'asc']
					],
					"displayLength": 25,
					"drawCallback": function(settings) {
						var api = this.api();
						var rows = api.rows({
							page: 'current'
						}).nodes();
						var last = null;
						api.column(2, {
							page: 'current'
						}).data().each(function(group, i) {
							if (last !== group) {
								$(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
								last = group;
							}
						});
					}
				});
				// Order by the grouping
				$('#example tbody').on('click', 'tr.group', function() {
					var currentOrder = table.order()[0];
					if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
						table.order([2, 'desc']).draw();
					} else {
						table.order([2, 'asc']).draw();
					}
				});
			});
		});
		$('#example23').DataTable({
			dom: 'Bfrtip',
			buttons: [
				'copy', 'csv', 'excel', 'pdf', 'print'
			],
			pageLength: 250
		});    
		$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
		</script>
		@show
	
	</body>
</html>
