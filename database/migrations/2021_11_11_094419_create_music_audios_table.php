<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicAudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music_audios', function (Blueprint $table) {
            $table->id();
            $table->string('song_title');
            // $table->string('stage_name');
            $table->string('song_genre');
            $table->string('producer');
            $table->string('song_mp3');
            $table->string('song_artwork');
            $table->integer('view_count')->default('0');
            $table->integer('paid_promo')->default('0');
            // $table->string('artist_id')->unsigned()->nullable();
            $table->unsignedBigInteger('artist_id')->unsigned()->nullable();
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');
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
        Schema::dropIfExists('music_audios');
    }
}
