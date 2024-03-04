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
            $table->string('logo')->nullable();
            $table->string('logo_dark')->nullable();
            $table->string('alt')->nullable();
            $table->string('alt2')->nullable();
            $table->string('address')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_url')->nullable();
            $table->string('subtitle_phone')->nullable();
            $table->string('phone2')->nullable();
            $table->string('phone_url2')->nullable();
            $table->string('subtitle_phone2')->nullable();
            $table->string('fb')->nullable();
            $table->string('insta')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('title_contact')->nullable();
            $table->string('subtitle_contact')->nullable();
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
