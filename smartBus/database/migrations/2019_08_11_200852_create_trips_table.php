<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('id');
            $table->string('departure');
            $table->string('destination');
            $table->integer('ticket');
            $table->double('price');
            $table->integer('payment_status')->default(0);
            $table->integer('expire_status')->default(0);
            $table->integer('user_id')->index()->unsigned()->nullable();
            $table->integer('route_id')->index()->unsigned()->nullable();
            $table->integer('bus_id')->index()->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
