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
        Schema::create('qKansaiben', function (Blueprint $table) {
            $table->string('language', 20);
            $table->increments('no');
            $table->string('question', 100);
            $table->string('answer', 100);
            $table->string('choice1', 100);
            $table->string('choice2', 100);
            $table->string('choice3', 100);
            $table->string('choice4', 100);
            $table->string('pathPronunciation', 50)->nullable();
            $table->string('pathBackground', 50)->nullable();
            $table->string('subLanguage', 20)->nullable();
            $table->string('jpGreetingWord', 20)->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qKansaiben');
    }
};
