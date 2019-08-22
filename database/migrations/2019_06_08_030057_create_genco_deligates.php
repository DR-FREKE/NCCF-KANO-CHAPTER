<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGencoDeligates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genco_deligates', function (Blueprint $table) {
            $table->increments('s/n');
            $table->String('Name');
            $table->String('Email');
            $table->String('PhoneNumber');
            $table->String('Zone');
            $table->String('Office');
            $table->softDeletes();
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
        Schema::dropIfExists('genco_deligates');
    }
}
