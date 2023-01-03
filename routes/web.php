<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'root'])->name('root');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/sitemap', [PagesController::class, 'sitemap'])->name('sitemap');

Route::get('/blog', [ArticlesController::class, 'index'])->name('articles.index');
Route::get('/blog/{article}/{slug?}', [ArticlesController::class, 'show'])->name('articles.show');

Route::get('links', [LinksController::class, 'index'])->name('links.index');
Route::post('links', [LinksController::class, 'store'])->name('links.store');

Route::resource('projects', ProjectsController::class);

Route::feeds();
