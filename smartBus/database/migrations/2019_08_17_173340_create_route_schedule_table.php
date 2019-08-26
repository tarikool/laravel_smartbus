<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRouteScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('route_id')->index()->unsigned()->nullable();
            $table->integer('schedule_id')->index()->unsigned()->nullable();
            $table->foreign('route_id')->references('id')->on('bus_routes')->onDelete('cascade');
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
        Schema::dropIfExists('route_schedule');
    }
}
