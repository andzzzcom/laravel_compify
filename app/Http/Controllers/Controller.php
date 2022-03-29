<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Settings_m;
use App\Models\Blog_m;
use Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	public function general_settings()
	{
		$general_settings 			= (new Settings_m)->get_general_settings();
		$settings["meta_description"]= $general_settings[0]->meta_description;
		$settings["meta_title"] 	= $general_settings[0]->meta_title;
		$settings["meta_keywords"] 	= $general_settings[0]->meta_keywords;
		$settings["favicon_web"] 	= $general_settings[0]->favicon_web;
		$settings["logo_web"] 		= $general_settings[0]->logo_web;
		$settings["title_web"]		= $general_settings[0]->title_web;
		$settings["subtitle_web"] 	= $general_settings[0]->subtitle_web;
		$settings["url_facebook"] 	= $general_settings[0]->url_facebook;
		$settings["url_twitter"] 	= $general_settings[0]->url_twitter;
		$settings["url_instagram"] 	= $general_settings[0]->url_instagram;
		$settings["url_youtube"] 	= $general_settings[0]->url_youtube;
		$settings["address"]	 	= $general_settings[0]->address;
		$settings["phone"] 			= $general_settings[0]->phone;
		$settings["email"] 			= $general_settings[0]->email;
		$settings["all"]			= Blog_m::where("status_active", 1)
										->orderBy("id_blog", "desc")
										->limit(5)
										->get();
		
		//specific settings
		$specific_settings 					= (new Settings_m)->get_specific_settings();
		$settings["header_title_1"] 		= $specific_settings[0]->header_title_1;
		$settings["header_title_2"] 		= $specific_settings[0]->header_title_2;
		$settings["header_title_3"]			= $specific_settings[0]->header_title_3;
		$settings["header_subtitle_1"] 		= $specific_settings[0]->header_subtitle_1;
		$settings["header_subtitle_2"] 		= $specific_settings[0]->header_subtitle_2;
		$settings["header_subtitle_3"] 		= $specific_settings[0]->header_subtitle_3;
		$settings["slider_image_1"] 		= $specific_settings[0]->slider_image_1;
		$settings["slider_image_2"] 		= $specific_settings[0]->slider_image_2;
		$settings["slider_image_3"]	 		= $specific_settings[0]->slider_image_3;
		$settings["selling_point_1"] 		= $specific_settings[0]->selling_point_1;
		$settings["selling_point_2"] 		= $specific_settings[0]->selling_point_2;
		$settings["selling_point_3"] 		= $specific_settings[0]->selling_point_3;
		$settings["selling_point_sub_1"]	= $specific_settings[0]->selling_point_sub_1;
		$settings["selling_point_sub_2"]	= $specific_settings[0]->selling_point_sub_2;
		$settings["selling_point_sub_3"]	= $specific_settings[0]->selling_point_sub_3;
		$settings["about_title"]			= $specific_settings[0]->about_title;
		$settings["about_subtitle"]			= $specific_settings[0]->about_subtitle;
		$settings["about_image"]			= $specific_settings[0]->about_image;
		$settings["header_image_page"]		= $specific_settings[0]->header_image_page;
		$settings["bg_admin_panel"]			= $specific_settings[0]->bg_admin_panel;
		
		$settings["csrf_admin"] = Session::get("csrf_admin");
		
		return $settings;
	}
}
