<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('team1_id');
            $table->unsignedBigInteger('team2_id');
            $table->integer('team1_score');
            $table->integer('team2_score');
            $table->date('date');
            $table->time('time');
            $table->json('bans')->nullable();
            $table->integer('first_half_score')->nullable();
            $table->integer('second_half_score')->nullable();
            $table->string('twitch_stream_url')->nullable();
            $table->timestamps();
    
            $table->foreign('team1_id')->references('id')->on('teams');
            $table->foreign('team2_id')->references('id')->on('teams');
        });
    }
    
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
};
