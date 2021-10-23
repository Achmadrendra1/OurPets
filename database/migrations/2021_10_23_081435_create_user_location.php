<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLocation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_location', function (Blueprint $table) {
            $table->string('userid');
            $table->string('loc_name');
            $table->decimal('latitude');
            $table->decimal('longitude');
            $table->string('states');
            $table->string('city');
            $table->string('district');
            $table->string('zipcode');
            $table->timestamps();
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_location');
    }
}
