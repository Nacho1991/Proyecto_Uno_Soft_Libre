<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Song extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('url_source');
            $table->integer('artist_id')->unsigned();
            $table->foreign('artist_id')->references('id')->on('artist')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('song');
    }
}
