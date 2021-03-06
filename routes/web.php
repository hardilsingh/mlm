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
Route::get('/',function () {
    return view('welcome');
});

Route::get('/pending-verification', function () {
    return view('admin.pending-verification.msg');
});

Auth::routes();



Route::group(['middleware' => ['is_verified']], function () {
    Route::resource('/home', 'dashboardController');
    Route::resource('/investors', 'investorsController');
    Route::resource('/payments', 'paymentsController');
    Route::get('/ajaxRequest' , 'treeViewController@loadtree');
    Route::resource('/treeView', 'treeViewController');
    Route::get('/verifyUser' , 'profileController@verifyUser');
    Route::get('/updateUserPassword' , 'profileController@updatePassword');
    Route::resource('/profile', 'profileController');
    Route::resource('/verify-users', 'verifyUsersController');
    Route::get('/transaction-history', 'RedeemPointsController@transactionHistory' );
    Route::resource('/redeem-points', 'RedeemPointsController');
    Route::get('/show-target', 'TargetController@display' );
    Route::resource('/set-target', 'TargetController');
    Route::resource('/requests', 'RequestsController');
    Route::resource('/bugs', 'IssuesController');
});
