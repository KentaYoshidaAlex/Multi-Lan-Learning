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
            $table->string('loginId', 20);
            $table->string('loginPass', 20);
            $table->string('userName', 20);
            $table->integer('clearCount');
            $table->integer('missCount');
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

