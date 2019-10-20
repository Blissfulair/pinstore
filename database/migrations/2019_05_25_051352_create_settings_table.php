<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo');
            $table->longText('about');
            $table->string('email');
            $table->string('number');
            $table->string('address');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('gplus');
            $table->string('youtube');
            $table->string('foursquare');
            $table->string('feed');
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
        Schema::dropIfExists('settings');
    }
}
