<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRouteStationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_station', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('route_id')->unsigned()->nullable()->index();
            $table->integer('station_id')->unsigned()->nullable()->index();
            $table->timestamps();
            $table->foreign('route_id')->references('id')->on('bus_routes')->onDelete('cascade');
            $table->foreign('station_id')->references('id')->on('bus_stations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('route_station');
    }
}
