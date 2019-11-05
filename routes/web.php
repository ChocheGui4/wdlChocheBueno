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
    return redirect()->route('login');
    // return view('welcome');
});


Auth::routes(['verify' => true]);
//Home
Route::get('/home', 'PrincipalController@Home')->name('Home');

//Companies
Route::get('/companies', 'CompanyController@companyShow') -> name('companyShow');
Route::get('/companycreate', 'CompanyController@companyCreate') -> name('companyCreate');
Route::get('/companyedit/{id}', 'CompanyController@companyEdit') -> name('companyEdit');
Route::get('/companydelete/{id}', 'CompanyController@companyDelete') -> name('companyDelete');
Route::get('/createcontactcompany', 'CompanyController@contactCompany') -> name('contactCompany');
Route::get('/createcontactbranch/{id}/{branch}/', 'CompanyController@contactBranch') -> name('contactBranch');
Route::post('/createcontact', 'CompanyController@contactAddCompany') -> name('contactAddCompany');
Route::post('/createcontact/{company}/{id}/', 'CompanyController@contactAddBranch') -> name('contactAddBranch');



Route::post('/companyadd','CompanyController@companyAdd')->name('companyAdd');
Route::post('/companyupdateprofile/{id}/{compan}','CompanyController@companyUpdateProfile')->name('companyUpdateProfile');
Route::post('/branchupdatecompany/{id}/{compan}','CompanyController@branchUpdateCompany')->name('branchUpdateCompany');
Route::post('/branchupdateprofile/{contact}/{id}/{compan}','CompanyController@branchUpdateProfile')->name('branchUpdateProfile');
Route::post('/branchupdateaddress/{id}/{compan}','CompanyController@branchUpdateAddress')->name('branchUpdateAddress');

Route::post('/companyupdateaddress/{id}','CompanyController@companyUpdateAddress')->name('companyUpdateAddress');
Route::get('/companybranches/{id}', 'CompanyController@showBranches') ->name('showBranches');
Route::get('/products', 'ProductController@productsShow') ->name('productsShow');
Route::get('/productsshow/{id}', 'ProductController@productsShowSpecific') ->name('productsShowSpecific');

Route::get('datatableproducts/{id}', 'ProductController@datatableproducts')->name('datatableproducts'); 
Route::get('datatableproductscompany/{id}', 'ProductController@datatableproductsadd')->name('datatableproductsadd'); 
Route::post('/productcreate', 'ProductController@productCreate') ->name('productCreate');
Route::post('/productaddspecific', 'ProductController@productAddSpecific') ->name('productAddSpecific');

Route::post('/productedit', 'ProductController@productEdit') ->name('productEdit');
Route::get('/productdelete/{id}', 'ProductController@productDelete') ->name('productDelete');
Route::get('/productaddcompany/{id}', 'ProductController@productAddCompany') ->name('productAddCompany');
Route::get('/productdeletegeneral/{id}', 'ProductController@productDeleteGeneral') ->name('productDeleteGeneral');
Route::get('/productdeletebranch/{id}', 'ProductController@deleteProductBranch') ->name('deleteProductBranch');


Route::get('/companyproducts/{id}/{branch}', 'ProductController@showBranchesProducts') ->name('showBranchesProducts');

Route::get('/customerproducts/{id}', 'ProductController@showPeopleProducts') ->name('showPeopleProducts');
Route::get('/companycreateproducts/{id}/{branch}', 'ProductController@showBranchesCreateProduct') ->name('showBranchesCreateProduct');
Route::get('/companyaddproduct/{id}/{branch}/{idprod}', 'ProductController@AddCompanyProduct') ->name('AddCompanyProduct');

Route::post('/companyaddproduct/{id}/{branch}', 'ProductController@showBranchesAddProduct') ->name('showBranchesAddProduct');
Route::get('/companycreatebranches/{id}', 'CompanyController@createBranches') ->name('createBranches');
Route::post('/companyupdatecompany/{id}','CompanyController@companyUpdateCompany')->name('companyUpdateCompany');
Route::post('/companyaddbranches/{id}', 'CompanyController@addBranches') ->name('addBranches');
Route::get('/companybranchedit/{id}/{Compan}', 'CompanyController@branchEdit') ->name('branchEdit');
Route::get('/companybranchdelete/{id}/{branch}', 'CompanyController@deleteBranch') ->name('deleteBranch');
Route::get('/companybranchproductdelete/{id}/{branch}/{product}/{specific}', 'CompanyController@deleteBranchProduct') ->name('deleteBranchProduct');




//Customers
Route::get('/customers', 'CustomController@customerShow')->name('customerShow');
Route::get('/customercreate', 'CustomController@customerCreate') -> name('customerCreate');
Route::get('/customeredit/{id}', 'CustomController@customerEdit') -> name('customerEdit');
Route::get('/customerdeletet/{id}', 'CustomController@customerDelete') -> name('customerDelete');
Route::post('/customerupdateprofile/{id}/{customer}', 'CustomController@customerUpdateProfile') -> name('customerUpdateProfile');
Route::post('/customerupdateaddress/{id}/{customer}', 'CustomController@customerUpdateAddress') -> name('customerUpdateAddress');
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

