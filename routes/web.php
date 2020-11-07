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

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::post('/login_admin', 'AdminController@index')->name('login_admin');
Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', 'Admin\AdminController@index')->name('home');
    Route::get('/admin/overview', 'Admin\AdminController@index')->name('overview');
    Route::get('/admin/new', 'Admin\NewsController@index');
    Route::post('/admin/new/create', 'Admin\NewsController@create');
});
