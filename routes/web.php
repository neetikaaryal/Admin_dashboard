<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontendController\PortfolioController;
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


Route::get('/', [AdminController::class, 'index']);

Route::get('/user_page', [UserController::class, 'user'])->name('user_page');
Route::get('/add_user', [UserController::class, 'create'])->name('add_user');
Route::post('store-user', [UserController::class, 'store'])->name('store-user');
Route::get('/delete-user/{id}', [UserController::class, 'delete'])->name('delete-user');
Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('edit-user');

//......portfolio...//
Route::get('frontend/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');
Route::get('frontend/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::get('frontend/experience', [PortfolioController::class, 'experience'])->name('experience');
Route::get('frontend/projects', [PortfolioController::class, 'projects'])->name('projects');