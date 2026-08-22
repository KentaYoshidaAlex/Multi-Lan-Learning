<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('createUsers', function (Blueprint $table) {
            $table->integer('longest_consecutive_study_day')->nullable()->default(0)->after('max_consecutive_study_day');
        });
    }

    public function down(): void
    {
        Schema::table('createUsers', function (Blueprint $table) {
            $table->dropColumn('longest_consecutive_study_day');
        });
    }
};