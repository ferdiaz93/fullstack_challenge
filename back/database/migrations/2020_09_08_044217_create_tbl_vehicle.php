<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblVehicle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_vehicle', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand_name')->notnull();
            $table->integer('year')->notnull();
            $table->decimal('price')->notnull();
            $table->string('main_img_url', 255)->notnull();
            $table->string('slogan', 255)->notnull();
            $table->string('main_description', 255)->notnull();
            $table->string('img_url_2', 255)->notnull();
            $table->string('description_2', 255)->notnull();
            $table->string('img_url_3', 255)->notnull();
            $table->string('description_3', 255)->notnull();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_vehicle');
    }
}
