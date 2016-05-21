<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Route::get('/', [
//    'as' => 'index', 'uses' => 'HomeController@index'
//  ]);
// Route::get('register', [
//    'as' => 'register', 'uses' => 'SimpleauthController@register'
//  ]);




//ADMIN//
Route::get('admin', function () {
	return view('/admin/admin');
});


//BLOG//
Route::get('blog/all', 'DracoController@index');
Route::get('blog/add', 'DracoController@create');
Route::post('blog/save', 'DracoController@store');


//PROMOSI//
Route::get('promosi/all', 'DracoController@view_Promosi');
Route::get('promosi/add', 'DracoController@add_Promosi');
Route::post('promosi/save', 'DracoController@get_Promosi');

//MASTER PRODUK
Route::get('masterproduk/all', 'MasterProdukController@index');
Route::get('masterproduk/add', 'MasterProdukController@create');
Route::post('masterproduk/save', 'MasterProdukController@store');

//PRODUK

//MASTER PRODUK
Route::get('produk/all', 'ProdukController@index');
Route::get('produk/add', 'ProdukController@create');
Route::post('produk/save', 'ProdukController@store');

Route::post('/obat/view', ['as'=>'obat_view','uses'=>'DracoController@obat_view']);