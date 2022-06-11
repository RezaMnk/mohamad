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
    return view('welcome');
});

Route::get('/', 'DashboardController@index')->name('index');


/*
 * Users routes
 */
Route::prefix('users')->name('users.')->controller('UserController')->group(function () {
    Route::get('/vip', 'vip_users')->name('vip');
    Route::get('/unapproved', 'unapproved')->name('unapproved');
});

Route::resource('users', 'UserController')->except('show');


/*
 * Products routes
 */
Route::prefix('products')->name('products.')->controller('ProductController')->group(function () {
    //
});

Route::resource('products', 'ProductController');


/*
 * Categories routes
 */
Route::prefix('categories')->name('categories.')->controller('ProductController')->group(function () {
    //
});

Route::resource('categories', 'CategoryController');


/*
 * Orders routes
 */
Route::prefix('orders')->name('orders.')->controller('OrderController')->group(function () {
    //
});

Route::resource('orders', 'OrderController');
