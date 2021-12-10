<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('stage_name');
            $table->string('residence');
            $table->string('genre_known_with');
            $table->string('profile_picture');
            $table->integer('paid_promo')->default('0');
            $table->integer('legend_artist')->default('0');
            $table->integer('upcoming_artist')->default('0');
            $table->text('biography')->nullable();
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
        Schema::dropIfExists('artists');
    }
}
