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

Route::get('/', function () {
    return view('reception/index');
});
// Route::get('/logout', 'Auth\LoginController@logout');
// Route::get('/login', 'Auth\LoginController@login');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/user/index','TestController@index');
Route::get('/user/fabu','TestController@fabu');
Route::get('/user/myfabu','TestController@myfabu');
Route::get('/user/order','TestController@order');
Route::get('/user/cash','TestController@cash');
Route::get('/user/userinfo','TestController@userinfo');
Route::get('/user/wg','TestController@waiguan');
Route::get('/user/zb','TestController@zhuangbei');
