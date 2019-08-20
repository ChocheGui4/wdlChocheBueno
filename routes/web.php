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
    return view('auth.login');
});
Auth::routes(['verify' => true]);
route::get('/home','PrincipalController@index');
Route::get('/cc','CustomCompanController@index');
//Route::get('/wluser','WlUserController@index');
Route::get('/branches', function () {
    return view('super.branches');
});
Route::resource('/user','UserController');
Route::resource('/wluser','WlUserController');
route::resource('/registers/contactdata','RegisterController');





Auth::routes();

Route::get('/home1', 'HomeController@index')->name('home1');
