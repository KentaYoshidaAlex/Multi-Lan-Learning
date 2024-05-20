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
        Schema::create('quizData', function (Blueprint $table) {
            $table->string('language', 20);
            $table->increments('no');
            $table->string('question', 50);
            $table->string('answer', 50);
            $table->string('choice1', 20);
            $table->string('choice2', 20);
            $table->string('choice3', 20);
            $table->string('choice4', 20);
            $table->string('pathPronunciation', 50)->nullable();
            $table->string('pathBackground', 50)->nullable();                       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizData');
    }
};
