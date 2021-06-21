<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ApiController;

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

Route::get('/inscription', [UserController::class, 'register'])->name('register');
Route::get('/connexion', [UserController::class, 'connexion'])->name('connexion');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/nouveau-kine', [UserController::class, 'addKine'])->name('user.addKine');
Route::post('/create-kine', [UserController::class, 'createKine'])->name('user.createKine');
Route::get('/backoffice', [UserController::class, 'backoffice'])->name('user.backoffice');
Route::get('/calendrier/{id}', [UserController::class, 'calendar'])->name('user.calendar');
Route::get('/modifier/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::patch('/user/update/{id}', [UserController::class, 'update'])->name('user.update');

Route::get('/rendez-vous', [AppointmentController::class, 'create'])->name('appointment');

Route::get('/api/get-user/{id}', [ApiController::class, 'getUser'])->name('api.getUser');