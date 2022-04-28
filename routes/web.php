<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MyUserController;
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
    return view('post.posts');
});

Route::resource('user', MyUserController::class);
Route::resource('posts', PostController::class);
Route::get('/admin', [AdminController::class,'index'])->name('admin');
Route::get('/admin/{slug}', [AdminController::class,'show'])->name('admin.detail');
Auth::routes();