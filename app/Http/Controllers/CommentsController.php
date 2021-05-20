<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(CommentRequest $request){
        $post = Post::findOrFail($request->post_id);

        Comment::create([
            'content' => $request->content,
            'user_id' => Auth::id(),
            'post_id' => $post->id
        ]);

        return redirect()->route('mostrarPost', $post);
    }
}
