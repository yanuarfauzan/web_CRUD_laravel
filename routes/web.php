<?php

use App\Http\Controllers\Blog;
use App\Http\Controllers\Home;
use App\Http\Controllers\About;
use App\Http\Controllers\Login;
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

Route::get('/', [Home::class, 'index'])->middleware('auth');

Route::get('/login', [Login::class, 'index'])->name('login')->middleware('guest');

Route::get('/logout', [Login::class, 'logout'])->middleware('auth');

Route::post('/authen', [Login::class, 'auth'])->middleware('guest');


Route::get('/about', [About::class, 'index'])->middleware('auth');

Route::get('/blog', [Blog::class, 'index'])->middleware('auth');

Route::get('/posts', [PostController::class, 'index'])->middleware('auth')->middleware('must-admin');

Route::get('/post-add', [PostController::class, 'create'])->middleware('auth');

Route::get('/post-deleted', [PostController::class, 'deletedPosts'])->middleware('auth');

Route::get('/post-edit/{postEdit}', [PostController::class, 'edit'])->middleware('auth');

Route::get('/post-detail/{showingPost}', [PostController::class, 'show'])->middleware('auth');

Route::delete('/post-del/{deletedPost}', [PostController::class, 'delete'])->name('post-del')->middleware('auth');


Route::get('/post-restore/{postRestore}', [PostController::class, 'restore'])->middleware('auth');

Route::get('/category', [CategoryController::class, 'index'])->middleware('auth')->middleware('must-admin');

Route::get('/category-add', [CategoryController::class, 'create'])->middleware('auth');

Route::get('/category-edit/{cateEdit}', [CategoryController::class, 'edit'])->middleware('auth');

Route::get('/cate-deleted', [CategoryController::class, 'deletedCate'])->middleware('auth');

Route::delete('/cate-del/{deletedCate}', [CategoryController::class, 'delete'])->name('cate-del')->middleware('auth');

Route::get('/cate-restore/{cateRestore}', [CategoryController::class, 'restore'])->middleware('auth');

// request POST

Route::post('/posts', [PostController::class, 'store'])->middleware('auth');

Route::post('/categories', [CategoryController::class, 'store'])->middleware('auth');

// request PUT

Route::put('/post-do-edit/{updatedPost}', [PostController::class, 'update'])->name('post-do-edit')->middleware('auth');

Route::put('/cate-do-edit/{updatedCate}', [CategoryController::class, 'update'])->name('cate-do-edit')->middleware('auth');
