<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // データの挿入を許可するカラムを設定
    protected $fillable = [
        'body',
    ];

    // Commentモデル(1 or 多)からPostモデル(1)へのアクセスを定義
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
