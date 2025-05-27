<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::get('/testing', function () {
    return view("testing");
});

Route::resource('company', CompanyController::class);

Route::get('/user', [SessionController::class, 'index']);
Route::get('/user/create', [SessionController::class, 'create']);
Route::post('/user', [SessionController::class, 'store']);