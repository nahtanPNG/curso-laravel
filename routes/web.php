<?php

use App\Http\Controllers\Admin\ForumController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::delete('/forum/{id}', [ForumController::class, 'destroy'] )->name('forum.destroy');
Route::put('/forum/{id}', [ForumController::class, 'update'] )->name('forum.update');
Route::get('/forum/{id}/edit', [ForumController::class, 'edit'] )->name('forum.edit');
Route::get('/forum/create', [ForumController::class, 'create'] )->name('forum.create');
Route::get('/forum/{id}', [ForumController::class, 'show'])->name('forum.show');
Route::post('/forum/store', [ForumController::class, 'store'] )->name('forum.store');
Route::get('/forum', [ForumController::class, 'index'])->name('forum.index');

Route::get('contact', [SiteController::class, 'contact'] );
