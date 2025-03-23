<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Auth\AuthController;

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

Route::get('/', [PagesController::class, 'index']);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Basic pages routes
Route::get('/about', [PagesController::class,'about'])->name('layouts.about');
Route::get('/contact', [PagesController::class,'contact'])->name('layouts.contact');

// Edit profile view routes
Route::get('profile/{user}', [AuthController::class, 'edit'])->name('edit');
Route::put('profile/{user}', [AuthController::class, 'update'])->name('update');


Route::get('/', [ComicController::class, 'index'])->name('comics.index');
Route::get('/comics/{id}', [ComicController::class, 'show'])->name('comics.show');
Route::get('/create', [ComicController::class, 'create'])->name('comics.create');

// Create code
Route::post('/comics/{comic}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::post('/create', [ComicController::class, 'store'])->name('comics.store');