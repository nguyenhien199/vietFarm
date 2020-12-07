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

Route::get('/san-pham', 'ProductController@index');
Route::get('/san-pham/{url}', 'ProductController@show');
Route::get('/product/detail/{id}', 'ProductController@getDetail');
Route::get('/dich-vu', 'ServiceController@index');
Route::get('/dich-vu/{url}', 'ServiceController@show');
Route::get('/cong-nghe', 'TechnologyController@index');
Route::get('/cong-nghe/{url}', 'TechnologyController@show');
Route::get('/phan-bon', 'FertilizerController@index');
Route::get('/phan-bon/{url}', 'FertilizerController@show');

Route::get('/contact', 'HomeController@contact');
Route::get('/bai-viet/{url}', 'WebController@getDetailNew');

Auth::routes(['register' => false]);
Route::get('logout', 'Auth\LoginController@logout');
//Route::post('register', 'Auth\LoginController@register');

Route::group(['prefix' => 'admin','middleware' => 'auth'], function(){
    Route::get('/', 'Admin\OverviewController@index')->name('overview');
    Route::get('/setting', 'Admin\AdminController@setting')->name('setting');
    Route::post('/setting', 'Admin\AdminController@editUser');

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
    Route::get('/category-type-trees', 'Admin\CategoryProductsController@indexTypeTrees');

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
    // Chứng nhận
    Route::get('/certifications', 'Admin\CertificationsController@index')->name('certifications');
    Route::get('/certifications/create', 'Admin\CertificationsController@showGet');
    Route::post('/certifications/create', 'Admin\CertificationsController@create');
    Route::get('/certifications/edit/{id}', 'Admin\CertificationsController@edit');
    Route::get('/certifications/delete/{id}', 'Admin\CertificationsController@destroy');

    // Chứng nhận
    Route::get('/type-trees', 'Admin\TypeTreesController@index')->name('typeTrees');
    Route::get('/type-trees/create', 'Admin\TypeTreesController@showGet');
    Route::post('/type-trees/create', 'Admin\TypeTreesController@create');
    Route::get('/type-trees/edit/{id}', 'Admin\TypeTreesController@edit');
    Route::get('/type-trees/delete/{id}', 'Admin\TypeTreesController@destroy');

    //slide
    Route::get('/slides', 'Admin\SlidesController@index')->name('slides');
    Route::get('/slides/create', 'Admin\SlidesController@showGet');
    Route::post('/slides/create', 'Admin\SlidesController@create');
    Route::get('/slides/edit/{id}', 'Admin\SlidesController@edit');
    Route::get('/slides/delete/{id}', 'Admin\SlidesController@destroy');
});
