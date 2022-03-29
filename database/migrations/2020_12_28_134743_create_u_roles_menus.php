<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateURolesMenus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('u_roles_menus', function (Blueprint $table) {
			$table->bigIncrements("id_role_menu");
			$table->integer("role_id");
			$table->integer("menu_id");
			$table->integer("status_active");
			$table->integer("last_updater");
			$table->datetime("created_date")->useCurrent();
			$table->datetime("last_updated_date")
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
        Schema::dropIfExists('u_roles_menus');
    }
}
