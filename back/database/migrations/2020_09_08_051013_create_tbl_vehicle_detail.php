<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblVehicleDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_vehicle_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vehicle_id')->unsigned()->notnull();
            $table->string('img_url', 255)->notnull();
            $table->string('title', 150)->notnull();
            $table->string('description', 255)->notnull();
            $table->timestamps();
            $table->foreign('vehicle_id')->references('id')->on('tbl_vehicle');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_vehicle_detail');
    }
}
