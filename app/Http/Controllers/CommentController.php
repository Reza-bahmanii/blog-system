<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CommentController extends Controller
{
    public function store(Request $request, Post $post){
        $validateDate = $request->validate([
            'content' => ['required']
        ]);
        auth()->user()->comments()->create([
                                           ...$validateDate,
                                           'post_id' => $post->id
        ]);

        return redirect()->route('posts.show', $post);
    }
}
