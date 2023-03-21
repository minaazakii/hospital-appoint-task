<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\client\Dashboard\AppointmentController;

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

//Auth Routes
    Route::GET('/', [LoginController::class, 'index'])->name('login.index');
    Route::GET('/register', [RegisterController::class, 'index'])->name('register.index');


Route::POST('/', [LoginController::class, 'login'])->name('login');
Route::POST('/logout', [LoginController::class, 'logout'])->name('logout');
Route::POST('/register', [RegisterController::class, 'register'])->name('register');

//Client Routes
Route::group(['middleware' => 'auth', 'prefix' => 'client', 'as' => 'client.'], function () {
    Route::GET('/appointment/search', [AppointmentController::class, 'searchAppointment'])->name('appointment.search');
    Route::resource('appointment', AppointmentController::class);
});
