<?php

namespace App\Http\Controllers\Admin;
use App\Models\Role_m;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class Team extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
	
	public $main_m = 'App\Models\Team_m';
	public $path = 'Admin/team/';
	public $suf = '_team';
	public $redirect = 'admin/team';
	
	public function index()
    {
		$type = "list";
		$data = $this->general_settings();
		$list = (new $this->main_m)->get_all();
		
		return view($this->path.$type.$this->suf)
			->with($type, $list)
			->with("general_settings", $data);
    }
	
	public function add()
    {
		$type = "add";
		$role = Role_m::where("status_active", 1)->get();
		$data = $this->general_settings();
		
		return view($this->path.$type.$this->suf)
			->with("role", $role)
			->with("general_settings", $data);
    }
	
	public function add_act()
    {
		$type 				= 'add';
		$id_admin 			= Session :: get ('id_admin');
		$suf 				= $this->suf;
		
		$name 				= request()->post("name");
		$email				= request()->post("email");
		$phone 				= request()->post("phone");
		$address 			= request()->post("address");
		$gender 			= request()->post("gender");
		$description 		= request()->post("description");
		$role 				= request()->post("role");
		$born_place 		= request()->post("born_place");
		$born_date 			= request()->post("born_date");
		$url_facebook		= request()->post("url_facebook");
		$url_twitter		= request()->post("url_twitter");
		$url_instagram		= request()->post("url_instagram");
		$url_linkedin		= request()->post("url_linkedin");
		$status 			= request()->post("status_active");
				
		$image 				= request()->file('photo');
		$name_image 		= time().'.'.$image->getClientOriginalExtension();
		$destinationPath 	= public_path('/assets/theme1/images/upload/team/');
		$image->move($destinationPath, $name_image);
		
		$data = array(
						"name"=>$name,
						"email"=>$email,
						"photo"=>$name_image,
						"phone"=>$phone,
						"address"=>$address,
						"gender"=>$gender,
						"born_place"=>$born_place,
						"born_date"=>$born_date,
						"url_facebook"=>$url_facebook,
						"url_twitter"=>$url_twitter,
						"url_instagram"=>$url_instagram,
						"url_linkedin"=>$url_linkedin,
						"description"=>$description,
						"role"=>$role,
						"status_active"=>$status,
						"creator"=>$id_admin,
						"last_updater"=>$id_admin,
					);
		$gal = (new $this->main_m)->insert_data($data);
		if($gal !== null)
		{
			Session::flash("msg", "Successfully Added!");
			return redirect($this->redirect);
		}
		else
		{
			Session::flash("msg", "Failed Added!");
			return redirect($this->redirect.'/'.$type);
		}
	}
	
	public function edit($id)
    {
		$type = "edit";
		$role = Role_m::where("status_active", 1)->get();
		$data = $this->general_settings();
		$list = (new $this->main_m)->get_by_id($id);
		
		return view($this->path.$type.$this->suf)
			->with("role", $role)
			->with($type, $list)
			->with("general_settings", $data);
    }
	
	public function edit_act()
    {
		$type = 'edit';
		$id_admin = Session :: get ('id_admin');
		$suf = $this->suf;
		
		$id 				= request()->post("id");
		$name 				= request()->post("name");
		$email 				= request()->post("email");
		$phone 				= request()->post("phone");
		$address 			= request()->post("address");
		$gender 			= request()->post("gender");
		$born_place 		= request()->post("born_place");
		$born_date 			= request()->post("born_date");
		$url_facebook		= request()->post("url_facebook");
		$url_twitter		= request()->post("url_twitter");
		$url_instagram		= request()->post("url_instagram");
		$url_linkedin		= request()->post("url_linkedin");
		$description 		= request()->post("description");
		$role 				= request()->post("role");
		$status 			= request()->post("status_active");
		
		$data = array(
						"id_team"=>$id,
						"name"=>$name,
						"email"=>$email,
						"phone"=>$phone,
						"address"=>$address,
						"gender"=>$gender,
						"born_place"=>$born_place,
						"born_date"=>$born_date,
						"url_facebook"=>$url_facebook,
						"url_twitter"=>$url_twitter,
						"url_instagram"=>$url_instagram,
						"url_linkedin"=>$url_linkedin,
						"description"=>$description,
						"role"=>$role,
						"status_active"=>$status,
						"last_updater"=>$id_admin,
					);
					
		if(request()->hasFile('photo'))
		{			
			$image 				= request()->file('photo');
			$name_image 		= time().'.'.$image->getClientOriginalExtension();
			$destinationPath 	= public_path('/assets/theme1/images/upload/team/');
			$image->move($destinationPath, $name_image);
			
			$data["photo"]		= $name_image;
		}
		
		$gal = (new $this->main_m)->update_data($data);
		if($gal)
			Session::flash("msg", "Successfully Updated!");
		else
			Session::flash("msg", "Failed Updated!");
			
		return redirect($this->redirect.'/'.$type.'/'.$id);
	}
	
	public function delete_act()
    {
		$id 		= request()->post("id");
		$suf 		= $this->suf;
		$data		= array("id_team"=>$id, "status_active"=>-1);
		
		$gal 		= (new $this->main_m)->remove_data($data);
		if($gal !== null)
			echo 1;
		else
			echo 0;
	}
}