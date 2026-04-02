<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

// Public Controller
Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/create/article', [ArticleController::class, 'create'])->name('article.create');
Route::post('/store/article', [ArticleController::class, 'store'])->name('article.store');
Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/index/article', [ArticleController::class, 'index'])->name('article.index');
