<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['verify' => true]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware("verified");
Route::get('register/customer', [RegisterController::class, 'registerCustomer'])->name('register.customer');
Route::post('register/customer', [RegisterController::class, 'registerCustomerSubmit'])->name('register.customer.submit');
