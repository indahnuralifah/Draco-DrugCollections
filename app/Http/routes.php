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

Route::get('/', 'HomeController@index');

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
	return view('admin');
});


//BLOG//
Route::get('blog/all', 'DracoController@index');
Route::get('blog/add', 'DracoController@create');
Route::post('blog/save', 'DracoController@store');
Route::get('blog/show', 'DracoController@show');
Route::get('blog/edit/{id}', 'DracoController@edit');
Route::get('blog/delete/{id}', 'DracoController@destroy');


//PROMOSI//
Route::get('promosi/all', 'DracoController@view_Promosi');
Route::get('promosi/add', 'DracoController@add_Promosi');
Route::post('promosi/save', 'DracoController@get_Promosi');

//MASTER PRODUK
Route::get('masterproduk/all', 'MasterProdukController@index');
Route::get('masterproduk/add', 'MasterProdukController@create');
Route::post('masterproduk/save', 'MasterProdukController@store');

//PRODUK
Route::get('produk/all', 'ProdukController@index');
Route::get('produk/add', 'ProdukController@create');
Route::get('produk', 'ProdukController@produk');
Route::get('Anti Jamur', 'ProdukController@anti_jamur');
Route::get('Anti Septik', 'ProdukController@anti_septik');
Route::get('Asam Urat', 'ProdukController@asam_urat');
Route::get('Balsem', 'ProdukController@balsem');
Route::get('Batuk Berdahak', 'ProdukController@batuk_berdahak');
Route::get('Batuk Pilek', 'ProdukController@batuk_pilek');
Route::get('Demam', 'ProdukController@demam');
Route::get('Diare', 'ProdukController@diare');
Route::get('Gatal', 'ProdukController@gatal');
Route::get('Gatal dan Alergi', 'ProdukController@gatal_alergi');
Route::get('Panas', 'ProdukController@panas');
Route::get('Jerawat', 'ProdukController@jerawat');
Route::get('Kalsium', 'ProdukController@kalsium');
Route::get('Lambung', 'ProdukController@lambung');
Route::get('Mata', 'ProdukController@mata');
Route::get('Pencahar', 'ProdukController@pencahar');
Route::get('Pilek', 'ProdukController@pilek');
Route::get('Sariawan', 'ProdukController@sariawan');
Route::post('produk/save', 'ProdukController@store');

//STOK OBAT
Route::get('stok/all', 'DracoController@view_Stok');
Route::get('stok/add', 'DracoController@add_Stok');
Route::post('stok/save', 'DracoController@get_Stok');
Route::get('stok/show', 'DracoController@view_Obat');




Route::get('/gambar/{filename}',
	function ($filename)
{
	$path = storage_path().
	'/' . $filename;

	$file = File::get($path);
	$type = File::mimeType($path);

	$response = Response::make($file, 200);
	$response->header("Content-Type", $type);

	return $response;
});	
