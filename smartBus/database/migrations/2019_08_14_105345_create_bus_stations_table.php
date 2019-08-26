<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_stations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bus_id')->index()->unsigned()->nullable();
            $table->string('name');
            $table->double('lat');
            $table->double('long');
            $table->text('address');
            $table->time('opening_hour')->nullable();
            $table->time('closing_hour')->nullable();
            $table->string('phone_number')->nullable();
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
        Schema::dropIfExists('bus_stations');
    }
}
