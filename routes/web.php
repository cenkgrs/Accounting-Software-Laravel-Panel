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

Route::get('/', function () {
    return view('home.index');
});

Route::match(['GET', 'POST'], '/products', 'Products\ProductsController@index')->name('products');
Route::match(['GET', 'POST'], '/bookşngs', 'Bookings\BookingsController@index')->name('bookings');


