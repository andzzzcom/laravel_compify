<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMTeamsRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_teams_roles', function (Blueprint $table) {
			$table->bigIncrements("id_team_role");
			$table->string("name_role");
			$table->integer("status_role");
			$table->integer("creator")->nullable();
            $table->integer("last_updater")->nullable();
			$table->datetime("created_date_role")->useCurrent();
			$table->datetime("last_updated_date_role")
			->default(\DB::raw("CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_teams_roles');
    }
}
