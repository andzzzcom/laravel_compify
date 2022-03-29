<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Role_menu_m extends Model
{
	public $suf = "_role_menu";
    public $table = "u_roles_menus";
	public $primaryKey = 'id_role_menu';
	public $timestamps = false;
	
	public function get_active_menu_by_role($id)
	{
		$data = DB::table($this->table)
					->where("role_id", $id)
					->whereNotIn("status_active", [0,-1])->get();
		return $data;
	}	
	
    public function get_by_id($id)
    {
		$data = DB::table($this->table)
				->where("id".$this->suf, $id)
				->get();
		return $data;
    }
	
	public function insert_data($data)
	{
		$data = DB::table($this->table)
				->insertGetId($data);
		return $data;
	}
	
	public function update_data($data)
	{
		$data = DB::table($this->table)
				->where("id".$this->suf, $data["id".$this->suf])
				->update($data);
		return $data;
	}
	
	public function remove_data($data)
	{
		$data = DB::table($this->table)
			->where("role_id", $data["role_id"])
			->where("menu_id", $data["menu_id"])
			->update($data);
		return $data;
	}
}
