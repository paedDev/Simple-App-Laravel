<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/testing', function () {
    return view("testing");
});

// Route::resource('company', CompanyController::class);
//the resource there is the same with the code below
Route::get('/company', [CompanyController::class, 'index']);
Route::get('/company/create', [CompanyController::class, 'create']);
Route::middleware(['auth'])->group(function () {
    Route::post('/company', [CompanyController::class, 'store']);
    Route::get('/company/{company}', [CompanyController::class, 'show']);
    Route::get('/company/{company}/edit', [CompanyController::class, 'edit']);
    Route::patch('/company/{company}', [CompanyController::class, 'update']);
    Route::delete('/company/{company}', [CompanyController::class, 'destroy']);
});



// Auth for register here
Route::get("/register", [RegisterController::class, 'create']);
Route::post("/register", [RegisterController::class, 'store']);


// Auth for login here
Route::get("/login", [SessionController::class, 'create'])->name('login');
Route::post("/login", [SessionController::class, 'store']);
Route::delete("/logout", [SessionController::class, 'destroy']);
Route::get('/search', SearchController::class)->name('search');
Route::middleware(['auth'])->group(function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/create', [UserController::class, 'create']);
    Route::post('/user', [UserController::class, 'store']);
    Route::get('/user/{user}', [UserController::class, 'show']);
    Route::delete('/user/{user}', [UserController::class, 'destroy']);
});
