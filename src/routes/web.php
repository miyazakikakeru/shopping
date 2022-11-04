<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConrtactController;
use App\Http\Controllers\AdminController;


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

Route::get('/', [ConrtactController::class, 'index']);
Route::post('/', [ConrtactController::class, 'check']);
Route::post('/home', [ConrtactController::class, 'home']); 
Route::post('/home/detail', [ConrtactController::class, 'detail']);//詳細
Route::post('/home/confirm', [ConrtactController::class, 'confirm']);

Route::get('/admin', [AdminController::class, 'adminlogin']);
Route::post('/admin/home', [AdminController::class, 'adminhome']);
Route::get('/admin/home', [AdminController::class, 'adminhome']);
Route::post('/admin/in', [AdminController::class, 'productInsert']);
Route::post('/admin/del', [AdminController::class, 'productDelete']);
Route::get('/admin/insert', [AdminController::class, 'adminInsert']);
Route::get('/admin/delete', [AdminController::class, 'adminDelete']);

