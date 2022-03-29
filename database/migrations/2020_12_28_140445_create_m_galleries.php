<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMGalleries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_galleries', function (Blueprint $table) {
			$table->bigIncrements("id_gallery");
			$table->text("name");
			$table->longtext("description");
			$table->integer("status_active");
			$table->integer("creator");
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
        Schema::dropIfExists('m_galleries');
    }
}
