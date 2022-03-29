<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class Settings extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
	
	public $main_m = 'App\Models\Settings_m';
	public $path = 'Admin/settings/';
	public $suf = '_settings';
	public $redirect = 'admin/settings';
	
	public function edit_general_settings()
    {
		$type = "general";
		$data = $this->general_settings();
		$list = (new $this->main_m)->get_general_settings();
		
		return view($this->path.$type.$this->suf)
			->with($type, $list)
			->with("general_settings", $data);
    }
	
	public function edit_general_settings_action()
    {		
		$title_web 			 = request()->post("title_web");
		$subtitle_web 		 = request()->post("subtitle_web");
		$url_facebook 		 = request()->post("url_facebook");
		$url_twitter 		 = request()->post("url_twitter");
		$url_instagram 		 = request()->post("url_instagram");
		$url_youtube 		 = request()->post("url_youtube");
		$meta_title 		 = request()->post("meta_title");
		$meta_description 	 = request()->post("meta_description");
		$meta_keywords		 = request()->post("meta_keywords");
		$phone				 = request()->post("phone");
		$address			 = request()->post("address");
		$email				 = request()->post("email");
		
		if(request()->hasFile('favicon_web'))
		{			
			$image = request()->file('favicon_web');
			$name = $image->getClientOriginalName();
			$destinationPath = public_path('/assets_admin/theme1/upload/images/settings/favicon/');
			$image->move($destinationPath, $name);
			
			$data_settings["favicon_web"] = $name;
			$settings = (new $this->main_m)->update_general_settings($data_settings);
			
		}
		
		if(request()->hasFile('logo_web'))
		{			
			$image = request()->file('logo_web');
			$name = $image->getClientOriginalName();
			$destinationPath = public_path('/assets_admin/theme1/upload/images/settings/logo/');
			$image->move($destinationPath, $name);
			
			$data_settings["logo_web"] = $name;
			$settings = (new $this->main_m)->update_general_settings($data_settings);
		}
		
		$data_settings = array(
							"title_web"=>$title_web,
							"subtitle_web"=>$subtitle_web,
							"url_facebook"=>$url_facebook,
							"url_twitter"=>$url_twitter,
							"url_instagram"=>$url_instagram,
							"url_youtube"=>$url_youtube,
							"meta_title"=>$meta_title,
							"meta_description"=>$meta_description,
							"meta_keywords"=>$meta_keywords,
							"phone"=>$phone,
							"address"=>$address,
							"email"=>$email,
						);
		$settings = (new $this->main_m)->update_general_settings($data_settings);
		if($settings)
		{			
			Session::flash("msg", "Successfully Updated!");
			
		}else
		{
			Session::flash("msg", "Successfully Updated!");
		}
		return redirect("admin/settings/edit_general_settings/");
	}
	
	public function edit_specific_settings()
    {
		$type = "specific";
		$data = $this->general_settings();
		$list = (new $this->main_m)->get_specific_settings();
		
		return view($this->path.$type.$this->suf)
			->with($type, $list)
			->with("general_settings", $data);
    }
	
	public function edit_specific_settings_action()
    {		
		$header_title_1		 = request()->post("header_title_1");
		$header_title_2		 = request()->post("header_title_2");
		$header_title_3		 = request()->post("header_title_3");
		$header_subtitle_1	 = request()->post("header_subtitle_1");
		$header_subtitle_2	 = request()->post("header_subtitle_2");
		$header_subtitle_3	 = request()->post("header_subtitle_3");
		$selling_point_1	 = request()->post("selling_point_1");
		$selling_point_2	 = request()->post("selling_point_2");
		$selling_point_3	 = request()->post("selling_point_3");
		$selling_point_sub_1 = request()->post("selling_point_sub_1");
		$selling_point_sub_2 = request()->post("selling_point_sub_2");
		$selling_point_sub_3 = request()->post("selling_point_sub_3");
		$about_title 		 = request()->post("about_title");
		$about_subtitle		 = request()->post("about_subtitle");
		
		$data_settings = array(
							"header_title_1"=>$header_title_1,
							"header_title_2"=>$header_title_2,
							"header_title_3"=>$header_title_3,
							"header_subtitle_1"=>$header_subtitle_1,
							"header_subtitle_2"=>$header_subtitle_2,
							"header_subtitle_3"=>$header_subtitle_3,
							"selling_point_1"=>$selling_point_1,
							"selling_point_2"=>$selling_point_2,
							"selling_point_3"=>$selling_point_3,
							"selling_point_sub_1"=>$selling_point_sub_1,
							"selling_point_sub_2"=>$selling_point_sub_2,
							"selling_point_sub_3"=>$selling_point_sub_3,
							"about_title"=>$about_title,
							"about_subtitle"=>$about_subtitle,
						);
		if(request()->hasFile('slider_image_1'))
		{			
			$image = request()->file('slider_image_1');
			$name = $image->getClientOriginalName();
			$destinationPath = public_path('/assets/theme1/upload/images/specific/');
			$image->move($destinationPath, $name);
			
			$data_settings["slider_image_1"] = $name;
		}
		if(request()->hasFile('slider_image_2'))
		{			
			$image = request()->file('slider_image_2');
			$name = $image->getClientOriginalName();
			$destinationPath = public_path('/assets/theme1/upload/images/specific/');
			$image->move($destinationPath, $name);
			
			$data_settings["slider_image_2"] = $name;
		}
		if(request()->hasFile('slider_image_3'))
		{			
			$image = request()->file('slider_image_3');
			$name = $image->getClientOriginalName();
			$destinationPath = public_path('/assets/theme1/upload/images/specific/');
			$image->move($destinationPath, $name);
			
			$data_settings["slider_image_3"] = $name;
		}
		if(request()->hasFile('about_image'))
		{			
			$image = request()->file('about_image');
			$name = $image->getClientOriginalName();
			$destinationPath = public_path('/assets/theme1/upload/images/specific/');
			$image->move($destinationPath, $name);
			
			$data_settings["about_image"] = $name;
		}
		if(request()->hasFile('header_image_page'))
		{			
			$image = request()->file('header_image_page');
			$name = $image->getClientOriginalName();
			$destinationPath = public_path('/assets/theme1/upload/images/specific/');
			$image->move($destinationPath, $name);
			
			$data_settings["header_image_page"] = $name;
		}	
		if(request()->hasFile('bg_admin_panel'))
		{			
			$image = request()->file('bg_admin_panel');
			$name = $image->getClientOriginalName();
			$destinationPath = public_path('/assets/theme1/upload/images/specific/');
			$image->move($destinationPath, $name);
			
			$data_settings["bg_admin_panel"] = $name;
		}		
		
		$settings = (new $this->main_m)->update_specific_settings($data_settings);
		if($settings)
		{			
			Session::flash("msg", "Successfully Updated!");
			
		}else
		{
			Session::flash("msg", "Successfully Updated!");
		}
		return redirect("admin/settings/edit_specific_settings/");
	}
	
}