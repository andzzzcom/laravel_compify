<!-- START FOOTER SECTION --> 
<footer class="footer_dark">
	<div class="top_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                	<div class="footer_logo text-center">
                    	<a href="{{ url('') }}"><img alt="logo" style="max-width:150px;max-height:80px;height:auto" src="{{ asset('assets_admin/theme1/upload/images/settings/logo/'.$general_settings['logo_web']) }}"></a>
                    </div>
                    <p>{{$general_settings["subtitle_web"]}}</p>
                    <ul class="contact_info contact_info_light list_none">
                        <li>
                            <span class="ti-location-pin"></span>
                            <address>{{$general_settings["address"]}}</address>
                        </li>
                        <li>
                            <span class="ti-email"></span>
                            <a href="mailto:{{$general_settings['email']}}">{{$general_settings["email"]}}</a>
                        </li>
                        <li>
                            <span class="ti-mobile"></span>
                            <p>{{$general_settings["phone"]}}</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                	<h6 class="widget_title">NAV SITE</h6>
                    <ul class="list_none widget_links_style2">
                    	<li><a href="{{ url('') }}">Home</a></li>
                        <li><a href="{{ url('about') }}">About</a></li>
                        <li><a href="{{ url('product') }}">Product</a></li>
                        <li><a href="{{ url('gallery') }}">Gallery</a></li>
                        <li><a href="{{ url('blog') }}">Blog</a></li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                	<h6 class="widget_title">RECENT POSTS</h6>
                    <ul class="recent_post border_bottom_dash list_none">
                    	
						@foreach($general_settings['all'] as $a)
						<li>
                        	<div class="post_footer">
                            	<div class="post_img">
                                	<a href="{{url('blog/detail/'.$a->id_blog)}}"><img style="width:50px;height:auto" src="{{ asset('assets/theme1/images/upload/blog/'. $a->thumbnail) }}" alt="letest_post1" /></a>
                                </div>
                                <div class="post_content">
                                	<h6><a href="{{url('blog/detail/'.$a->id_blog)}}">{{$a->title}}</a></h6>
                                    <p class="small m-0">{{$a->created_date}}</p>
                                </div>
                            </div>
                        </li>
						@endforeach
						
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                    <h6 class="widget_title">Follow Us on</h6>
                    <ul class="list_none social_icons border_social">
                        <li><a href="{{$general_settings['url_facebook']}}" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="{{$general_settings['url_twitter']}}" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="{{$general_settings['url_instagram']}}" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                        <li><a href="{{$general_settings['url_youtube']}}" class="sc_youtube"><i class="ion-social-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer border_top_tran">
    	<div class="container">
        	<div class="row align-items-center">
            	<div class="col-md-6">
                	<p class="copyright m-md-0 text-center text-md-left">&copy; {{date("Y")}}  {{$general_settings["title_web"]}}</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER SECTION -->  
<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a> 
