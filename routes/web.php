<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Models\Post;
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
    $posts=Post::all();
    return view('layouts.app',compact('posts'));
});

Route::get('register',[AuthController::class,'register'])->name('register');
Route::post('/store',[AuthController::class,'store'])->name('store');
Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('/authenticate', [AuthController::class,'authenticate'])->name('authenticate');
Route::get('create-post',[AuthController::class,'create_post'])->name('create_post');
Route::get('edit-post',[AuthController::class,'edit_post'])->name('edit_post');
Route::get('show-post',[AuthController::class,'show_post'])->name('show_post');
Route::get('manage-post',[AuthController::class,'manage_post'])->name('manage_post');

Route::resource('post',PostController::class);

Route::post('/logout', [AuthController::class,'logout'])->name('logout');

Route::get('/search',[PostController::class,'search']);