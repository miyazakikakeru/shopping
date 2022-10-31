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
<<<<<<< HEAD

//admin
Route::get('/admin', [ConrtactController::class, 'adminlogin']);
Route::post('/admin', [ConrtactController::class, 'admincheck']);
Route::post('/admin/home', [ConrtactController::class, 'adminhome']); 

=======
>>>>>>> 967afdeb9b3dac6ef0cc2f3f33e5a4b45374e8fa
