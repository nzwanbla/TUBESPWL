<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;

Route::get('/', [WelcomeController::class, 'welcome']); //welcome page route

Route::resource('berita', WelcomeController::class);
Route::get('news/{id}', [WelcomeController::class, 'show'])->name('news.show'); // Route for individual news