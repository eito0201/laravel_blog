<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    // 投稿一覧画面を表示
    public function index()
    {
        // 投稿日時の新しい順に投稿一覧を取得
        $posts = Post::latest()->get();
        return view('posts.index', ['posts' => $posts]);
    }

    // 投稿詳細画面を表示
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }
}
