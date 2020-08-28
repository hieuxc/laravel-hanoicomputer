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

Route::prefix('admin')->group(function(){
    Route::get('/', [
        'as' => 'admin.index',
        'uses' => 'AdminController@index'
    ]);
    
    Route::resource('categories', 'CategoryController');
    // Route::prefix('categories')->group(function(){
    //     Route::get('/', [
    //         'as' => 'categories.index',
    //         'uses' => 'CategoryController@index'
    //     ]);
    //     Route::get('create', [
    //         'as' => 'categories.create',
    //         'uses' => 'CategoryController@create'
    //     ]);
    //     Route::post('/', [
    //         'as' => 'categories.store',
    //         'uses' => 'CategoryController@store'
    //     ]);
    //     Route::get('edit', [
    //         'as' => 'categories.edit',
    //         'uses' => 'CategoryController@edit'
    //     ]);
    //     Route::post('update', [
    //         'as' => 'categories.update',
    //         'uses' => 'CategoryController@update'
    //     ]);
    // });
});