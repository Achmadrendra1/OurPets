<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAddinfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addinfo', function (Blueprint $table) {
           
            $table->bigIncrements('petid');
            $table->string('user_id');
            $table->string('petname');
            $table->string('animal');
            $table->string('breed');
            $table->integer('weight');
            $table->integer('height');
            $table->string('color');
            $table->date('date_birth');
            $table->string('gender');
            $table->string('photo');
            $table->string('status');
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
        Schema::dropIfExists('user_addinfo');
    }
}
