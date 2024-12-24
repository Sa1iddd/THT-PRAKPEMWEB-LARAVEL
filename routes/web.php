<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationSessionController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [AuthenticationSessionController::class, 'index']);

Route::get('/blog', function () {
    return view('auth.blog');
});

Route::get('/login', [AuthenticationSessionController::class, 'create'])->name('login');

Route::post('/login', 
[AuthenticationSessionController::class, 'processLogin'])->name('login.process');;

Route::get('/blog', [AuthenticationSessionController::class, 'showBlog'])->name('blog');

