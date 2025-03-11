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

/* grouping of middleware*/

Route::group(['middleware'=>'user_auth'],function(){ //user_auth is the registred middleware name in kernel
    Route::post('sign-in-save',[App\Http\Controllers\formCController::class, 'customercreate'])->name('customer.create');
    Route::get('customer/edit/{id}',[App\Http\Controllers\formCController::class, 'customeredit'])->name('customer.edit');
    Route::get('customer/delete/{id}',[App\Http\Controllers\formCController::class, 'customerdelete'])->name('customer.delete');
    Route::post('customer/update/{id}',[App\Http\Controllers\formCController::class, 'customerupdate'])->name('customer.update');
});

/* seperatly calling middleware for a route
    Route::get('customer/edit/{id}',[App\Http\Controllers\formCController::class, 'customeredit'])->name('customer.edit')->middleware('user_auth');
*/
Route::get('logIn', [App\Http\Controllers\loginController::class, 'login'])->name('login');
Route::post('loginUser',[App\Http\controllers\loginController::class,'logingUser'])->name('loginUser');
Route::get('userlist', [App\Http\Controllers\loginController::class, 'userlist'])->name('userlist');
Route::get('userAddress/{id}', [App\Http\Controllers\loginController::class, 'userAddressList'])->name('userAddresslist');
Route::get('userComments/{id}', [App\Http\Controllers\loginController::class, 'userComments'])->name('userComments');
Route::get('profile/{id}  ', [App\Http\Controllers\loginController::class, 'profile'])->name('profile'); //->middleware('user_auth');
Route::get('logout', [App\Http\Controllers\loginController::class, 'logout'])->name('logout');