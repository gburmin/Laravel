<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
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



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::name('news.')->prefix('news')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('index');
    Route::get('/{id}', [NewsController::class, 'show'])->name('newsOne');
    Route::get('/{slug}/{id}', [NewsController::class, 'show'])->name('newsOneWithSlug');
});

Route::prefix('categories')->group(function () {
    Route::get('/', [CategoriesController::class, 'index'])->name('categories');
    Route::get('/{id}', [CategoriesController::class, 'show'])->name('categoryOne');
    Route::get('/{slug}/{id}', [CategoriesController::class, 'show'])->name('categoryOneWithSlug');
});


Route::view('/auth', 'auth');
Route::view('/newsAdd', 'newsAdd');



Route::name('admin.')->prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/', [AdminIndexController::class, 'index'])->name('index');
    Route::get('/test1', [AdminIndexController::class, 'test1'])->name('test1');
    Route::get('/test2', [AdminIndexController::class, 'test2'])->name('test2');
});
