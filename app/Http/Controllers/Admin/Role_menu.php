<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class Role_menu extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
	
	public $main_m = 'App\Models\Role_menu_m';
	public $menu_m = 'App\Models\Menu_m';
	public $path = 'Admin/role_menu';
	public $suf = '_role_menu';
	public $redirect = 'admin/role/role_menu';
	
	public function get_role_menu()
    {
		$id_role = request()->post("id_role");
		$all_roles = (new $this->main_m)->get_active_menu_by_role($id_role);
		
		$menu = (new $this->menu_m)->get_all();
		echo $menu."-----".$all_roles;
    }
	
	public function update_status_role()
	{
		$stat = request()->post("stat");
		$id_role = request()->post("id_role");
		$id_menu = request()->post("id_menu");
		$data_role = array(
						"role_id"=>$id_role,
						"menu_id"=>$id_menu,
					);
		if($stat == 1)
		{
			$data_role["status_active"] = 1;
			$role = (new $this->main_m)->insert_data($data_role);
			echo 1;
		}else
		{
			$data_role["status_active"] = -1;
			$role = (new $this->main_m)->remove_data($data_role);
			echo 0;
		}
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
		$type = 'add';
		$id_admin = Session :: get ('id_admin');
		$suf = $this->suf;
		
		$name = request()->post("name");
		$status = request()->post("status_active");
				
		$data = array(
						"name"=>$name,
						"status_active"=>$status,
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
		$type = 'edit';
		$id_admin = Session :: get ('id_admin');
		$suf = $this->suf;
		
		$id = request()->post("id");
		$name = request()->post("name");
		$status = request()->post("status_active");
		
		$data = array(
						"id_role_menu"=>$id,
						"name"=>$name,
						"status_active"=>$status,
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
		$id = request()->post("id");
		$suf = $this->suf;
		$data = array("id_role_menu"=>$id, "status_active"=>-1);
		
		$gal = (new $this->main_m)->remove_data($data);
		if($gal !== null)
			echo 1;
		else
			echo 0;
	}
}