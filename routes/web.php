<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\CommentController;

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

Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Reference: ChatGPT
Route::get('/profile/{user}', function () {
    return view('auth.show', ['user' => Auth::user()]);
})->middleware('auth')->name('profile');

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [ComicController::class, 'index'])->name('comics.index');
Route::get('/comics/{id}', [ComicController::class, 'show'])->name('comics.show');
Route::get('/create', [ComicController::class, 'create'])->name('comics.create');

// Create code
Route::post('/comics/{comic}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::post('/create', [ComicController::class, 'store'])->name('comics.store');