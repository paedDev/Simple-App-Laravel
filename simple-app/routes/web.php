<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::get('/testing', function () {
    return view("testing");
});

// Route::resource('company', CompanyController::class);
//the resource there is the same with the code below
Route::get('/company', [CompanyController::class, 'index']);
Route::get('/company/create', [CompanyController::class, 'create']);
Route::post('/company', [CompanyController::class, 'store']);
Route::get('/company/{company}', [CompanyController::class, 'show']);
Route::get('/company/{company}/edit', [CompanyController::class, 'edit']);
Route::patch('/company/{company}', [CompanyController::class, 'update']);
Route::delete('/company/{company}', [CompanyController::class, 'destroy']);





Route::get('/user', [SessionController::class, 'index']);
Route::get('/user/create', [SessionController::class, 'create']);
Route::post('/user', [SessionController::class, 'store']);
