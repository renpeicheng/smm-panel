<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes(['register' => true]);

// Route::group(['middleware' => ['auth', 'roles:admin,manager']], function () {
    Route::get('/dashboard', 'DashboardController')->name('dashboard');
    Route::get('/new-order', 'DashboardController@newOrder');
    Route::get('/order-history', 'DashboardController@orderHistory');
    Route::get('/price-list', 'DashboardController@priceList');
    Route::get('/topup', 'DashboardController@topup');
    Route::get('/topup-history', 'DashboardController@topupHistory');
    Route::get('/open-ticket', 'DashboardController@openTicket');
    Route::get('/faq', 'DashboardController@faq');
// });
