<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [MainController::class, 'login']);
Route::post('/taskcreate', [MainController::class, 'createTask']);
Route::post('/problems', [MainController::class, 'showProblems']);
Route::get('/problems', function () { return view('index'); });
