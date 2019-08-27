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
Route::get('home','PrincipalController@index')->name('home');
Route::get('/cc','CustomCompanController@index');
//Route::get('/wluser','WlUserController@index');
Route::get('/branches', function () {
    return view('super.branches');
});
Route::get('/user','UserController@index');
Route::get('/usercreate','UserController@userCreate');
Route::post('/useradd','UserController@userAdd')->name('userAdd');
Route::get('/wlusercreate','WlUserController@wluserCreate');
Route::post('/wluseradd','WlUserController@wluserAdd')->name('wluserAdd');
Route::post('/wluserupdate/{id}','WlUserController@wluserUpdate')->name('wluserUpdate');
//Route::post('/wluseradd','WlUserController@wluserAdd')->name('wluserAdd');
Route::get('/wluseredit/{id}','WlUserController@wluserEdit')->name('wluserEdit');

Route::resource('/wluser','WlUserController');
route::post('/registers/contactdata','RegisterController@registerStore')->name('registerStore');
route::get('/registers/contactdata','RegisterController@index');







Auth::routes();

Route::get('/home1', 'HomeController@index')->name('home1');

