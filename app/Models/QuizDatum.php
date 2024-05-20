<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizDatum extends Model
{
    use HasFactory;

    protected $table = 'quizData';

    //複数代入を可能にするモデル属性を定義
    protected $fillable = [
        'language',
        'question',
        'answer',
        'choice1',
        'choice2',
        'choice3',
        'choice4',
        'pathPronunciation',
        'pathBackground'
    ];
}
