<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        // 投稿日時の新しい順に投稿一覧を取得
        $posts = Post::latest()->get();
        return view('posts.index', ['posts' => $posts]);
    }
}
