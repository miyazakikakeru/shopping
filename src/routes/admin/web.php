<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DBController;


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

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'adminlogin']);
    Route::post('/check', [AdminController::class, 'check']);
    Route::post('/home', [AdminController::class, 'adminhome'])->middleware('AdminLogin');
    Route::get('/home', [AdminController::class, 'adminhome'])->middleware('AdminLogin');
    Route::get('/delete', [AdminController::class, 'adminDelete'])->middleware('AdminLogin');
    Route::get('/adminIn', [AdminController::class, 'adminIn'])->middleware('AdminLogin');
    Route::get('/adminDel', [AdminController::class, 'adminDel'])->middleware('AdminLogin');
    Route::get('/insert', [AdminController::class, 'adminInsert'])->middleware('AdminLogin');

//DBController
    Route::post('/in', [DBController::class, 'InProduct'])->middleware('AdminLogin');
    Route::post('/del', [DBController::class, 'DelProduct'])->middleware('AdminLogin');

    Route::post('/adminInsert', [DBController::class, 'InAdmin'])->middleware('AdminLogin');
    Route::post('/adminDelete', [DBController::class, 'DelAdmin'])->middleware('AdminLogin');



});
