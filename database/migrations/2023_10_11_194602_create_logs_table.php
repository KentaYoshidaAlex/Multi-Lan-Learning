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
        Schema::create('logs', function (Blueprint $table) {
            $table->increments('logNo');
            $table->string('loginId', 20);
            $table->string('userName', 20);
            $table->string('language', 20);
            $table->integer('quizNo');
            $table->string('question', 100);
            $table->timestamps();
            $table->integer('logRight');
            $table->integer('logWrong');
            $table->integer('clearCount');
            $table->integer('missCount');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
