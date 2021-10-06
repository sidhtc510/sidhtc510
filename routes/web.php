<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\ClearCacheController;
use App\Http\Controllers\TagFrontController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\PostFrontController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\SearchFrontController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\CategoryFrontController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\TestLenovoController;

/**
 * 
 * Front controllers
 */
Route::get('/', [PostFrontController::class, 'index'])->name('home');
Route::get('/lenovo', [TestLenovoController::class, 'index'])->name('lenovo');
Route::get('/article/{slug}', [PostFrontController::class, 'show'])->name('posts.single');
Route::get('/category/{slug}', [CategoryFrontController::class, 'show'])->name('categories.single');
Route::get('/tag/{slug}', [TagFrontController::class, 'show'])->name('tags.single');
Route::get('/search', [SearchFrontController::class, 'index'])->name('search'); // для того что бы работал старый вариант указания контроллера, перейди в RouteServiceProvider и раскомментируй  " protected $namespace = 'App\\Http\\Controllers'; "
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
    Route::resource('/users', AdminUserController::class);
    Route::get('/delImg', [PostController::class, 'destroyImg'])->name('destroyImage');
    Route::get('/cc', [ClearCacheController::class, 'index'])->name('clearCache');
    Route::resource('/sliders', SliderController::class);

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
