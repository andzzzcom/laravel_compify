<!-- START HEADER -->
<header class="header_wrap dark_skin hover_menu_style3 main_menu_capitalize main_menu_weight_400 main_menu_size_16">
	<div class="top-header bg-dark light_skin">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <ul class="contact_detail list_none text-center text-md-left">
                        <li><i class="ti-mobile"></i>{{$general_settings["phone"]}}</li>
                        <li><i class="ti-location-pin"></i>{{$general_settings["address"]}}</li>
                    </ul>
                </div>
                <div class="col-md-5">
                	<div class="d-flex flex-wrap align-items-center justify-content-md-end justify-content-center">
                        <ul class="list_none social_icons text-center hover_style2 social_white text-md-right">
                            <li><a href="{{$general_settings['url_facebook']}}"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="{{$general_settings['url_twitter']}}"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="{{$general_settings['url_youtube']}}"><i class="ion-social-youtube"></i></a></li>
                            <li><a href="{{$general_settings['url_instagram']}}"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="container">
        <nav class="navbar navbar-expand-lg"> 
            <a class="navbar-brand" href="{{ url('') }}">
                <img class="logo_light" style="max-width:150px;max-height:80px;height:auto" src="{{ asset('assets_admin/theme1/upload/images/settings/logo/'.$general_settings['logo_web']) }}" alt="logo" />
                <img class="logo_dark" style="max-width:150px;max-height:80px;height:auto" src="{{ asset('assets_admin/theme1/upload/images/settings/logo/'.$general_settings['logo_web']) }}" alt="logo" />
                <img class="logo_default" style="max-width:150px;max-height:80px;height:auto" src="{{ asset('assets_admin/theme1/upload/images/settings/logo/'.$general_settings['logo_web']) }}" alt="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link" href="{{ url('') }}">Home</a>
					</li>
                    <li>
                        <a class="nav-link" href="{{ url('about') }}">About</a>
					</li>
                    <li>
                        <a class="nav-link" href="{{ url('product') }}">Product</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('gallery') }}">Gallery</a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link" href="{{ url('blog') }}">Blog</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
            <ul class="d-none navbar-nav attr-nav align-items-center">
                <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="ion-ios-search-strong"></i></a>
                    <div class="search-overlay">
                        <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                        <div class="search_wrap">
                            <form>
                                <input type="text" placeholder="Search" class="form-control" id="search_input">
                                <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
	</div>
</header>
<!-- START HEADER --> 