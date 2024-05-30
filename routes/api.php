<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use app\models\berita;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


//welcome page route
Route::get('/', [WelcomeController::class, 'welcome'])->name('headline.show');  

// Route for di
Route::resource('berita', WelcomeController::class);

// Route for individual news
Route::get('news/{id}', [WelcomeController::class, 'show'])->name('news.show'); 
 


//Route For Login
Route::get('login', [LoginController::class, 'index'])->name('login.show');
Route::post('login', [LoginController::class, 'store'])->name('login.run');


//Route For Register
Route::get('register', [RegisterController::class, 'index'])->name('register.show');
Route::post('register', [RegisterController::class, 'store'])->name('register.run');


Route::middleware('auth:sanctum')->group(function () {
    //Route for create news
    Route::get('create', [CreateController::class, 'index'])->name('create.show');
    Route::post('create', [CreateController::class, 'store'])->name('create.store');

    //Route for edit page
    Route::get('edit/{id}', [EditController::class, 'show'])->name('edit.show');
    Route::post('edit/{id}', [EditController::class, 'update'])->name('edit.update');
    Route::delete('edit/{id}', [EditController::class, 'destroy'])->name('edit.delete');

    //route for editing picked article
    Route::get('search', [SearchController::class, 'index'])->name('search.show');
    Route::post('search', [SearchController::class, 'store'])->name('search.run');
});
 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


