<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'root'])->name('root');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/blog', [ArticlesController::class, 'index'])->name('articles.index');
Route::get('/blog/{article}/{slug?}', [ArticlesController::class, 'show'])->name('articles.show');

Route::resource('projects', ProjectsController::class);
Route::get('/post/{slug}', [ArticlesController::class, 'getDetailBySlug'])->name('post.show');
