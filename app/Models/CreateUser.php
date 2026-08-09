<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateUser extends Model
{
    use HasFactory;

    protected $table = 'createUsers';

    protected $fillable = [
        'loginId_userName',
        'loginPass',
        'clearCount',
        'missCount',
        'max_consecutive_study_day',
        'achievement_cource', 
        'number_of_compeleted_quiz',
        'perfect_clear_flag'
    ];

    // 追加: achievement_courceをPHP配列として自動的にJSON変換
    protected $casts = [
        'achievement_cource' => 'array',
    ];
}
