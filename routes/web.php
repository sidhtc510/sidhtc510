<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\destroyImage;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;





Route::get('/', function () {
    return view('welcome');
});





Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [MainController::class, 'index'])->name('admin.index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/tags', TagController::class);
    Route::resource('/posts', PostController::class);
    Route::get('/delImg', [PostController::class, 'destroyImg'])->name('destroyImage');
});

Route::get('/register', [UserController::class, 'create'])->name('register.create');
Route::post('/register', [UserController::class, 'store'])->name('register.store');



