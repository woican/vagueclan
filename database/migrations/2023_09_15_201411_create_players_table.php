<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nickname');
            $table->integer('age');
            $table->string('photo')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('twitch')->nullable();
            $table->text('description')->nullable();
            $table->string('country');
            $table->integer('games_played')->default(0);
            $table->integer('wins')->default(0);
            $table->integer('losses')->default(0);
            $table->float('kd_ratio')->default(0);
            $table->integer('rating')->default(0);
            $table->unsignedBigInteger('team_id');
            $table->timestamps();
    
            $table->foreign('team_id')->references('id')->on('teams');
        });
    }
    
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
};
