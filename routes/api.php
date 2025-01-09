<?php

use Illuminate\Support\Facades\Route;
use MyVendor\AuthPackage\Http\Controllers\AuthController;

Route::post('auth/login', [AuthController::class, 'login']);
Route::post('auth/register', [AuthController::class, 'register']);
Route::post('auth/logout', [AuthController::class, 'logout']);
