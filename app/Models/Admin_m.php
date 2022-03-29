<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Admin_m extends Model
{
	public $suf = "_admin";
    public $table = "u_admins";
	public $primaryKey = 'id_admin';
	public $timestamps = false;
	
	public function get_all()
	{
		$data = DB::table($this->table)
				->whereNotIn("status_active", [-1])
				->orderBy("id_admin", "desc")
				->get();
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
				->where("id".$this->suf, $data["id".$this->suf])
				->update($data);
		return $data;
	}
}
