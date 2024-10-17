<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeController::class);

// TESTES DIVERSOS
Route::get('about', [AboutController::class , 'about']);
Route::get('about/team', [AboutController::class , 'team']);
Route::get('about/teste', [AboutController::class , 'teste']);

