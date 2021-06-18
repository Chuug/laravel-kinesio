<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
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

Route::get('/', [AppController::class, 'index'])->name('index');

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/connexion', [UserController::class, 'connexion'])->name('connexion');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::post('/login', [UserController::class, 'login'])->name('user.login');