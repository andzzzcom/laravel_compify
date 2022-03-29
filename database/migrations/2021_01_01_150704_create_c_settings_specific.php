<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCSettingsSpecific extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_settings_specific', function (Blueprint $table) {
            $table->bigIncrements("id_setting");
            $table->string("header_title_1");
            $table->string("header_title_2");
            $table->string("header_title_3");
            $table->text("header_subtitle_1");
            $table->text("header_subtitle_2");
            $table->text("header_subtitle_3");
            $table->string("slider_image_1");
            $table->string("slider_image_2");
            $table->string("slider_image_3");
            $table->string("selling_point_1");
            $table->string("selling_point_2");
            $table->string("selling_point_3");
            $table->text("selling_point_sub_1");
            $table->text("selling_point_sub_2");
            $table->text("selling_point_sub_3");
            $table->text("about_title");
            $table->text("about_subtitle");
            $table->string("about_image");
            $table->string("header_image_page");
            $table->string("bg_admin_panel");
			$table->integer("status_active");
			$table->integer("creator")->nullable();
            $table->integer("last_updater")->nullable();
            $table->dateTime("created_date")->useCurrent();
            $table->dateTime("last_updated_date")
				->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
		
		DB::table("c_settings_specific")->insert(
			array(
				"header_title_1"=>"Header Title 1",
				"header_title_2"=>"Header Title 2",
				"header_title_3"=>"Header Title 3",
				"header_subtitle_1"=>"Header Subtitle 1",
				"header_subtitle_2"=>"Header Subtitle 2",
				"header_subtitle_3"=>"Header Subtitle 3",
				"slider_image_1"=>"2020_Yamaha_YZF_R1_New_Bike_Wallpaper.jpg",
				"slider_image_2"=>"69965663f1231b946cd69ce89fd0f5d6.jpg",
				"slider_image_3"=>"Himalayanbike.jpg",
				"selling_point_1"=>"Selling Point 1",
				"selling_point_2"=>"Selling Point 2",
				"selling_point_3"=>"Selling Point 3",
				"selling_point_sub_1"=>"Selling Point Sub 1",
				"selling_point_sub_2"=>"Selling Point Sub 2",
				"selling_point_sub_3"=>"Selling Point SUb 3",
				"about_title"=>"About Title",
				"about_subtitle"=>"About Subtitle",
				"about_image"=>"Himalayanbike.jpg",
				"header_image_page"=>"Himalayanbike.jpg",
				"bg_admin_panel"=>"Himalayanbike.jpg",
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
        Schema::dropIfExists('c_settings_specific');
    }
}
