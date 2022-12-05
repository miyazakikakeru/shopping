<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DBController;

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'login']);
    Route::post('/check', [AdminController::class, 'check']);
//admin画面ヘッダー（ナブバー）
    Route::post('/home', [AdminController::class, 'home'])->middleware('AdminLogin');
    Route::get('/home', [AdminController::class, 'home'])->middleware('AdminLogin');
    Route::get('/insert', [AdminController::class, 'InProduct'])->middleware('AdminLogin');
    Route::get('/delete', [AdminController::class, 'DelProduct'])->middleware('AdminLogin');
    Route::get('/adminIn', [AdminController::class, 'InAdmin'])->middleware('AdminLogin');
    Route::get('/adminDel', [AdminController::class, 'DelAdmin'])->middleware('AdminLogin');
    Route::get('/archiveView', [AdminController::class, 'archiveView'])->middleware('AdminLogin');
//DBController
    Route::post('/in', [DBController::class, 'InProduct'])->middleware('AdminLogin');
    Route::post('/del', [DBController::class, 'DelProduct'])->middleware('AdminLogin');
    Route::post('/adminInsert', [DBController::class, 'InAdmin'])->middleware('AdminLogin');
    Route::post('/adminDelete', [DBController::class, 'DelAdmin'])->middleware('AdminLogin');
});
