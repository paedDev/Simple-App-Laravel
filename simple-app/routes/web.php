<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view("welcome");
});
Route::get('/testing', function () {
    return view("testing");
});

Route::resource('company', CompanyController::class);
Route::get('/', [UserController::class, 'index']);
