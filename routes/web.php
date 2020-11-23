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
Route::get('/product/detail/{id}', 'ProductController@getDetail');
Route::get('/service', 'ProductController@index');
Route::get('/contact', 'HomeController@contact');
Route::get('/bai-viet/{url}', 'WebController@getDetailNew');

Auth::routes(['register' => false]);
Route::get('logout', 'Auth\LoginController@logout');
//Route::post('register', 'Auth\LoginController@register');

Route::group(['prefix' => 'admin','middleware' => 'auth'], function(){
    Route::get('/', 'Admin\OverviewController@index')->name('overview');
    
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
    
    // service
    Route::get('/services', 'Admin\ServicesController@index')->name('services');
    Route::get('/services/create', 'Admin\ServicesController@showGet');
    Route::post('/services/create', 'Admin\ServicesController@create');
    Route::get('/services/edit/{id}', 'Admin\ServicesController@edit');
    Route::get('/services/delete/{id}', 'Admin\ServicesController@destroy');
    
    // technologies
    Route::get('/technologies', 'Admin\TechnologiesController@index')->name('technologies');
    Route::get('/technologies/create', 'Admin\TechnologiesController@showGet');
    Route::post('/technologies/create', 'Admin\TechnologiesController@create');
    Route::get('/technologies/edit/{id}', 'Admin\TechnologiesController@edit');
    Route::get('/technologies/delete/{id}', 'Admin\TechnologiesController@destroy');
    
    // fertilizers
    Route::get('/fertilizers', 'Admin\FertilizersController@index')->name('fertilizers');
    Route::get('/fertilizers/create', 'Admin\FertilizersController@showGet');
    Route::post('/fertilizers/create', 'Admin\FertilizersController@create');
    Route::get('/fertilizers/edit/{id}', 'Admin\FertilizersController@edit');
    Route::get('/fertilizers/delete/{id}', 'Admin\FertilizersController@destroy');
    
    //slide
    Route::get('/slides', 'Admin\SlidesController@index')->name('slides');
    Route::get('/slides/create', 'Admin\SlidesController@showGet');
    Route::post('/slides/create', 'Admin\SlidesController@create');
    Route::get('/slides/edit/{id}', 'Admin\SlidesController@edit');
    Route::get('/slides/delete/{id}', 'Admin\SlidesController@destroy');
});
