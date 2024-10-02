<?php

use App\Livewire\PostMain;
use App\Livewire\WebBlog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('blog',WebBlog::class)->name('blog');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/noticias',PostMain::class)->name('noticias');
});
