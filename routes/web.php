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
Route::get('/home', 'PrincipalController@Home')->name('Home');

//Companies
Route::get('/companies', 'CompanyController@companyShow') -> name('companyShow');
Route::get('/companycreate', 'CompanyController@companyCreate') -> name('companyCreate');
Route::get('/companyedit/{id}', 'CompanyController@companyEdit') -> name('companyEdit');

Route::post('/companyadd','CompanyController@companyAdd')->name('companyAdd');
Route::post('/companyupdateprofile/{id}','CompanyController@companyUpdateProfile')->name('companyUpdateProfile');
Route::post('/companyupdatecompany/{id}','CompanyController@companyUpdateCompany')->name('companyUpdateCompany');
Route::post('/companyupdateaddress/{id}','CompanyController@companyUpdateAddress')->name('companyUpdateAddress');
Route::get('/companybranches/{id}', 'CompanyController@showBranches') ->name('showBranches');
Route::get('/companybranchesproducts/{id}/{branch}', 'ProductController@showBranchesProducts') ->name('showBranchesProducts');
Route::get('/companycreatebranches/{id}', 'CompanyController@createBranches') ->name('createBranches');
Route::post('/companyaddbranches/{id}', 'CompanyController@addBranches') ->name('addBranches');

//Customers
Route::get('/customers', 'CustomController@customerShow')->name('customerShow');
Route::get('/customercreate', 'CustomController@customerCreate') -> name('customerCreate');
Route::get('/customeredit/{id}', 'CustomController@customerEdit') -> name('customerEdit');
Route::get('/customerdeletet/{id}', 'CustomController@customerDelete') -> name('customerDelete');
Route::post('/customerupdateprofile/{id}', 'CustomController@customerUpdateProfile') -> name('customerUpdateProfile');
Route::post('/customerupdateaddress/{id}', 'CustomController@customerUpdateAddress') -> name('customerUpdateAddress');
Route::post('/customeradd','CustomController@customerAdd')->name('customerAdd');
//Users
Route::get('/user','UserController@showUsers')->name('showUsers');
Route::get('/useredit/{id}','UserController@userEdit')->name('userEdit')-> middleware('auth');
Route::post('/userupdatep/{id}','UserController@userUpdateProfile')->name('userUpdateProfile');
Route::post('/userupdatea/{id}','UserController@userUpdateAddress')->name('userUpdateAddress');
Route::get('/usercreate','UserController@userCreate')->name('userCreate');

Route::get('/userdelete/{id}','UserController@userDelete')->name('userDelete');
//Route::resource('/user','UserController');
//Route::resource('/wluser','WlUserController');
//WlUsers

Route::get('/wlusercreate','WlUserController@wluserCreate');
Route::post('/wluseradd','WlUserController@wluserAdd')->name('wluserAdd');
Route::post('/wluserupdate/{id}','WlUserController@wluserUpdate')->name('wluserUpdate');
Route::get('/wluseredit/{id}','WlUserController@wluserEdit')->name('wluserEdit');
Route::get('/wluserdelete/{id}','WlUserController@wluserDelete')->name('wluserDelete');
Route::get('/wluser','WlUserController@showWlUsers')->name('showWlUsers');
//Route::post('/wluseradd','WlUserController@wluserAdd')->name('wluserAdd');

//Register users
route::post('/registers/contactdata','RegisterController@registerStore')->name('registerStore');
route::get('/registers/contactdata','RegisterController@index');







Auth::routes();

Route::get('/home1', 'HomeController@index')->name('home1');

