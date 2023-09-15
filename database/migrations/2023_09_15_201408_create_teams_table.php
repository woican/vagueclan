<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('logo')->nullable();
            $table->string('country')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('website')->nullable();
            $table->string('achievements')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('teams');
    }
};
