<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $table = 'players';

    //複数代入を可能にするモデル属性を定義
    protected $fillable = [
        'loginId',
        'loginPass',
        'userName',
        'clearCount',
        'missCount'
    ];
}
