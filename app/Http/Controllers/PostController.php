<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.home', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::latest()->get();
        return view('posts.create' , compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateDate = $request->validate([
            'title' => ['required', 'min:5', 'max:255'],
            // 'category' => ..........
            'content' => ['required', 'min:5', 'max:255'],
        ]);
        $user = auth()->user();
        $post =                 $user->posts()->create([
            ...$validateDate,
            'category_id' => 1
        ]);


        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($postId)
    {
        $post = Post::findOrFail($postId);
        return view('posts.single', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($postId)
    {
        $post = Post::findorfail($postId);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $postId)
    {
        $validateDate = $request->validate([
            'title' => ['required', 'min:5', 'max:255'],
            // 'category' => ..........
            'content' => ['required', 'min:5', 'max:255'],
        ]);
        $post = Post::findOrFail($postId);
        $post = Post::where('id', $postId)->update($validateDate);
        return redirect(route('posts.show', $postId));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($postId)
    {
        $post = Post::findOrFail($postId);
        $post = Post::where('id', $postId)->delete();

        return redirect(route('posts.index'));
    }
}
