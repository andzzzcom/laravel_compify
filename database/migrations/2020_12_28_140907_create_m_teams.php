<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMTeams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_teams', function (Blueprint $table) {
            $table->bigIncrements("id_team");
            $table->string("name");
            $table->string("email");
            $table->string("photo");
            $table->string("phone");
            $table->string("url_facebook");
            $table->string("url_twitter");
            $table->string("url_instagram");
            $table->string("url_linkedin");
            $table->longtext("address");
            $table->longtext("description");
            $table->date("born_date");
            $table->longtext("born_place");
            $table->integer("gender");
            $table->integer("role");
			$table->integer("status_active");
			$table->integer("creator")->nullable();
            $table->integer("last_updater")->nullable();
            $table->dateTime("created_date")->useCurrent();
            $table->dateTime("last_updated_date")
				->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_teams');
    }
}
