<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home_m extends Model
{
    protected $table = "u_admins";
	protected  $primaryKey = 'id_admin';
	public $timestamps = false;
	
	public function get_admin_data($data)
	{
		$admin = Home_m::where($data)->get();
		return $admin;
	}	
	
	public function get_all_article()
	{
		$article = Home_m::get();
		return $article;
	}	
	
    public function get_article_by_id($data)
    {
		$article = Home_m::where("id_article", $data["id_article"])->where("id_article", $data["id_article"])->get();
		return $article;
    }
}
