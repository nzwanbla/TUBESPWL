<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\usermanagement;


Route::get('/dashboard',  [dashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/usermanagement',  [userManagement::class, 'index'])->middleware(['auth', 'verified'])->name('usermanagement');

Route::get('create', [CreateController::class, 'index'])->middleware(['auth', 'verified'])->name('create');

Route::delete('/news/{id}/', [NewsController::class, 'destroyKomentar'])->name('news.komentar.destroy');

Route::put('/news/{id}/', [NewsController::class, 'updateKomentar'])->name('news.komentar.update'); 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
