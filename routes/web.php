<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/search', [HomeController::class, 'index'])->name('dashboard.index');
    Route::get('/chat/{id}/', [HomeController::class, 'chat'])->name('chat');
    Route::get('create-mensaje/{id}/{message}/', [HomeController::class, 'createMensaje'])->name('create-mensaje');
});
