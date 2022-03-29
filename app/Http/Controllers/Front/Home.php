<?php

namespace App\Http\Controllers\Front;
use Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Pages_m;
use App\Models\Gallery_m;
use App\Models\Product_m;
use App\Models\Blog_m;
use App\Models\Team_m;
use App\Models\ClientLogo_m;
use App\Models\ClientTestimonial_m;
use App\Models\Inbox_m;

use Session;

class Home extends Controller
{
	public $path = 'Front/';
	
	public function home(){
		
		$data 	= $this->general_settings();
		$blog 	= Blog_m::where("status_active", 1)
				->orderBy("id_blog", "desc")
				->limit(3)
				->get();
		$team 	= Team_m::where("status_active", 1)
				->orderBy("id_team", "desc")
				->limit(4)
				->get();
		$prod 	= Product_m::where("status_active", 1)
				->orderBy("id_product", "desc")
				->limit(3)
				->get();
		$clogo	= ClientLogo_m::where("status_active", 1)
				->orderBy("id_client_logo", "desc")
				->get();
		$ctest	= ClientTestimonial_m::where("status_active", 1)
				->orderBy("id_client_testimonial", "desc")
				->get();
		return view("Front/home")
			->with('blog', $blog)
			->with('team', $team)
			->with('prod', $prod)
			->with('clogo', $clogo)
			->with('ctest', $ctest)
			->with('count', $this->get_count())
			->with("general_settings", $data);
	}
	
	public function about(){
		
		$type = "about";
		$data = $this->general_settings();
		$list = (new Pages_m)->get_all();
		
		return view($this->path.$type)
			->with($type, $list)
			->with("general_settings", $data);
	}
	
	public function gallery(){
		
		$type = "gallery";
		$data = $this->general_settings();
		$list = (new Gallery_m)->get_all();
		
		return view($this->path.$type)
			->with($type, $list)
			->with("general_settings", $data);
	}
	
	public function product(){
		
		$type = "product";
		$data = $this->general_settings();
		$list = Product_m::where("status_active", 1)->get();
		
		return view($this->path.$type)
			->with($type, $list)
			->with("general_settings", $data);
	}
	
	public function blog(){
		
		$type = "blog";
		$data = $this->general_settings();
		$list = (new Blog_m)->get_all();
		
		return view($this->path.$type)
			->with($type, $list)
			->with("general_settings", $data);
	}
	
	public function blog_detail($id){
		
		$type = "detail";
		$data = $this->general_settings();
		$list = (new Blog_m)->get_by_id($id);
		if(count($list)<1)
			return redirect("not_found");
		$all  = Blog_m::where("status_active", 1)->orderBy("id_blog", "desc")->limit(5)->get();
		
		return view($this->path.$type)
			->with('all', $all)
			->with($type, $list)
			->with("general_settings", $data);
	}
	
	public function contact(){
		
		$type 	= "contact";
		$data 	= $this->general_settings();
		$clogo	= ClientLogo_m::where("status_active", 1)
				->orderBy("id_client_logo", "desc")
				->get();
		
		return view($this->path.$type)
			->with("clogo", $clogo)
			->with("general_settings", $data);
	}
	
	public function contact_action(Request $req)
	{
		$name		= $req->name;
		$email		= $req->email;
		$subject	= $req->subject;
		$message	= $req->message;
		
		$data		= array(
						"sender_name"=>$name,
						"sender_email"=>$email,
						"subject"=>$subject,
						"content"=>$message,
						"status_active"=>1,
					);
		$ins		= (new Inbox_m)->insert_data($data);
		if($ins !== null)
		{
			Session::flash("msg", "Pesan berhasil dikirim! Kami akan segera menghubungi Anda!");
		}
		else
		{
			Session::flash("msg", "Pesan gagal dikirim!");
		}
		return redirect('contact');
	}
	
	private function get_count(){
		
		$blog 	= Blog_m::where("status_active", 1)
				->orderBy("id_blog", "desc")
				->count();
		$team 	= Team_m::where("status_active", 1)
				->orderBy("id_team", "desc")
				->count();
		$prod 	= Product_m::where("status_active", 1)
				->orderBy("id_product", "desc")
				->count();
		$test 	= ClientTestimonial_m::where("status_active", 1)
				->orderBy("id_product", "desc")
				->count();
		return [$blog, $team, $prod, $test];
	}
}
