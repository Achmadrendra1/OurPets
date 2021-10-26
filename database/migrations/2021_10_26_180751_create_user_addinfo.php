<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUserAddinfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_user_addinfo', function (Blueprint $table) {
            $table->string('userid');
            $table->string('favanimal1');
            $table->string('breedanimal1');
            $table->string('favanimal2');
            $table->string('breedanimal2');
            $table->string('favanimal3');
            $table->string('breedanimal3');
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
        Schema::dropIfExists('table_user_addinfo');
    }
}
