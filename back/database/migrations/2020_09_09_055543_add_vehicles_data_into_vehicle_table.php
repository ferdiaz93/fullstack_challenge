<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Vehicle;

class AddVehiclesDataIntoVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $vehicles = [
            [
                "brand_name" => "Etios",
                "year" => 2019,
                "price" => 815900,
                "main_img_url" => "assets/img/vehicles/etios.jpg",
            ],
            [
                "brand_name" => "Yaris",
                "year" => 2020,
                "price" => 1038900,
                "main_img_url" => "assets/img/vehicles/yaris.jpg",
            ],
            [
                "brand_name" => "Corolla",
                "year" => 2018,
                "price" => 1430700,
                "main_img_url" => "assets/img/vehicles/corolla.jpg",
            ],
            [
                "brand_name" => "Prius",
                "year" => 2019,
                "price" => 2882000,
                "main_img_url" => "assets/img/vehicles/prius.jpg",
            ],
            [
                "brand_name"=> "Camry",
                "year" => 2018,
                "price" => 3753200,
                "main_img_url" => "assets/img/vehicles/etios.jpg",
            ],
            [
                "brand_name" => "Toyota 86",
                "year" => 2019,
                "price" => 3812100,
                "main_img_url" => "assets/img/vehicles/toyota-86.jpg",
            ],
            [
                "brand_name" => "Innova",
                "year" => 2020,
                "price" => 2596400,
                "main_img_url" => "assets/img/vehicles/innova.jpg",
            ],
            [
                "brand_name" => "SW4",
                "year" => 2019,
                "price" => 3236200,
                "main_img_url" => "assets/img/vehicles/sw4.jpg",
            ],
            [
                "brand_name" => "RAV4",
                "year" => 2019,
                "price" => 3170200,
                "main_img_url" => "assets/img/vehicles/rav4.jpg",
            ],
            [
                "brand_name" => "Land Cruiser Prado",
                "year" => 2017,
                "price" => 815900,
                "main_img_url" => "assets/img/vehicles/prado.jpg",
            ],
            [
                "brand_name" => "Land Cruiser 200",
                "year" => 2018,
                "price" => 7873100,
                "main_img_url" => "assets/img/vehicles/cruiser.jpg",
            ],
            [
                "brand_name" => "Hilux",
                "year" => 2020,
                "price" => 1507000,
                "main_img_url" => "assets/img/vehicles/cruiser.jpg",
            ],
        ];
        foreach($vehicles as $vehicle){
            $vehicle = (object)$vehicle;

            $new_vehicle = new Vehicle;
            $new_vehicle->brand_name = $vehicle->brand_name;
            $new_vehicle->year = $vehicle->year;
            $new_vehicle->price = $vehicle->price;
            $new_vehicle->main_img_url = $vehicle->main_img_url;
            $new_vehicle->slogan = "Preparada para cualquier desafio";
            $new_vehicle->main_description = "Texto lorem ipsum dolor sit amet orem ipsum dolor sit amet. lorem ipsum dolor sit amet orem ipsum dolor sit amet lorem ipsum dolor sit amet orem ipsum dolor sit amet.";
            $new_vehicle->img_url_2 = "assets/img/vehicles_details/detail_1.jpg";
            $new_vehicle->description_2 = "Texto lorem ipsum dolor sit amet orem ipsum dolor sit amet. lorem ipsum dolor sit amet orem ipsum dolor sit amet lorem ipsum dolor sit amet orem ipsum dolor sit amet.";
            $new_vehicle->img_url_3 = "assets/img/vehicles_details/detail_2.jpg";
            $new_vehicle->description_3 = "Texto lorem ipsum dolor sit amet orem ipsum dolor sit amet. lorem ipsum dolor sit amet orem ipsum dolor sit amet lorem ipsum dolor sit amet orem ipsum dolor sit amet.";
            $new_vehicle->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Vehicle::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
