<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // データの挿入を許可するカラムを設定
    protected $fillable = [
        'title',
        'body',
    ];

    // Postモデル(1)からCommentモデル(1 or 多)へのアクセスを定義
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
