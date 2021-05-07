<?php

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'admin']], function () {
    Route::resource('/category', App\Http\Controllers\Admin\CategoryController::class);

    Route::resource('/product', App\Http\Controllers\Admin\ProductController::class);
});

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile')->middleware('auth');


Route::get('/category/{id}', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');

Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('product');

Route::post('/product', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store')->middleware('auth');

Route::get('/whistlist', [App\Http\Controllers\WhistlistController::class, 'index'])->name('whistlist.index');

Route::delete('/whistlist', [App\Http\Controllers\WhistlistController::class, 'destroy'])->name('whistlist.destroy');
