<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConrtactController;

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
Route::post('/home/search', [ConrtactController::class, 'search']);
Route::post('/home/search/detail', [ConrtactController::class, 'detail']);//詳細

Route::get('/admin', [ConrtactController::class, 'adminlogin']);
Route::post('/admin/home', [ConrtactController::class, 'adminhome']);
Route::get('/admin/home', [ConrtactController::class, 'adminhome']);
Route::post('/admin/in', [ConrtactController::class, 'productInsert']);
Route::post('/admin/del', [ConrtactController::class, 'productDelete']);
Route::get('/admin/insert', [ConrtactController::class, 'adminInsert']);
Route::get('/admin/delete', [ConrtactController::class, 'adminDelete']);

