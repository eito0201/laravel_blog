<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Post;
use App\Models\Comment;

class CommentsController extends Controller
{
    // コメントを登録
    public function store(CommentRequest $request, Post $post)
    {
        $comment = new Comment(['body' => $request->body]);
        // 投稿に紐づいた形でコメントを登録
        $post->comments()->save($comment);

        return redirect()->action('PostsController@show', $post);
    }

    // コメントを削除
    public function destroy(Post $post, Comment $comment)
    {
        $comment->delete();

        return redirect()->back();
    }
}
