<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/* ruta de inicio*/
Route::get('/', function () {
    return view('index');
})->name('index');;


/*Rutas de Empleados y Departamentos*/ 
Route::resource('employees', EmployeeController::class)->except(['show']);
Route::resource('departments', DepartmentController::class)->except(['show']);


/*Rutas para frontend de form registro y acceso*/
Route::get('register', [AuthController::class, 'showRegister'])->name('auth.showRegister');
Route::get('login', [AuthController::class, 'showLogin'])->name('auth.showLogin');




