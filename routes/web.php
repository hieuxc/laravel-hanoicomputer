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
Auth::routes();

Route::get('/', function () {
    return view('front-end.index');
});

// Route::get('/detail', function () {
//     return view('front-end.product-detail');
// });

Route::post('logout', 'Auth\LoginController@userLogout')->name('logout');

Route::prefix('user')->group(function () {
    Route::get('/', 'UserController@index')->name('user.index');
});

Route::prefix('cart')->group(function () {
    Route::get('/', 'CartController@index')->name('cart.index');
    Route::get('add/{product_id}', 'CartController@add')->name('cart.add');
});

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('login', 'Auth\AdminLoginController@showAdminLoginForm')->name('admin.login');
    Route::post('login', 'Auth\AdminLoginController@adminLogin')->name('admin.login');
    Route::post('logout', 'Auth\AdminLoginController@adminLogout')->name('admin.logout');

    Route::resource('products', 'ProductController')->except(['create']);
    Route::post('products/create', 'ProductController@create')->name('products.create');

    Route::resource('categories', 'CategoryController');
    Route::resource('product-types', 'ProductTypeController');
    Route::resource('product-types/{product_type_id}/specifications', 'SpecificationController');
    Route::resource('product-types/{product_type_id}/filters', 'FilterController');
    Route::resource('filters/{filter_id}/filter-options', 'FilterOptionController');
});

Route::get('/{key}', 'HomeController@index');
