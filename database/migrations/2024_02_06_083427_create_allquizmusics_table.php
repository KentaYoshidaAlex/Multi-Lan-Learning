<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('allQuizMusics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('correctS', 100);
            $table->string('gameOverS', 100);
            $table->string('congratulationsS', 100);
            $table->string('congratulationsS2', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allQuizMusics');
    }
};
