<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(2);

        return view('posts.home', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::latest()->get();
        $tags = Tag::latest()->get();

        return view('posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateDate = $request->validate([
            'title' => ['required', 'min:5', 'max:255'],
            'category_id' => ['required', 'exists:categories,id'],
            'tags' => ['nullable', 'array'],
            'content' => ['required', 'min:5', 'max:255'],
        ]);
        $user = auth()->user();
        $post = $user->posts()->create([
            ...$validateDate,
        ]);
        $posts = $post->tags()->sync($request->input('tags' , []));
        dd($posts);

        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $comments = $post->comments()->with('user')->latest()->get();
        // select comment => send to view
        return view('posts.single', compact('comments', 'post'));
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
