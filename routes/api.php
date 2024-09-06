<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


/*Ruta backend para registro y acceso de usuarios Autenticacion JWT*/
Route::controller(AuthController::class)->group(function(){
    Route::post('register','register')->name('auth.register');
    Route::post('login','login')->name('auth.login');    
});

/*Grupo de rutas protegidas*/
Route::middleware('jwt.verify')->group(function () {
    //Todas las rutas en esta parte seran protegidas y es necesario tener un token para su ingreso mediante backend
    Route::get('users', [UserController::class, 'index'])->name('user.index');
});