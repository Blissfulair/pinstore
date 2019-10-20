<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJambsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jambs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reg_no')->nullable();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middle_name')->nullable();
            $table->string('nin');
            $table->string('email');
            $table->string('password');
            $table->string('phone');
            $table->string('profile_code');
            $table->date('dob');
            $table->string('state');
            $table->string('home_town');
            $table->string('address');
            $table->string('lga');
            $table->string('first_choice_inst');
            $table->string('second_choice_inst');
            $table->string('third_choice_inst');
            $table->string('first_choice_course');
            $table->string('second_choice_course');
            $table->string('third_choice_course');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('jambs');
    }
}
