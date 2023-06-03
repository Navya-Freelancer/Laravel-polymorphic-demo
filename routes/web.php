<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Employee Routes
Route::get('/employees', [\App\Http\Controllers\EmployeeController::class, 'list'])->name('employees');
Route::get('/employees/{id}', [\App\Http\Controllers\EmployeeController::class, 'show'])->name('getEmployee');

// Customer Routes
Route::get('/customers', [\App\Http\Controllers\CustomerController::class, 'list'])->name('customers');
Route::get('/customers/{id}', [\App\Http\Controllers\CustomerController::class, 'show'])->name('getCustomer');
