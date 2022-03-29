<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Hash;

use App\Models\Role_m;

class Admin extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
	
	public $main_m = 'App\Models\Admin_m';
	public $path = 'Admin/admin/';
	public $suf = '_admin';
	public $redirect = 'admin/admin';
	
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
		$type 			= 'add';
		$id_admin 		= Session :: get ('id_admin');
		$suf 			= $this->suf;
		
		$password 		= '12345678';
		$name 			= request()->post("name");
		$email 			= request()->post("email");
		$phone 			= request()->post("phone");
		$address 		= request()->post("address");
		$gender 		= request()->post("gender");
		$born_date	 	= request()->post("born_date");
		$born_place 	= request()->post("born_place");
		$role 			= request()->post("role");
		$status 		= request()->post("status_active");
				
		$image = request()->file('avatar');
		$name_image = time().'.'.$image->getClientOriginalExtension();
		$destinationPath = public_path('/assets/theme1/images/upload/admin/');
		$image->move($destinationPath, $name_image);
		
		$data = array(
						"name"=>$name,
						"email"=>$email,
						"avatar"=>$name_image,
						"password"=>Hash::make($password),
						"phone"=>$phone,
						"address"=>$address,
						"gender"=>$gender,
						"born_date"=>$born_date,
						"born_place"=>$born_place,
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
		$data = $this->general_settings();
		$role = Role_m::where("status_active", 1)->get();
		$list = (new $this->main_m)->get_by_id($id);
		
		return view($this->path.$type.$this->suf)
			->with($type, $list)
			->with("role", $role)
			->with("general_settings", $data);
    }
	
	public function edit_act()
    {
		$type 			= 'edit';
		$id_admin 		= Session :: get ('id_admin');
		$suf 			= $this->suf;
		
		$id 			= request()->post("id");
		$name 			= request()->post("name");
		$email 			= request()->post("email");
		$phone 			= request()->post("phone");
		$address 		= request()->post("address");
		$gender 		= request()->post("gender");
		$born_date	 	= request()->post("born_date");
		$born_place 	= request()->post("born_place");
		$role 			= request()->post("role");
		$status 		= request()->post("status_active");
		$data = array(
						"id_admin"=>$id,
						"name"=>$name,
						"email"=>$email,
						"phone"=>$phone,
						"address"=>$address,
						"gender"=>$gender,
						"born_date"=>$born_date,
						"born_place"=>$born_place,
						"role"=>$role,
						"status_active"=>$status,
						"last_updater"=>$id_admin,
					);
		if(request()->hasFile('avatar'))
		{			
			$image = request()->file('avatar');
			$name_image = time().'.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/assets/theme1/images/upload/admin/');
			$image->move($destinationPath, $name_image);
			
			$data["avatar"] = $name_image;
			Session::put('photo_admin', $name_image);
			Session::put('name_admin', $name);
		}
		$gal = (new $this->main_m)->update_data($data);
		if($gal)
		{			
			Session::flash("msg", "Successfully Updated!");
		}
		else
			Session::flash("msg", "Failed Updated!");
			
		return redirect($this->redirect.'/'.$type.'/'.$id);
	}
	
	public function delete_act()
    {
		$id 		= request()->post("id");
		$suf 		= $this->suf;
		$data		= array("id_admin"=>$id, "status_active"=>-1);
		
		$gal 		= (new $this->main_m)->remove_data($data);
		if($gal !== null)
			echo 1;
		else
			echo 0;
	}
	
	public function edit_password($id)
    {
		$type = "edit_password";
		$list = (new $this->main_m)->get_by_id($id);
		$data = $this->general_settings();
		
		return view($this->path.$type)
			->with($type, $list)
			->with("general_settings", $data);
    }
	
	public function edit_password_act(Request $req)
    {
		$id_admin				= $req->post('id');
		$password_admin 		= $req->post('password');
		$new_password_admin 	= $req->post('new_password');
		$new_password_admin2 	= $req->post('new_password_confirm');
		
		$datas['id_admin'] 	= $id_admin;
		$checkid 			= (new $this->main_m)->get_by_id($datas);
		if(count($checkid) > 0)
		{
			$datauser		= (new $this->main_m)->get_by_id($datas);
			$passworduser 	= $datauser[0]->password;
			
			if(password_verify($password_admin, $passworduser))
			{
				$password_bcrypt = password_hash($new_password_admin, PASSWORD_BCRYPT);
				$dataadmin = array(
								"id_admin"=>$id_admin,
								"password"=>$password_bcrypt
							);
				$update_password = (new $this->main_m)->update_data($dataadmin);
				if(!$update_password)
				{
					Session::flash("msg", "Failed Update Password !");
				}else
				{
					Session::flash("msg", "Successfully Update Password !");
				}
			}else
			{
				Session::flash("msg", "Wrong Password !");
			}
		}else
		{
			Session::flash("msg", "Wrong Email / Email Not Activated !");
		}
		return redirect('admin/admin/edit_password/'.$id_admin);
    }
}