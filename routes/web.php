<?php

use App\Http\Controllers\Auth\TwoFAController;
use App\Http\Controllers\HomeController;
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
    Route::get('/product', 'product')->name('product');
});


Route::controller(TwoFAController::class)->prefix('2fa')->name('2fa.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'check');
    Route::get('/resend', 'resend')->name('resend');
});





// -------------------------------------------- FOR TEST ONLY --------------------------------------------

Route::get('/date', function() {
    $this_period = \App\Models\User::whereBetween('created_at', [false, now()])->get();
    dd($this_period);
});

Route::get('/logi', function () {
    auth()->loginUsingId(1);
});

Route::get('/test', function () {
    $user = \App\Models\User::create([
        'name' => 'Reza Nadaf',
        'phone' => '09212969916',
        'password' => '12345678',
        'verified' => '1',
        'admin' => '1',
    ]);

    auth()->loginUsingId($user->id);

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
});

Route::get('/fake_products', function () {

    foreach (range(1, 30) as $i) {
        $product = \App\Models\Product::create([
            'name' => "test $i",
            'code' => $i*15,
            'weight' => '150',
            'description' => "Description for test $i",
            'short_description' => "test $i",
            'status' => "1",
        ]);

        $product->gallery()->create(['image' => '/squire-'. $i .'.png']);

        $product->attributes()->sync(['3', '2']);
        $product->categories()->sync(['2']);
    }
});
