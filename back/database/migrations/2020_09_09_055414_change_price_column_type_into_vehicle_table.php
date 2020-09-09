<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangePriceColumnTypeIntoVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_vehicle', function (Blueprint $table) {
            $table->dropColumn('price');
        });
        Schema::table('tbl_vehicle', function (Blueprint $table) {
            $table->bigInteger('price')->notnull()->after('year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_vehicle', function (Blueprint $table) {
            $table->dropColumn('price');
        });
        Schema::table('tbl_vehicle', function (Blueprint $table) {
            $table->decimal('price')->notnull()->after('year');
        });
    }
}
