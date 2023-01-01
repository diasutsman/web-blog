<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('home', [
    "title" => 'Home'
  ]);
});

Route::get('/about', function () {
  return view('about', [
    'name' => 'Dias Utsman',
    'email' => 'utsmand91@gmail.com',
    'image' => 'about.jpg',
    "title" => 'About',
  ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('categories', [CategoryController::class, 'index']);

Route::get('categories/{category:slug}', [CategoryController::class, 'show']);

Route::get('/authors/{author:username}', [UserController::class, 'show']);
