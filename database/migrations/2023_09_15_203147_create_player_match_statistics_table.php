<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('player_match_statistics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('player_id');
            $table->unsignedBigInteger('match_id');
            $table->integer('kills');
            $table->integer('deaths');
            $table->integer('assists');
            $table->float('kill_death_rate', 3, 2);
            $table->float('rating', 3, 2);
            $table->timestamps();
    
            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('match_id')->references('id')->on('matches');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_match_statistics');
    }
};
