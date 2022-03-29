<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class Product extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
	
	public $main_m = 'App\Models\Product_m';
	public $path = 'Admin/product/';
	public $suf = '_product';
	public $redirect = 'admin/product';
	
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
		$type	  = 'add';
		$id_admin = Session::get('id_admin');
		
		$name 	  = request()->post("name");
		$desc	  = request()->post("description");
		$price	  = request()->post("price");
		$status   = request()->post("status_active");
				
		$image 				= request()->file('thumbnail');
		$name_image 		= time().'.'.$image->getClientOriginalExtension();
		$destinationPath 	= public_path('/assets/theme1/images/upload/product/');
		$image->move($destinationPath, $name_image);
		
		$data = array(
						"name"=>$name,
						"description"=>$desc,
						"price"=>$price,
						"thumbnail"=>$name_image,
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
		$list = (new $this->main_m)->get_by_id($id);
		
		return view($this->path.$type.$this->suf)
			->with($type, $list)
			->with("general_settings", $data);
    }
	
	public function edit_act()
    {
		$type 		= 'edit';
		$id_admin	= Session :: get ('id_admin');
		
		$id 		= request()->post("id_product");
		$name 		= request()->post("name");
		$desc		= request()->post("description");
		$price		= request()->post("price");
		$status 	= request()->post("status_active");
		
		$data = array(
						"id_product"=>$id,
						"name"=>$name,
						"price"=>$price,
						"description"=>$desc,
						"status_active"=>$status,
						"last_updater"=>$id_admin,
					);
						
		if(request()->hasFile('thumbnail'))
		{			
			$image 				= request()->file('thumbnail');
			$name_image 		= time().'.'.$image->getClientOriginalExtension();
			$destinationPath 	= public_path('/assets/theme1/images/upload/product/');
			$image->move($destinationPath, $name_image);
			
			$data["thumbnail"]	= $name_image;
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
		$id 	= request()->post("id");
		$suf 	= $this->suf;
		$data 	= array("id_product"=>$id, "status_active"=>-1);
		
		$gal 	= (new $this->main_m)->remove_data($data);
		if($gal !== null)
			echo 1;
		else
			echo 0;
	}
}