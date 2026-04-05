<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

// Public Controller
Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('article.show');

// Article Corntroller Index
Route::get('/index/article', [ArticleController::class, 'index'])->name('article.index');

// Article Controller Create, Edit, Destroy
Route::get('/create/article', [ArticleController::class, 'create'])->name('article.create')->middleware('auth');

Route::get('/article/edit/{article}', [ArticleController::class, 'edit'] )->name('article.edit')->middleware('auth');

Route::delete('article/destroy/{article}', [ArticleController::class, 'destroy'])->name('article.destroy')->middleware('auth');

// Article Controller Store, Update
Route::post('/store/article', [ArticleController::class, 'store'])->name('article.store')->middleware('auth');

Route::put('/article/update/{article}',[ArticleController::class, 'update'])->name('article.update')->middleware('auth');







