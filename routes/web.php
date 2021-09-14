<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\destroyImage;
use App\Http\Controllers\UserController;





Route::get('/', function () {
    return view('welcome');
})->name('home');





Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [MainController::class, 'index'])->name('admin.index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/tags', TagController::class);
    Route::resource('/posts', PostController::class);
    Route::get('/delImg', [PostController::class, 'destroyImg'])->name('destroyImage');
});

Route::get('/register', [UserController::class, 'create'])->name('register.create');
Route::post('/register', [UserController::class, 'store'])->name('register.store');

Route::get('/login', [UserController::class, 'loginForm'])->name('login.create');
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/login', [UserController::class, 'logout'])->name('logout');