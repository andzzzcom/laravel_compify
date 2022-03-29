<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Settings_m extends Model
{
	public $suf 		= "_setting";
    public $table 		= "c_settings";
	public $primaryKey 	= 'id_setting';
    public $table2 		= "c_settings_specific";
	public $timestamps 	= false;
		
	public function get_general_settings()
	{
		$settings = DB::table($this->table)
					->where("id".$this->suf, 1)
					->get();
		return $settings;
	}	
		
	public function update_general_settings($data)
	{
		$settings = DB::table($this->table)
					->where("id".$this->suf, 1)
					->update($data);
		return $settings;
	}
	
	public function get_upload_settings()
	{
		$settings = DB::table('tb_settings_upload')
					->get();
		return $settings;
	}	
	
	public function get_specific_settings()
	{
		$settings = DB::table($this->table2)
					->where("id".$this->suf, 1)
					->get();
		return $settings;
	}	
		
	public function update_specific_settings($data)
	{
		$settings = DB::table($this->table2)
					->where("id".$this->suf, 1)
					->update($data);
		return $settings;
	}
}
