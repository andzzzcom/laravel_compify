<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Comment_m extends Model
{
    protected $table = "tb_comment";
	protected  $primaryKey = 'id_comment';
	public $timestamps = false;
	
	public function get_all_comment()
	{
		$comment = Comment_m::where("status_deleted_comment", 0)->get();
		return $comment;
	}	
	
    public function get_comment_by_id($id_comment)
    {
		$comment = DB::table('tb_comment')
						->join('tb_article', function ($join) {
							$join->on('tb_comment.article_id', '=', 'tb_article.id_article');
						})->get();
		return $comment;
    }
	
	public function update_comment($data)
	{
		$comment = Comment_m::where("id_comment", $data["id_comment"])->update($data);
		return $comment;
	}
	
	public function remove_comment($data)
	{
		$comment = Comment_m::where("id_comment", $data["id_comment"])->update($data);
		return $comment;
	}
}
