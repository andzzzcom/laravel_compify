<?php

namespace App\Http\Controllers\Admin;

use App\Models\BlogCategory_m;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class Blog extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
	
	public $main_m = 'App\Models\Blog_m';
	public $path = 'Admin/blog/';
	public $suf = '_blog_post';
	public $redirect = 'admin/blog';
	
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
		$cat  = BlogCategory_m::where("status_active", 1)->get();
		
		return view($this->path.$type.$this->suf)
			->with("cat", $cat)
			->with("general_settings", $data);
    }
	
	public function add_act()
    {
		$type 		= "add";
		$id_admin	= Session :: get ('id_admin');
		$suf 		= $this->suf;
		
		$title 		= request()->post("title");
		$content 	= request()->post("content");
		$tag 		= request()->post("tag");
		$category 	= request()->post("id_blog_category");
		$status 	= request()->post("status_active");
				
		$image 				= request()->file('thumbnail');
		$name 				= time().'.'.$image->getClientOriginalExtension();
		$destinationPath 	= public_path('/assets/theme1/images/upload/blog/');
		$image->move($destinationPath, $name);
		
		$data = array(
						"thumbnail"=>$name,
						"title"=>$title,
						"content"=>$content,
						"id_blog_category"=>$category,
						"tag"=>$tag,
						"creator"=>$id_admin,
						"last_updater"=>$id_admin,
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
		$cat  = BlogCategory_m::where("status_active", 1)->get();
		$list = (new $this->main_m)->get_by_id($id);
		
		return view($this->path.$type.$this->suf)
			->with($type, $list)
			->with("cat", $cat)
			->with("general_settings", $data);
    }
	
	public function edit_act()
    {
		$type = "edit";
		$id_admin = Session :: get ('id_admin');
		$suf = $this->suf;
		
		$id 			= request()->post("id_blog");
		$id_cat			= request()->post("id_blog_category");
		$title 			= request()->post("title");
		$content 		= request()->post("content");
		$tag 			= request()->post("tag");
		$status 		= request()->post("status_active");
						
		$data = array(
						"id_blog"=>$id,
						"title"=>$title,
						"content"=>$content,
						"id_blog_category"=>$id_cat,
						"tag"=>$tag,
						"last_updater"=>$id_admin,
						"status_active"=>$status,
					);
		if(request()->hasFile('thumbnail'))
		{			
			$image = request()->file('thumbnail');
			$name = time().'.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/assets/theme1/images/upload/blog/');
			$image->move($destinationPath, $name);
			
			$data["thumbnail"] = $name;
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
		$data	= array("id_blog"=>$id, "status_active"=>-1);
		
		$gal 	= (new $this->main_m)->remove_data($data);
		if($gal !== null)
			echo 1;
		else
			echo 0;
	}
}