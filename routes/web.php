<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/index', 'AdminController@index');
Route::get('/index', [AdminController::class, 'index']);

Route::get('/user_page', [UserController::class, 'user'])->name('user_page');
Route::get('/add_user', [UserController::class, 'create'])->name('add_user');
Route::post('store-user', [UserController::class, 'store'])->name('store-user');