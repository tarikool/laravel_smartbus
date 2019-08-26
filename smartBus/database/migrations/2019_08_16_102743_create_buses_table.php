<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('license_number')->nullable();
            $table->integer('total_seat')->unsigned()->default(40);
            $table->double('cost_per_unit')->unsigned()->nullable();
            $table->integer('booked_seat')->unsigned()->default(0);
            $table->integer('paid')->unsigned()->default(0);
            $table->integer('driver_id')->index()->unsigned()->nullable();
            $table->integer('route_id')->index()->unsigned()->nullable();
            $table->integer('station_id')->index()->unsigned()->nullable();
            $table->integer('schedule_id')->index()->unsigned()->nullable();
            $table->integer('trip_id')->index()->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('route_id')->references('id')->on('bus_routes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buses');
    }
}
