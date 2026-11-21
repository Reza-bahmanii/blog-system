<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts' , PostController::class);

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('register', [RegisterController::class , 'register']);

Route::get('/login' , [LoginController::class, 'show'])->name('login');
Route::post('/login' , [LoginController::class, 'login']);

