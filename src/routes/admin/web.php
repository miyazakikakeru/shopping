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
    Route::post('/home', [AdminController::class, 'adminhome']);
    Route::get('/home', [AdminController::class, 'adminhome']);
    Route::post('/in', [AdminController::class, 'productInsert']);
    Route::post('/del', [AdminController::class, 'productDelete']);
    Route::get('/insert', [AdminController::class, 'adminInsert']);
    Route::get('/delete', [AdminController::class, 'adminDelete']);
});
