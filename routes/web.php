<?php

use App\Http\Controllers\Auth\TwoFAController;
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
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::controller(TwoFAController::class)->prefix('2fa')->name('2fa.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'check');
    Route::get('/resend', 'resend')->name('resend');
});


Route::get('/img', function () {
   return dd(\Illuminate\Support\Facades\Storage::disk('products')->exists('/squire-65.png'));
   return dd(\Illuminate\Support\Facades\Storage::disk('products')->files(''));
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

Route::Get('/fake_products', function () {

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
