<?php

use App\Http\Controllers\Admin\ForumController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::post('/forum/store', [ForumController::class, 'store'] )->name('forum.store');
Route::get('/forum/create', [ForumController::class, 'create'] )->name('forum.create');
Route::get('/forum', [ForumController::class, 'index'])->name('forum.index');

Route::get('contact', [SiteController::class, 'contact'] );
