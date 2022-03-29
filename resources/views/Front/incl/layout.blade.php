@section("header")
<!DOCTYPE html>
<html lang="en">
@show

	<head>
		<title>@yield("title_web", "Compify")</title>
	  
		@section("header_settings")		
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="Compify" name="author">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="{{$general_settings['meta_description']}}">
		<meta name="keywords" content="{{$general_settings['meta_keywords']}}">
		<meta name="title" content="{{$general_settings['meta_title']}}">

		<script>
			var base_url = "{{ url('/') }}";
		</script>
		<!-- Favicon Icon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_admin/theme1/upload/images/settings/favicon/'.$general_settings['favicon_web']) }}">
		<!-- Animation CSS -->
		<link rel="stylesheet" href="{{ asset('assets/theme1/css/animate.css') }}">	
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="{{ asset('assets/theme1/bootstrap/css/bootstrap.min.css') }}">
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
		<!-- Icon Font -->
		<link href="{{ asset('assets/theme1/css/ico-moon.css') }}" rel="stylesheet">
		<!-- Icon Font CSS -->
		<link rel="stylesheet" href="{{ asset('assets/theme1/css/ionicons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/theme1/css/themify-icons.css') }}">
		<!-- FontAwesome CSS -->
		<link rel="stylesheet" href="{{ asset('assets/theme1/css/all.min.css') }}">
		<!--- owl carousel CSS-->
		<link rel="stylesheet" href="{{ asset('assets/theme1/owlcarousel/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/theme1/owlcarousel/css/owl.theme.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/theme1/owlcarousel/css/owl.theme.default.min.css') }}">
		<!-- Magnific Popup CSS -->
		<link rel="stylesheet" href="{{ asset('assets/theme1/css/magnific-popup.css') }}">
		<!-- Style CSS -->
		<link rel="stylesheet" href="{{ asset('assets/theme1/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/theme1/css/responsive.css') }}">
		<!-- Demo Education Style CSS -->
		<link rel="stylesheet" href="{{ asset('assets/theme1/css/ed.css') }}">
		<link rel="stylesheet" id="layoutstyle" href="{{ asset('assets/theme1/color/theme-yellow.css') }}">
		@show
	</head>
	
	<body>

	<!-- LOADER -->
	<div class="preloader">
		<div class="loader_grid">
		  <div class="loader_box loader_box1"></div>
		</div>
	</div>
	<!-- END LOADER --> 

		<input type="hidden" name="_token" id="_token" value="<?php echo csrf_token();?>">
		@include("Front.incl.header")
		@include("Front.incl.content")
		@include("Front.incl.footer")
	  
		<div id="back-to-top">
			<a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
		</div>

		</main> <!-- end main-wrapper -->

	
		@section("footer")
		<!-- Latest jQuery --> 
		<script src="{{ asset('assets/theme1/js/jquery-1.12.4.min.js') }}"></script> 
		<!-- jquery-ui --> 
		<script src="{{ asset('assets/theme1/js/jquery-ui.js') }}"></script>
		<!-- popper min js --> 
		<script src="{{ asset('assets/theme1/js/popper.min.js') }}"></script>
		<!-- Latest compiled and minified Bootstrap --> 
		<script src="{{ asset('assets/theme1/bootstrap/js/bootstrap.min.js') }}"></script> 
		<!-- owl-carousel min js  --> 
		<script src="{{ asset('assets/theme1/owlcarousel/js/owl.carousel.min.js') }}"></script> 
		<!-- magnific-popup min js  --> 
		<script src="{{ asset('assets/theme1/js/magnific-popup.min.js') }}"></script> 
		<!-- waypoints min js  --> 
		<script src="{{ asset('assets/theme1/js/waypoints.min.js') }}"></script> 
		<!-- parallax js  --> 
		<script src="{{ asset('assets/theme1/js/parallax.js') }}"></script> 
		<!-- countdown js  --> 
		<script src="{{ asset('assets/theme1/js/jquery.countdown.min.js') }}"></script>
		<!-- fit video  -->
		<script src="{{ asset('assets/theme1/js/jquery.fitvids.js') }}"></script> 
		<!-- jquery.counterup.min js --> 
		<script src="{{ asset('assets/theme1/js/jquery.counterup.min.js') }}"></script>
		<!-- isotope min js --> 
		<script src="{{ asset('assets/theme1/js/isotope.min.js') }}"></script>
		<!-- elevatezoom js -->
		<script src="{{ asset('assets/theme1/js/jquery.elevatezoom.js') }}" }}></script>
		<!-- elevatezoom js -->
		<script src="{{ asset('assets/theme1/js/jquery.dd.min.js') }}"></script> 
		<!-- Demo js -->
		<script src="{{ asset('assets/theme1/js/ed.js') }}"></script> 
		<!-- scripts js --> 
		<script src="{{ asset('assets/theme1/js/scripts.js') }}"></script>
		@show

	</body>
</html>