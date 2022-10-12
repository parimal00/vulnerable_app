<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::view('test','test');
Route::post('/items',[ItemController::class,'store']);
Route::get('items',[ItemController::class,'index']);
Route::get('/users',[UserController::class,'index']);
Route::post('/users',[UserController::class,'store'])->name('users.store');
Route::get('/update',[UserController::class,'update']);
