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
//Home
Route::get('/home', 'PrincipalController@Home')->name('Home')-> middleware('auth');

//Companies
Route::get('/companies', 'CompanyController@companyShow') -> name('companyShow') -> middleware('auth');
Route::get('/companycreate', 'CompanyController@companyCreate') -> name('companyCreate') -> middleware('auth');
Route::post('/companyadd','CompanyController@companyAdd')->name('companyAdd');
Route::get('/companybranches/{id}', 'CompanyController@showBranches') ->name('showBranches')-> middleware('auth');
Route::get('/companycreatebranches/{id}', 'CompanyController@createBranches') ->name('createBranches')-> middleware('auth');
Route::post('/companyaddbranches/{id}', 'CompanyController@addBranches') ->name('addBranches')-> middleware('auth');

//Customers
Route::get('/customers', 'CustomController@showCustomers')->name('showCustomers') -> middleware('auth');
Route::get('/customercreate', 'CustomController@customerCreate') -> name('customerCreate') -> middleware('auth');
Route::post('/customeradd','CustomController@customerAdd')->name('customerAdd');
//Users
Route::get('/user','UserController@showUsers')->name('showUsers');
Route::get('/useredit/{id}','UserController@userEdit')->name('userEdit')-> middleware('auth');
Route::post('/userupdatep/{id}','UserController@userUpdateProfile')->name('userUpdateProfile')-> middleware('auth');
Route::post('/userupdatea/{id}','UserController@userUpdateAddress')->name('userUpdateAddress')-> middleware('auth');
Route::get('/usercreate','UserController@userCreate')->name('userCreate');

Route::get('/userdelete/{id}','UserController@userDelete')->name('userDelete')-> middleware('auth');
//Route::resource('/user','UserController');
//Route::resource('/wluser','WlUserController');
//WlUsers

Route::get('/wlusercreate','WlUserController@wluserCreate');
Route::post('/wluseradd','WlUserController@wluserAdd')->name('wluserAdd');
Route::post('/wluserupdate/{id}','WlUserController@wluserUpdate')->name('wluserUpdate');
Route::get('/wluseredit/{id}','WlUserController@wluserEdit')->name('wluserEdit')-> middleware('auth');
Route::get('/wluserdelete/{id}','WlUserController@wluserDelete')->name('wluserDelete')-> middleware('auth');
Route::get('/wluser','WlUserController@showWlUsers')->name('showWlUsers');
//Route::post('/wluseradd','WlUserController@wluserAdd')->name('wluserAdd');

//Register users
route::post('/registers/contactdata','RegisterController@registerStore')->name('registerStore');
route::get('/registers/contactdata','RegisterController@index');







Auth::routes();

Route::get('/home1', 'HomeController@index')->name('home1');

