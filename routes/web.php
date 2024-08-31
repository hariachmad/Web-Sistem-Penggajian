<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/table', function () {
    return view('table');
});

Route::get('signup', function () {
    return view('signup');
});

Route::get('/employee_salary', function () {
    return view('employee_salary');
});

Route::get('/cek', [UserController::class, 'show']);

Route::post('/login', [AuthController::class, 'login']);