<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_settings', function (Blueprint $table) {
            $table->bigIncrements("id_setting");
            $table->string("title_web");
            $table->text("subtitle_web");
            $table->string("favicon_web");
            $table->string("logo_web");
            $table->text("url_facebook");
            $table->text("url_twitter");
            $table->text("url_youtube");
            $table->text("url_instagram");
            $table->text("address");
            $table->string("phone");
            $table->string("email");
            $table->longtext("meta_title");
            $table->longtext("meta_keywords");
            $table->longtext("meta_description");
			$table->integer("status_active");
			$table->integer("creator")->nullable();
            $table->integer("last_updater")->nullable();
            $table->dateTime("created_date")->useCurrent();
            $table->dateTime("last_updated_date")
				->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
		
		DB::table("c_settings")->insert(
			array(
				"title_Web"=>"Compify",
				"subtitle_web"=>"Compify, One Stop Company Profile Website",
				"favicon_web"=>"favicon.png",
				"logo_web"=>"favicon.png",
				"url_facebook"=>"http://facebook.com/compify",
				"url_twitter"=>"http://twitter.com/compify",
				"url_youtube"=>"http://youtube.com/compify",
				"url_instagram"=>"http://instagram.com/compify",
				"address"=>"Jakarta",
				"phone"=>"551234567",
				"email"=>"compify@gmail.com",
				"meta_title"=>"meta title",
				"meta_keywords"=>"meta keywords",
				"meta_description"=>"meta description",
				"status_active"=>1,
			)
		);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('c_settings');
    }
}
