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
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string("userLevel")->default('0');
            $table->string("userType");
            $table->string("phone");
            $table->string("DOB");
            $table->string("Address");
            $table->string("Course_Study");
            $table->string("School_Graduated_from");
            $table->string("Relationship");
            $table->boolean("status")->default(true);
            $table->softDeletes();
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
