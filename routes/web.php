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

Route::get('/admin', 'AdminController@loginAdmin');

Route::post('/admin', 'AdminController@postLoginAdmin');

Route::get('/home', function () {
    return view('home');
});

Route::prefix('admin')->group(function () {

    Route::prefix('categories')->group(function () {
        Route::get('/', [
            'as' => 'categories.index', //tên router
            'uses' => 'CategoryController@index' //goi den funtion index
        ]);
        Route::get('/create', [
            'as' => 'categories.create', //tên router
            'uses' => 'CategoryController@create'
        ]);
        Route::post('/store', [
            'as' => 'categories.store', //tên router
            'uses' => 'CategoryController@store'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'categories.edit', //tên router
            'uses' => 'CategoryController@edit'
        ]);

        Route::post('/update/{id}', [
            'as' => 'categories.update', //tên router
            'uses' => 'CategoryController@update'
        ]);

        Route::get('/delete/{id}', [
            'as' => 'categories.delete', //tên router
            'uses' => 'CategoryController@delete'
        ]);
    });

    Route::prefix('menus')->group(function () {
        Route::get('/', [
            'as' => 'menus.index', //tên router
            'uses' => 'MenuController@index' //goi den funtion index
        ]);

        Route::get('/create', [
            'as' => 'menus.create', //tên router
            'uses' => 'MenuController@create'
        ]);
        Route::post('/store', [
            'as' => 'menus.store', //tên router
            'uses' => 'MenuController@store'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'menus.edit', //tên router
            'uses' => 'MenuController@edit'
        ]);

        Route::post('/update/{id}', [
            'as' => 'menus.update', //tên router
            'uses' => 'MenuController@update'
        ]);

        Route::get('/delete/{id}', [
            'as' => 'menus.delete', //tên router
            'uses' => 'MenuController@delete'
        ]);

    });

    //Product
    Route::prefix('product')->group(function () {
        Route::get('/', [
            'as' => 'product.index', //tên router
            'uses' => 'AdminProductController@index' //goi den funtion index
        ]);

        Route::get('/create', [
            'as' => 'product.create', //tên router
            'uses' => 'AdminProductController@create' //goi den funtion index
        ]);


    });
});


