<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Auth\TwoFAController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
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

Auth::routes();


Route::controller(HomeController::class)->name('home.')->group(function () {
    Route::get('/', 'index')->name('index');

    Route::get('/shop', 'shop')->name('shop');
    Route::get('/product/{product}', 'product')->name('product');


    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/feedback', 'feedback')->name('feedback');
    Route::get('/guide', 'guide')->name('guide');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/policy', 'policy')->name('policy');

    /*
     * Only if user is logged in
     */
    Route::middleware('auth')->group(function () {
        Route::get('/profile', 'profile')->name('profile');
        Route::get('/wishlist', 'wishlist')->name('wishlist');
        Route::get('/cart', 'cart')->name('cart');
    });
});



Route::controller(CartController::class)->prefix('cart')->name('cart.')->group(function () {
    Route::post('add/{product}', 'add')->name('add');
    Route::get('remove/{product}', 'remove')->name('remove');
});

Route::controller(OrderController::class)->prefix('order')->name('order.')->group(function () {
    Route::post('create', 'create')->name('create');
    Route::post('cancel', 'cancel')->name('cancel');
    Route::post('reorder', 'reorder')->name('reorder');
    Route::post('upload-receipt', 'upload_receipt')->name('upload-receipt');
    Route::get('invoice/{order}', 'invoice')->name('invoice');
});


Route::controller(TwoFAController::class)->prefix('2fa')->name('2fa.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'check');
    Route::get('/resend', 'resend')->name('resend');
});

Route::post('/api/update-cart', function () {
    return ('test');
})->name('update-cart');


/*
 * --------------------------------- Api section ---------------------------------
 */
Route::middleware('auth')->controller(ApiController::class)->prefix('api')->name('api.')->group(function () {
    Route::post('/update-cart', 'update_cart')->name('update-cart');
});


/*
 * --------------------------------- Private storage section ---------------------------------
 */
Route::get('uploads/receipt/{order}', 'StorageController@receipt')->name('uploads.receipt.show');
Route::post('uploads/receipt/remove', 'StorageController@remove_receipt')->name('uploads.receipt.remove');



// -------------------------------------------- FOR TEST ONLY --------------------------------------------
Route::get('/force_login', function () {
    auth()->loginUsingId(1, true);
});

Route::get('/produce', function () {
    $user = \App\Models\User::create([
        'name' => 'Reza Nadaf',
        'phone' => '09212969916',
        'password' => '12345678',
        'verified' => '1',
        'admin' => '1',
    ]);

    auth()->loginUsingId($user->id, true);

    \App\Models\Category::create([
        'name' => 'دستبند',
        'parent_id' => '0',
    ]);

    \App\Models\Category::create([
        'name' => 'دستبند 1',
        'parent_id' => '1',
    ]);

    \App\Models\Category::create([
        'name' => 'دستبند 2',
        'parent_id' => '1',
    ]);

    \App\Models\Category::create([
        'name' => 'گردنبند',
        'parent_id' => '0',
    ]);

    \App\Models\Attribute::create([
        'name' => 'رنگ',
        'parent_id' => '0',
    ]);

    \App\Models\Attribute::create([
        'name' => 'صورتی',
        'parent_id' => '1',
    ]);

    \App\Models\Attribute::create([
        'name' => 'طلایی',
        'parent_id' => '1',
    ]);

    \App\Models\Attribute::create([
        'name' => 'مشکی',
        'parent_id' => '1',
    ]);

    foreach (range(1, 40) as $i) {
        $product = \App\Models\Product::create([
            'name' => "test $i",
            'code' => $i*15,
            'weight' => '150',
            'description' => "Description for test $i",
            'short_description' => "test $i",
            'status' => "1",
        ]);

        $product->gallery()->create(['image' => '/squire-'. $i .'.png', 'main' => true]);
        $product->gallery()->create(['image' => '/squire-'. $i+10 .'.png']);
        $product->gallery()->create(['image' => '/squire-'. $i+15 .'.png']);

        $product->attributes()->sync(['3', '2']);
        $product->categories()->sync(['2']);
    }
});

Route::get('/fake_products', function () {

    foreach (range(1, 40) as $i) {
        $product = \App\Models\Product::create([
            'name' => "test $i",
            'code' => $i*15,
            'weight' => '150',
            'description' => "Description for test $i",
            'short_description' => "test $i",
            'status' => "1",
        ]);

        $product->gallery()->create(['image' => '/squire-'. $i .'.png', 'main' => true]);
        $product->gallery()->create(['image' => '/squire-'. $i+10 .'.png']);
        $product->gallery()->create(['image' => '/squire-'. $i+15 .'.png']);

        $product->attributes()->sync(['3', '2']);
        $product->categories()->sync(['2']);
    }
});

Route::get('test', function () {
    $product = \App\Models\Product::find(39);
    cart()->remove($product);
})->name('test');

Route::get('ses', function () {
    dd(session()->all());
});
