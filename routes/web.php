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

Route::get('/cc','CustomCompanController@index');
Route::get('/branches', function () {
    return view('super.branches');
});
route::get('/registers/contactdata','UserController@company');
//route::get('/registers/contactdata','UserController@store');
//route::get('home/cc','PrincipalController@cc');
route::resource('/home','PrincipalController');
route::resource('/registers/contactdata','UserController');





Auth::routes();

Route::get('/home1', 'HomeController@index')->name('home1');
