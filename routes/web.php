<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index']);
Route::get('/tasks', [TaskController::class, 'allTasks']);
Route::get('/profile', [TaskController::class, 'profile']);
Route::get('/about', [TaskController::class, 'about']);