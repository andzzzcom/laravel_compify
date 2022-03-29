<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Session;
use Hash;


use App\Models\Home_m;
use App\Models\Role_m;
use App\Models\Product_m;

class Home extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
	public function login()
    {
		$data = $this->general_settings();
		return view("Admin/login")
			->with("general_settings", $data);
    }
	
    public function login_action()
    {
		$email 			= request()->post("email");
		$password 		= request()->post("password");
		$data["email"] 	= $email;
		$login 			= (new Home_m)->get_admin_data($data);
		if($login->count() > 0)
		{
			$pass_key = $login[0]->password;		
			if (Hash::check($password, $pass_key)) 
			{				
				/*
				echo"<pre>";
				print_r($list);
				echo"</pre>";
				die();
				*/
				
				$id_admin = $login[0]->id_admin;
				$name_admin = $login[0]->name;		
				$photo_admin = $login[0]->avatar;		
				Session::put('id_admin', $id_admin);
				Session::put('email_admin', $email);
				Session::put('photo_admin', $photo_admin);
				Session::put('name_admin', $name_admin);
				Session::put('csrf_admin', csrf_token());
				
				return redirect("admin/home");
			}else
			{
				Session::flash("msg", "Wrong Email/Password !");
				return redirect("admin/login");
			}
		}
		else
		{
			Session::flash("msg", "Wrong Email/Password !");
			return redirect("admin/login");
		}
    }
	
	public function home()
    {
		$data = $this->general_settings();
		$prod = (new Product_m)->get_all();
		return view("Admin/home")
			->with("prod", $prod)
			->with("general_settings", $data);
    }
	
	public function logout()
    {
		session()->flush();
		return redirect("admin/login");
    }
	
    public function get_article_by_id()
    {
		$article = Article_m::where("id_artikel", 2)->get();
		
		echo"<pre>";
		print_r($article);
		echo"</pre>";
    }
	
    public function add_article()
    {
		$article = new Article_m();
		$article->judul_artikel = "artikel baru nih";
		$article->isi_artikel = "isinya random";
		$article->thumbnail_artikel = "a.png";
		$article->id_subkategori_artikel = "1";
		$article->id_writer_creator = "2";
		$article->last_updated_writer = "1111";
		$article->last_updated_date = "22222";
		$article->created_date = "1111";
		$article->status_artikel = "111";
		$article->save();
		if($article)
			echo"success added";
		else
			echo"failed added";
		
		echo"<pre>";
		print_r($article);
		echo"</pre>";
    }
	
    public function edit_article()
    {
		$article = Article_m::find(7);
		$article->judul_artikel = "artikel baru nih2";
		$article->isi_artikel = "isinya random";
		$article->thumbnail_artikel = "a.png";
		$article->id_subkategori_artikel = "1";
		$article->id_writer_creator = "2";
		$article->last_updated_writer = "1111";
		$article->last_updated_date = "22222";
		$article->created_date = "1111";
		$article->status_artikel = "111";
		$article->save();
		if($article)
			echo"success updated";
		else
			echo"failed updated";
		
		echo"<pre>";
		print_r($article);
		echo"</pre>";
    }
	
    public function delete_article()
    {
		$article = Article_m::find(7);
		$article->delete();
		if($article)
			echo"success deleted";
		else
			echo"failed deleted";
		
		echo"<pre>";
		print_r($article);
		echo"</pre>";
    }
}