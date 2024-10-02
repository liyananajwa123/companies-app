<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyDetailController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('companies', CompanyDetailController::class);
});
