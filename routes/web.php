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

Route::get('/', 'WebController@index');

Route::get('/product', 'ProductController@index');
Route::get('/product/detail', 'ProductController@getDetail');
Route::get('/contact', 'HomeController@contact');
Route::get('/new/new-detail', 'HomeController@getNewDetail');

Auth::routes(['register' => false]);
Route::get('logout', 'Auth\LoginController@logout');
//Route::post('register', 'Auth\LoginController@register');

Route::group(['prefix' => 'admin','middleware' => 'auth'], function(){
    Route::get('/', 'HomeController@index')->name('admin');
    
    Route::group(['middleware' => 'check_admin'],function () {
        // user
        Route::get('/users', 'Admin\UsersController@index')->name('users');
        Route::post('/users/create', 'Admin\UsersController@create');
        Route::get('/users/delete/{id}', 'Admin\UsersController@destroy');
    });
    
    // news
    Route::get('/news', 'Admin\NewsController@index')->name('news');
    Route::get('/news/create', 'Admin\NewsController@showCreate');
    Route::post('/news/create', 'Admin\NewsController@create');
    Route::get('/news/edit/{id}', 'Admin\NewsController@showEdit');
    Route::get('/news/delete/{id}', 'Admin\NewsController@destroy');
    // products
    Route::get('/products', 'Admin\ProductsController@index')->name('products');
    Route::get('/products/create', 'Admin\ProductsController@showGet');
    Route::post('/products/create', 'Admin\ProductsController@create');
    Route::get('/products/edit/{id}', 'Admin\ProductsController@edit');
    Route::get('/products/delete/{id}', 'Admin\ProductsController@destroy');
    
    // category products
    Route::get('/category-products', 'Admin\CategoryProductsController@index');
    Route::post('/category-products/create', 'Admin\CategoryProductsController@create');
    Route::get('/category-products/delete/{id}', 'Admin\CategoryProductsController@destroy');
    
    Route::get('/category-services', 'Admin\CategoryProductsController@indexService');
    Route::get('/category-technologies', 'Admin\CategoryProductsController@indexTechnology');
    Route::get('/category-fertilizers', 'Admin\CategoryProductsController@indexFertilizer');
   
});
