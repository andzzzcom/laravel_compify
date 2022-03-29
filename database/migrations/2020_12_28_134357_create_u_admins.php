<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUAdmins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('u_admins', function (Blueprint $table) {
            $table->bigIncrements("id_admin");
            $table->string("email");
            $table->string("password");
            $table->string("avatar");
            $table->string("name");
            $table->string("phone");
            $table->text("address");
            $table->date("born_date");
            $table->text("born_place");
            $table->integer("gender");
            $table->integer("role");
			$table->integer("status_active");
            $table->dateTime("activated_date")->nullable();
			$table->integer("creator")->nullable();
            $table->integer("last_updater")->nullable();
            $table->dateTime("created_date")->useCurrent();
            $table->dateTime("last_updated_date")
				->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
		
		DB::table("u_admins")->insert(
			array(
				"email"=>"admin@admin.com",
				"password"=>'$2y$10$oo71oURavmzSkuovoZ7EwuuzkWZvIU9OI8QOv/S10JIXB63w0iuSi',
				"avatar"=>"avatar.png",
				"name"=>"Administrator",
				"phone"=>"551234567",
				"address"=>"Jakarta",
				"born_date"=>"1990-08-10",
				"born_place"=>"Jakarta",
				"gender"=>1,
				"role"=>1,
				"status_active"=>1,
				"activated_date"=>"2021-11-11",
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
        Schema::dropIfExists('u_admins');
    }
}
