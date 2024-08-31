<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataPegawaiController;

Route::post('/test', [DataPegawaiController::class, 'regist']);
Route::delete('/delete/{nip}', [DataPegawaiController::class, 'delete']);
Route::get('/employee',[DataPegawaiController::class,'index']);
Route::post('registUser',[UserController::class,'regist']);
