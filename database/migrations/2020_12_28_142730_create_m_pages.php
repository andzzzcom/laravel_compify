<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_pages', function (Blueprint $table) {
            $table->bigIncrements("id_page");
            $table->string("title");
            $table->text("description");
            $table->text("thumbnail");
            $table->longtext("content");
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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_pages');
    }
}
