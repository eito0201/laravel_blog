<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostRequest;

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

    // 新規投稿画面を表示
    public function create()
    {
        return view('posts.create');
    }

    // 投稿内容を登録
    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect('/');
    }

    // 投稿編集画面を表示
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    // 投稿内容を更新
    public function update(PostRequest $request, Post $post)
    {
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect('/');
    }
}
