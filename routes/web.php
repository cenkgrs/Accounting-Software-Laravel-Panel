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

// Auth Routes //
Route::match(['GET', 'POST'], 'login', 'Auth\UserController@login')->name('login');
Route::post('logout', 'Auth\UserController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'PagesController@dashboard')->name('dashboard');
    Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard');
    Route::match(['GET', 'POST'], '/products', 'Products\ProductsController@index')->name('products');
    Route::match(['GET', 'POST'], '/bookings', 'Products\BookingsController@index')->name('bookings');
});



