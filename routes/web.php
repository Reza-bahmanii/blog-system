<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Post;

use App\Models\Category;

Route::get('/', function () {

    Category::create([
        'name' => 'sport'
    ]);
    return view('welcome');
});

Route::resource('posts', PostController::class);

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('posts/{post}/comment', [CommentController::class, 'store'])->name('posts.comment');
