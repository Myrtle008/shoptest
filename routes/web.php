<?php

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

Route::get('/', 'PagesController@root')->name('root'); //->middleware('verified') 验证邮箱中间件

Auth::routes(['verify' => true]);
Route::group(['middleware'=>['auth','verified']],function()
{
	Route::get('user_addresses', 'UserAddressController@index')->name('user_addresses.index');
	Route::get('user_addresses/create', 'UserAddressController@create')->name('user_addresses.create');
	Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
});