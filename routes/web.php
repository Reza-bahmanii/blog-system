<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
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

Route::post('logout', [LogoutController::class , 'destroy'])->name('logout');

Route::post('posts/{post}/comment', [CommentController::class, 'store'])->name('posts.comment');

Route::get('dashboard', [AdminController::class, 'show'])->name('dashboard');

Route::get('dashboard/posts' , [AdminController::class , 'posts'])->name('dashboard.posts');

Route::get('dashboard/users', [AdminController::class, 'users'])->name('dashboard.users');

Route::get('dashboard/users/{id}' , [AdminController::class, 'edit'])->name('admin.user.edit');

Route::put('dashboard/users/{id}' , [AdminController::class, 'update'])->name('admin.user.update');

Route::delete('dashboard/users/{id}', [AdminController::class, 'delete'])->name('admin.user.delete');

Route::get('dashboard/test', [AdminController::class, 'test'])->name('dashboard.test');

Route::get('dashboard/tags', [AdminController::class, 'tags'])->name('admin.tags');

Route::post('dashboard/tags', [AdminController::class, 'storeTag'])->name('admin.storeTag');


// Route::get('/' , function(){
//     return view('test');
// });
