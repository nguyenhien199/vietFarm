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
Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/admin/new', 'Admin\NewsController@index')->name('news');
    Route::post('/admin/new/create', 'Admin\NewsController@create');
    Route::get('/admin/new/delete/{id}', 'Admin\NewsController@destroy');
});
