<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllQuizMusic extends Model
{
    use HasFactory;

    protected $table = 'allQuizMusics';

    //複数代入を可能にするモデル属性を定義
    protected $fillable = [
        'correctS',
        'gameOverS',
        'congratulationsS',
        'congratulationsS2'
    ];
}
