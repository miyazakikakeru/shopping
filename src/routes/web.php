<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\DBController;

Route::get('/', [UserController::class, 'index']);
Route::post('/check', [UserController::class, 'UserLogin']);
Route::post('/UserLogout',[UserController::class, 'UserLogout']);
Route::post('/register', [UserController::class, 'Register']);
Route::get('/register', [UserController::class, 'Register']);

Route::post('/home', [UserController::class, 'home'])->middleware('UserLogin'); 
Route::get('/home', [UserController::class, 'home'])->middleware('UserLogin'); 
Route::post('/home/detail', [UserController::class, 'detail'])->middleware('UserLogin');//詳細
Route::post('/target', [UserController::class, 'target'])->middleware('UserLogin');
Route::post('/UserProfile', [UserController::class, 'UserProfile'])->middleware('UserLogin');
Route::get('/UserProfile/NewName', [UserController::class, 'NewName'])->middleware('UserLogin');
Route::get('/UserProfile/NewPassword', [UserController::class, 'NewPassword'])->middleware('UserLogin');

//DBController
Route::post('/InUser', [DBController::class, 'InUser']);
Route::post('delUser', [DBController::class, 'DelUser']);
Route::post('/home/confirm', [DBController::class, 'InArchive'])->middleware('UserLogin');





