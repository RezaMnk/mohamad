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

Route::resource('products', 'ProductController')->except('show');


/*
 * Categories routes
 */
Route::prefix('categories')->name('categories.')->controller('CategoryController')->group(function () {
    //
});

Route::resource('categories', 'CategoryController')->except('create');


/*
 * Attributes routes
 */
Route::prefix('attributes')->name('attributes.')->controller('AttributeController')->group(function () {
    //
});

Route::resource('attributes', 'AttributeController')->except('create');


/*
 * Attributes routes
 */
Route::prefix('feedbacks')->name('feedbacks.')->controller('FeedbackController')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{feedback}', 'show')->name('show');

});



/*
 * Orders routes
 */
Route::prefix('orders')->name('orders.')->controller('OrderController')->group(function () {
    Route::patch('approve', 'approve')->name('approve');

    Route::get('/unapproved', 'unapproved')->name('unapproved');
    Route::get('/priced', 'priced')->name('priced');
    Route::get('/paid', 'paid')->name('paid');
    Route::get('/approved', 'approved')->name('approved');
    Route::get('/canceled', 'canceled')->name('canceled');
});

Route::resource('orders', 'OrderController');


Route::get('/test', function() {

});
