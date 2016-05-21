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
Route::get('produk/all', 'ProdukController@index');
Route::get('produk/add', 'ProdukController@create');
Route::post('produk/save', 'ProdukController@store');

Route::get('/images/{filename}',
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
// // Obat
// Route::get('/obat/anti_jamur', ['as'=>'anti_jamur','uses'=>'ObatController@anti_jamur']);
// Route::get('/obat/anti_septik', ['as'=>'anti_septik','uses'=>'ObatController@anti_septik']);
// Route::get('/obat/asam_urat', ['as'=>'asam_urat','uses'=>'ObatController@asam_urat']);
// Route::get('/obat/balsem', ['as'=>'balsem','uses'=>'ObatController@balsem']);
// Route::get('/obat/batuk_berdahak', ['as'=>'batuk_berdahak','uses'=>'ObatController@batuk_berdahak']);
// Route::get('/obat/batuk_pilek', ['as'=>'batuk_pilek','uses'=>'ObatController@batuk_pilek']);
// Route::get('/obat/demam', ['as'=>'demam','uses'=>'ObatController@demam']);
// Route::get('/obat/diare', ['as'=>'diare','uses'=>'ObatController@diare']);
// Route::get('/obat/gatal', ['as'=>'gatal','uses'=>'ObatController@gatal']);
// Route::get('/obat/gatal_alergi', ['as'=>'gatal_alergi','uses'=>'ObatController@gatal_alergi']);
// Route::get('/obat/jerawat', ['as'=>'jerawat','uses'=>'ObatController@jerawat']);
// Route::get('/obat/kalsium', ['as'=>'kalsium','uses'=>'ObatController@kalsium']);
// Route::get('/obat/lambung', ['as'=>'lambung','uses'=>'ObatController@lambung']);
// Route::get('/obat/mata', ['as'=>'mata','uses'=>'ObatController@mata']);
// Route::get('/obat/sesak', ['as'=>'sesak','uses'=>'ObatController@sesak']);
// Route::get('/obat/pencahar', ['as'=>'pencahar','uses'=>'ObatController@pencahar']);
// Route::get('/obat/pilek', ['as'=>'pilek','uses'=>'ObatController@pilek']);
// Route::get('/obat/sariawan', ['as'=>'sariawan','uses'=>'ObatController@sariawan']);
// Route::get('/obat/susu', ['as'=>'susu','uses'=>'ObatController@susu']);
// Route::get('/obat/vitamin', ['as'=>'vitamin','uses'=>'ObatController@vitamin']);
// Route::get('/obat/vitamin_anak', ['as'=>'vitamin_anak','uses'=>'ObatController@vitamin_anak']);
// Route::get('/obat/panas', ['as'=>'panas','uses'=>'ObatController@panas']);
// Route::get('/obat/suplemen', ['as'=>'suplemen','uses'=>'ObatController@suplemen']);
// Route::get('/obat/mulut_tenggorokan', ['as'=>'mulut_tenggorokan','uses'=>'ObatController@mulut_tenggorokan']);
// Route::get('/obat/madu', ['as'=>'madu','uses'=>'ObatController@madu']);
