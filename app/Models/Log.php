<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log extends Model
{
    use HasFactory;

    protected $table = 'logs';

    //複数代入を可能にするモデル属性を定義
    protected $fillable = [
        'loginId_userName',
        'language',
        'quizNo',
        'question',
        'logRight',
        'logWrong'
    ];
}
