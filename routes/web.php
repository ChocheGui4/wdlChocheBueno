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

Route::get('/cc', function () {
    return view('super.customerscompanies');
});
//route::get('home/cc','PrincipalController@cc');
route::resource('home','PrincipalController');


/*Route::resource('home', 'PrincipalController')->only([
    'index', 'create','cyc'
]);*/


