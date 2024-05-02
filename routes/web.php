<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;

Route::get('/', [WelcomeController::class, 'welcome']); //welcome page route
Route::get('/login', [LoginController::class, 'login']); //login page route
Route::get('/signup', [SignupController::class, 'welcome']); //signup page route