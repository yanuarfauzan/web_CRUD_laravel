<?php

use App\Http\Controllers\Blog;
use App\Http\Controllers\Home;
use App\Http\Controllers\About;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Home::class, 'index']);


Route::get('/about', [About::class, 'index']);

Route::get('/blog', [Blog::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/post-add', [PostController::class, 'create']);

Route::get('/post-edit/{postEdit}', [PostController::class, 'edit']);

Route::get('/post-detail/{showingPost}', [PostController::class, 'show']);

Route::get('/category', [CategoryController::class, 'index']);

Route::delete('/post-del/{deletedPost}', [PostController::class, 'delete'])->name('post-del');
// request POST

Route::post('/posts', [PostController::class, 'store']);

// request PUT

Route::put('/post-do-edit/{updatedPost}', [PostController::class, 'update'])->name('post-do-edit');

