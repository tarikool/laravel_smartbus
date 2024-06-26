<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('is_active')->default(0);
            $table->integer('role_id')->default(2);
            $table->integer('photo_id')->index()->unsigned()->nullable();
            $table->string('name');
            $table->string('city')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->unique();
            $table->double('balance')->default(0);
            $table->text('about')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
