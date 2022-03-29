<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class Menu extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
	
	public $main_m = 'App\Models\Menu_m';
	public $path = 'Admin/menu/';
	public $suf = '_menu';
	public $redirect = 'admin/role/menu';
	
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
		$data = $this->general_settings();
		
		return view($this->path.$type.$this->suf)
			->with("general_settings", $data);
    }
	
	public function add_act()
    {
		$type 		= 'add';
		$id_admin 	= Session :: get ('id_admin');
		$suf 		= $this->suf;
		
		$name 		= request()->post("name");
		$url 		= request()->post("url");
		$status 	= request()->post("status_active");
				
		$data = array(
						"name"=>$name,
						"url"=>$url,
						"status_active"=>$status,
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
		$list = (new $this->main_m)->get_by_id($id);
		
		return view($this->path.$type.$this->suf)
			->with($type, $list)
			->with("general_settings", $data);
    }
	
	public function edit_act()
    {
		$type 			= 'edit';
		$id_admin 		= Session :: get ('id_admin');
		$suf 			= $this->suf;
		
		$id 			= request()->post("id");
		$name 			= request()->post("name");
		$url 			= request()->post("url");
		$status 		= request()->post("status_active");
		
		$data = array(
						"id_menu"=>$id,
						"name"=>$name,
						"url"=>$url,
						"status_active"=>$status,
						"last_updater"=>$id_admin,
					);
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
		$data 		= array("id_menu"=>$id, "status_active"=>-1);
		
		$gal 		= (new $this->main_m)->remove_data($data);
		if($gal !== null)
			echo 1;
		else
			echo 0;
	}
}