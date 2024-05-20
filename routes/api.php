<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use app\models\berita;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\SearchController;


//welcome page route
Route::get('/', [WelcomeController::class, 'welcome'])->name('headline.show');  

// Route for di
Route::resource('berita', WelcomeController::class);

// Route for individual news
Route::get('news/{id}', [WelcomeController::class, 'show'])->name('news.show'); 

//Route for create news
Route::get('create', [CreateController::class, 'index'])->name('create.show');
Route::post('create', [CreateController::class, 'store'])->name('create.store');

//Route for edit page
Route::get('edit/{id}', [EditController::class, 'show'])->name('edit.show');
Route::post('edit/{id}', [EditController::class, 'update'])->name('edit.update');

//route for editing picked article
Route::get('search', [SearchController::class, 'index'])->name('search.show');
Route::post('search', [SearchController::class, 'store'])->name('search.run');



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


