<?php

use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'adminlogin']);
    Route::post('/check', [AdminController::class, 'check']);
    Route::post('/home', [AdminController::class, 'adminhome'])->middleware('AdminLogin');
    Route::get('/home', [AdminController::class, 'adminhome'])->middleware('AdminLogin');
    Route::post('/in', [AdminController::class, 'productInsert'])->middleware('AdminLogin');
    Route::post('/del', [AdminController::class, 'productDelete'])->middleware('AdminLogin');
    Route::get('/insert', [AdminController::class, 'adminInsert'])->middleware('AdminLogin');
    Route::get('/delete', [AdminController::class, 'adminDelete'])->middleware('AdminLogin');
    Route::get('/adminIn', [AdminController::class, 'adminIn'])->middleware('AdminLogin');
    Route::get('/adminDel', [AdminController::class, 'adminDel'])->middleware('AdminLogin');
    Route::post('/adminInsert', [AdminController::class, 'insert'])->middleware('AdminLogin');
    Route::post('/adminDelete', [AdminController::class, 'delete'])->middleware('AdminLogin');


});
