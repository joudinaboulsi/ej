<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_service')->nullable();
            $table->string('title_project')->nullable();
            $table->string('title_review')->nullable();
            $table->string('title_team')->nullable();
            $table->string('title_comp1')->nullable();
            $table->string('href_comp1')->nullable();
            $table->string('title_comp2')->nullable();
            $table->string('href_comp2')->nullable();
            $table->string('title_comp3')->nullable();
            $table->string('href_comp3')->nullable();
       
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
        Schema::dropIfExists('home_pages');
    }
}
