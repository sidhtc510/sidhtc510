<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
// use App\Http\Controllers\Admin\destroyImage;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostFrontController;




/**
 * 
 * Front controllers
 */
Route::get('/', [PostFrontController::class, 'index'])->name('home');
Route::get('/article/{slug}', [PostFrontController::class, 'show'])->name('posts.single');
/****************************************************/




/**
 * 
 * Admin controllers
 */
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', [MainController::class, 'index'])->name('admin.index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/tags', TagController::class);
    Route::resource('/posts', PostController::class);
    Route::get('/delImg', [PostController::class, 'destroyImg'])->name('destroyImage');
});
/****************************************************/




/**
 * 
 * Login adn registration middleware and logout
 */
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [UserController::class, 'create'])->name('register.create');
    Route::post('/register', [UserController::class, 'store'])->name('register.store');

    Route::get('/login', [UserController::class, 'loginForm'])->name('login.create');
    Route::post('/login', [UserController::class, 'login'])->name('login');
});
Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');
/****************************************************/
