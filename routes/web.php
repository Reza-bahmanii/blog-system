<?php

use Dotenv\Validator;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts' , function(){
    return view('posts.home');
})->name('posts.home');

Route::get('/posts/create' , function(){
    return view('posts.create');
})->name('posts.create');

Route::put('/posts/create/store' , function(Request $request){
    dd($request->all());
    // $validateDate = Validator::make(
    //     data: [
    //         'title' => $request
    //     ]
    // )

    // return redirect(route('posts.home'));
})->name('posts.store');

// Route::get('/posts/{postId}', function($postId){
//     return view('posts.single', compact('postId'));
// })->name('posts.single');