<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bankAccountController;

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

Route::get('/conta',[bankAccountController::class, 'index'])->name('bankAccount');
Route::get('/conta/create',[bankAccountController::class, 'create'])->name('bankAccountCreate');
Route::get('/conta/update',[bankAccountController::class, 'update'])->name('bankAccountUpdate');

Route::get('/home', function () {
    return view('home');
})->name('home');
