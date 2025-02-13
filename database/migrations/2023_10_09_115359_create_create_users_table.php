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
        Schema::create('createUsers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('loginId_userName', 30);
            $table->string('loginPass', 20);
            $table->integer('clearCount');
            $table->integer('missCount');
            $table->integer('max_consecutive_study_day');
            $table->string('achievement_cource', 30);
            $table->string('number_of_compeleted_quiz', 10);
            $table->string('perfect_clear_flag', 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('createUsers');
    }
};

