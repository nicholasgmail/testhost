<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

Route::get('/', [MoviesController::class, 'index'])->name('index');
Route::get('/movies/{movie}', [MoviesController::class, 'show'])->name('show');
