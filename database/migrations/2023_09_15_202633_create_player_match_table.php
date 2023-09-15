<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('player_match', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('player_id');
            $table->unsignedBigInteger('match_id');
            $table->unsignedBigInteger('opponent_team_id');
            $table->string('result');
            $table->string('score');
            $table->boolean('won');
            $table->timestamps();
    
            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('match_id')->references('id')->on('matches');
            $table->foreign('opponent_team_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_match');
    }
};
