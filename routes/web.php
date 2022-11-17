<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrderController;





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

Route::get('/', function () {
    return view('index');
});

Route::post('/login',[LoginController::class,'checklogin']);
Route::get('/register',[UserController::class,'register']);
Route::get('/show',[LoginController::class,'show']);
Route::resource('products',ProductController::class);
Route::resource('employees',EmployeeController::class);
Route::resource('orders',OrderController::class);
Route::get('/logout',[LoginController::class,'logout']);
Route::get('/store',[UserController::class,'store']);
Route::get('/set',[EmployeeController::class,'set']);
Route::get('/reset',[EmployeeController::class,'reset']);



