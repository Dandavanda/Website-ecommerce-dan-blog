<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostCommentController extends Controller
{
    public function store(Request $request,post $post)
    {
        Comment::created([
            'posts_id' => $posts->id,
            'users_id' => auth()->id(),
            'message' => $request->message
        ]);

        return redirect()->back();
    }
}
