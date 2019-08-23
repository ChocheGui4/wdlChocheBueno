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
route::get('/home', 'PrincipalController@index') -> middleware('auth');
Route::get('/customandcompanies', 'CustomCompanController@index') -> middleware('auth');
Route::get('/ccbranches/{id}', 'CustomCompanController@showBranches') ->name('showBranches')-> middleware('auth');
Route::get('/cccreatebranches/{id}', 'CustomCompanController@createBranches') ->name('createBranches')-> middleware('auth');
Route::post('/ccaddbranches/{id}', 'CustomCompanController@addBranches') ->name('addBranches')-> middleware('auth');
Route::resource('/customandcompanies', 'CustomCompanController') -> middleware('auth');



//Users
Route::get('/user','UserController@index');
Route::get('/useredit/{id}','UserController@userEdit')->name('userEdit')-> middleware('auth');
Route::post('/userupdatep/{id}','UserController@userUpdateProfile')->name('userUpdateProfile')-> middleware('auth');
Route::post('/userupdatea/{id}','UserController@userUpdateAddress')->name('userUpdateAddress')-> middleware('auth');

Route::get('/usercreate','UserController@userCreate');
Route::post('/useradd','UserController@userAdd')->name('userAdd');
Route::resource('/user','UserController');
//Route::resource('/wluser','WlUserController');
//WlUsers

Route::get('/wlusercreate','WlUserController@wluserCreate');
Route::post('/wluseradd','WlUserController@wluserAdd')->name('wluserAdd');
Route::post('/wluserupdate/{id}','WlUserController@wluserUpdate')->name('wluserUpdate');
Route::get('/wluseredit/{id}','WlUserController@wluserEdit')->name('wluserEdit')-> middleware('auth');
Route::get('/wluserdelete/{id}','WlUserController@wluserDelete')->name('wluserDelete')-> middleware('auth');
Route::resource('/wluser','WlUserController');
//Route::post('/wluseradd','WlUserController@wluserAdd')->name('wluserAdd');

//Register users
route::post('/registers/contactdata','RegisterController@registerStore')->name('registerStore');
route::get('/registers/contactdata','RegisterController@index');







Auth::routes();

Route::get('/home1', 'HomeController@index')->name('home1');

