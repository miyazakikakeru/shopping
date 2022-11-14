<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UserController::class, 'index']);
Route::post('/check', [UserController::class, 'check']);
Route::post('/InUser', [UserController::class, 'InUser']);
Route::post('/register', [UserController::class, 'Register']);
Route::get('/register', [UserController::class, 'Register']);
Route::post('/home', [UserController::class, 'home'])->middleware('UserLogin'); 
Route::get('/home', [UserController::class, 'home'])->middleware('UserLogin'); 
Route::post('/home/detail', [UserController::class, 'detail'])->middleware('UserLogin');//詳細
Route::post('/home/confirm', [UserController::class, 'confirm'])->middleware('UserLogin');

