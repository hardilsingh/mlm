<?php

use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pending-verification', function () {
    return view('admin.pending-verification.msg');
});

Auth::routes();



Route::group(['middleware' => ['is_verified']], function () {
    Route::get('/home', function () {
        return view('admin.dashboard.index');
    });
    Route::resource('/investors', 'investorsController');
    Route::resource('/payments', 'paymentsController');
    Route::resource('/treeView', 'treeViewController');
    Route::resource('/profile', 'profileController');
    Route::resource('/verify-users', 'verifyUsersController');
});
