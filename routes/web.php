<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts' , function(){
    $posts = Post::latest()->get();
    return view('posts.home', compact('posts'));
})->name('posts.home');

Route::get('/posts/create' , function(){
    return view('posts.create');
})->name('posts.create');

Route::post('/posts/create/store' , function(Request $request){
    $validateDate = $request->validate([
        'title' => ['required', 'min:5', 'max:255'],
        // 'category' => ..........
        'content' => ['required' , 'min:5', 'max:255'],
    ]);
    $posts = Post::insert([
        ...$validateDate,
        'created_at' => now(),
        'updated_at' => now()]);


    return redirect(route('posts.home'));
})->name('posts.store');

Route::get('/posts/{postId}', function($postId){
    $post = Post::findOrFail($postId);
    return view('posts.single', compact('post'));
})->name('posts.single');

Route::get('/posts/{postId}/edit' , function($postId){
    $post = Post::findorfail($postId);
    return view('posts.edit' , compact('post'));
})->name('posts.edit');

Route::put('posts/{postId}', function(Request $request, $postId){
    $validateDate = $request->validate([
        'title' => ['required', 'min:5', 'max:255'],
        // 'category' => ..........
        'content' => ['required' , 'min:5', 'max:255'],
    ]);
    $post = Post::findOrFail($postId);
    $post = Post::where('id', $postId)->update($validateDate);
    return redirect(route('posts.single', $postId));

})->name('posts.update');

Route::delete('posts/{postId}', function($postId){
    $post = Post::findOrFail($postId);
    $post = Post::where('id' , $postId)->delete();

    return redirect(route('posts.home'));
})->name('posts.delete');