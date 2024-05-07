<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\models\berita;
use App\Http\Controllers\TaskController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


