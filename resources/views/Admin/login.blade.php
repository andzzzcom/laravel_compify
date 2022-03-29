@section("header")
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@show

    <head>
		@section("header_settings")
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Tell the browser to be responsive to screen width -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Favicon icon -->
		<link rel="icon" type="image" sizes="16x16" href="{{ asset('assets_admin/theme1/upload/images/settings/favicon/'.$general_settings['favicon_web']) }}">
		<title>Admin Panel | @yield("title_web", "Login")</title>
		
		<!-- page css -->
		<link href="{{ asset('assets_admin/theme1/dist/css/pages/login-register-lock.css') }}" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="{{ asset('assets_admin/theme1/dist/css/style.min.css') }}" rel="stylesheet">
		
		@show
	</head>

	@section("body")
	<body class="skin-blue card-no-border">
		<!-- ============================================================== -->
		<!-- Preloader - style you can find in spinners.css -->
		<!-- ============================================================== -->
		<div class="preloader">
			<div class="loader">
				<div class="loader__figure"></div>
				<p class="loader__label">(change it) title web</p>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- Main wrapper - style you can find in pages.scss -->
		<!-- ============================================================== -->
		<section id="wrapper">
			<div class="login-register" style="padding:5%;background-size:cover;background-image:url('{{asset('assets/theme1/upload/images/specific/'.$general_settings['bg_admin_panel'])}}');">
				<div class="login-box card" style="border-radius:20px;opacity:0.9">
					<div class="card-body">
						<form style="background-color:white;" class="form-horizontal form-material" method="post" id="loginform" action="{{ url('admin/login_action') }}">
							@csrf
							<h3 class="text-center">
								<img style="max-width:100px; max-height:100px" src="{{ asset('assets_admin/theme1/upload/images/settings/logo/'.$general_settings['logo_web']) }}">
							</h3>
							<h3 class="box-title m-b-20 text-center"><span style="font-weight:bold">{{ $general_settings['title_web'] }}</span> </h3>
							<h5 class=" text-center">Administrator Log In</h5>
							<h5 class="box-title m-b-20 text-center">
								@if(Session::has("msg"))
									{{Session::get("msg")}}
								@endif
							</h5>
							<div class="form-group ">
								<div class="col-xs-12">
									<input class="form-control" type="text" name="email" required="" placeholder="Insert Username/Email"> 
								</div>
							</div>
							<div class="form-group">
								<div class="col-xs-12">
									<input class="form-control" type="password" name="password" required="" placeholder="Insert Password"> 
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-12">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Remember me</label>
									</div> 
								</div>
							</div>
							<div class="form-group text-center">
								<div class="col-xs-12 p-b-20">
									<button style="background-color:#4386a6" class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Log In</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</body>
	@show
	
	@section("footer")
	<!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets_admin/theme1/node_modules/jquery/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets_admin/theme1/node_modules/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets_admin/theme1/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
	@show

@section("endfooter")
</html>
@show
