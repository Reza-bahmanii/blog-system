<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts' , function(){
    return view('posts.home');
});

Route::get('/posts/create' , function(){
    return view('posts.create');
});

// Route::get('/posts/{postId}', function($postId){
//     return view('posts.single', compact('postId'));
// })->name('posts.single');