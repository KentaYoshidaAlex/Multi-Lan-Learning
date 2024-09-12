<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateUser extends Model
{
    use HasFactory;

    protected $table = 'createUsers';

    //複数代入を可能にするモデル属性を定義
    protected $fillable = [
        'loginId_userName',
        'loginPass',
        'clearCount',
        'missCount'
    ];
}
