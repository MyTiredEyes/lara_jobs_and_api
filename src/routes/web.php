<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\API\V1\PostController;
use App\Http;

Route::get('/', [TaskController::class, 'index'])->name('index');
Route::post('/send', [TaskController::class, 'send'])->name('send');
