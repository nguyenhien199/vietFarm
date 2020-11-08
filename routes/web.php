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

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::post('/login_admin', 'AdminController@index')->name('login_admin');
Route::group(['prefix' => 'admin','middleware' => 'auth'], function(){
    Route::get('/', 'HomeController@index')->name('admin');
    // news
    Route::get('/news', 'Admin\NewsController@index')->name('news');
    Route::post('/news/create', 'Admin\NewsController@create');
    Route::get('/new/delete/{id}', 'Admin\NewsController@destroy');
    // products
    Route::get('/products', 'Admin\ProductsController@index')->name('news');
    Route::post('/products/create', 'Admin\ProductsController@create');
    Route::get('/products/delete/{id}', 'Admin\ProductsController@destroy');

});
