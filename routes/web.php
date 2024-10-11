<?php

use Illuminate\Support\Facades\Route;
// namespace App\Http\Controllers\formCController;
use App\Http\Controllers\formCController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('sign-in', [App\Http\Controllers\formCController::class, 'show_form'])->name('customer.signin');
Route::post('sign-in-save',[App\Http\Controllers\formCController::class, 'customercreate'])->name('customer.create');
Route::get('customer/edit/{id}',[App\Http\Controllers\formCController::class, 'customeredit'])->name('customer.edit');
Route::get('customer/delete/{id}',[App\Http\Controllers\formCController::class, 'customerdelete'])->name('customer.delete');
Route::post('customer/update/{id}',[App\Http\Controllers\formCController::class, 'customerupdate'])->name('customer.update');
