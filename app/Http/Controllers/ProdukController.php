<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Produk;
use App\MasterProduk;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class ProdukController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = \App\Produk::all();
		return view('produk.all')->with('data',$data);
	}

	public function produk()
	{
		$data = \App\Produk::where('nama_produk','=', 'nama_obat');
		$draco = array('draco'=>MasterProduk::all());
		return view('produk')->with('data',$data)->with($draco);
	}
	public function anti_jamur()
	{
		$s['data4'] = \App\Produk::where('nama_produk', '=', 'Anti Jamur')->first();
		$data2 = array('data2'=>Produk::where('nama_produk', '=', 'Anti Jamur')->orderBy('id','desc')->get());
		// $data1 = \App\Produk::all();
		$data1 = array('data1'=>MasterProduk::all());
		$draco = array('draco'=>MasterProduk::all());
		return view('produk')->with($data2)->with($data1)->with($draco)->with($s);
	}
	public function anti_septik()
	{
		$s['data4'] = \App\Produk::where('nama_produk', '=', 'Anti Septik')->first();
		$data2 = array('data2'=>Produk::where('nama_produk', '=', 'Anti Septik')->orderBy('id','desc')->get());
		// $data1 = \App\Produk::all();
		$data1 = array('data1'=>MasterProduk::all());
		$draco = array('draco'=>MasterProduk::all());
		return view('produk')->with($data2)->with($data1)->with($draco)->with($s);
	}
	public function asam_urat()
	{
		$s['data4'] = \App\Produk::where('nama_produk', '=', 'Asam Urat')->first();
		$data2 = array('data2'=>Produk::where('nama_produk', '=', 'Asam Urat')->orderBy('id','desc')->get());
		// $data1 = \App\Produk::all();
		$data1 = array('data1'=>MasterProduk::all());
		$draco = array('draco'=>MasterProduk::all());
		return view('produk')->with($data2)->with($data1)->with($draco)->with($s);
	}
	public function balsem()
	{
		$s['data4'] = \App\Produk::where('nama_produk', '=', 'Balsem')->first();
		$data2 = array('data2'=>Produk::where('nama_produk', '=', 'Balsem')->orderBy('id','desc')->get());
		// $data1 = \App\Produk::all();
		$data1 = array('data1'=>MasterProduk::all());
		$draco = array('draco'=>MasterProduk::all());
		return view('produk')->with($data2)->with($data1)->with($draco)->with($s);
	}
	public function batuk_berdahak()
	{
		// $data2 = \App\Produk::where('nama_produk','=', 'Anti Jamur');
		$data2 = array('data2'=>Produk::where('nama_produk', '=', 'Batuk Berdahak')->orderBy('id','desc')->get());
		// $data1 = \App\Produk::all();
		$data1 = array('data1'=>MasterProduk::all());
		$draco = array('draco'=>MasterProduk::all());
		return view('produk')->with($data2)->with($data1)->with($draco);
	}
	public function demam()
	{
		// $data2 = \App\Produk::where('nama_produk','=', 'Anti Jamur');
		$data2 = array('data2'=>Produk::where('nama_produk', '=', 'Demam')->orderBy('id','desc')->get());
		// $data1 = \App\Produk::all();
		$data1 = array('data1'=>MasterProduk::all());
		$draco = array('draco'=>MasterProduk::all());
		return view('produk')->with($data2)->with($data1)->with($draco);
	}
	public function diare()
	{
		// $data2 = \App\Produk::where('nama_produk','=', 'Anti Jamur');
		$data2 = array('data2'=>Produk::where('nama_produk', '=', 'Diare')->orderBy('id','desc')->get());
		// $data1 = \App\Produk::all();
		$data1 = array('data1'=>MasterProduk::all());
		$draco = array('draco'=>MasterProduk::all());
		return view('produk')->with($data2)->with($data1)->with($draco);
	}
	public function gatal()
	{
		// $data2 = \App\Produk::where('nama_produk','=', 'Anti Jamur');
		$data2 = array('data2'=>Produk::where('nama_produk', '=', 'Gatal')->orderBy('id','desc')->get());
		// $data1 = \App\Produk::all();
		$data1 = array('data1'=>MasterProduk::all());
		$draco = array('draco'=>MasterProduk::all());
		return view('produk')->with($data2)->with($data1)->with($draco);

	}
	public function gatal_alergi()
	{
		$draco = array('draco'=>MasterProduk::all());
		// $data2 = \App\Produk::where('nama_produk','=', 'Anti Jamur');
		$data2 = array('data2'=>Produk::where('nama_produk', '=', 'Gatal dan Alergi')->orderBy('id','desc')->get());
		// $data1 = \App\Produk::all();
		$data1 = array('data1'=>MasterProduk::all());
		return view('produk')->with($data2)->with($data1)->with($draco);
	}
	public function jerawat()
	{
		// $data2 = \App\Produk::where('nama_produk','=', 'Anti Jamur');
		$data2 = array('data2'=>Produk::where('nama_produk', '=', 'Jerawat')->orderBy('id','desc')->get());
		// $data1 = \App\Produk::all();
		$data1 = array('data1'=>MasterProduk::all());
		$draco = array('draco'=>MasterProduk::all());
		return view('produk')->with($data2)->with($data1)->with($draco);
	}
	public function kalsium()
	{
		// $data2 = \App\Produk::where('nama_produk','=', 'Anti Jamur');
		$data2 = array('data2'=>Produk::where('nama_produk', '=', 'Kalsium')->orderBy('id','desc')->get());
		// $data1 = \App\Produk::all();
		$data1 = array('data1'=>MasterProduk::all());
		$draco = array('draco'=>MasterProduk::all());
		return view('produk')->with($data2)->with($data1)->with($draco);
	}
	public function panas()
	{
		// $data2 = \App\Produk::where('nama_produk','=', 'Anti Jamur');
		$data2 = array('data2'=>Produk::where('nama_produk', '=', 'Panas')->orderBy('id','desc')->get());
		// $data1 = \App\Produk::all();
		$data1 = array('data1'=>MasterProduk::all());
		$draco = array('draco'=>MasterProduk::all());
		return view('produk')->with($data2)->with($data1)->with($draco);
	}
	public function suplemen()
	{
		// $data2 = \App\Produk::where('nama_produk','=', 'Anti Jamur');
		$data2 = array('data2'=>Produk::where('nama_produk', '=', 'Suplemen')->orderBy('id','desc')->get());
		// $data1 = \App\Produk::all();
		$data1 = array('data1'=>MasterProduk::all());
		$draco = array('draco'=>MasterProduk::all());
		return view('produk')->with($data2)->with($data1)->with($draco);
	}
	public function pilek()
	{
		// $data2 = \App\Produk::where('nama_produk','=', 'Anti Jamur');
		$data2 = array('data2'=>Produk::where('nama_produk', '=', 'Pilek')->orderBy('id','desc')->get());
		// $data1 = \App\Produk::all();
		$data1 = array('data1'=>MasterProduk::all());
		$draco = array('draco'=>MasterProduk::all());
		return view('produk')->with($data2)->with($data1)->with($draco);
	}
	public function sariawan()
	{
		$s['data2'] = \App\Produk::where('nama_produk','Sariawan')->orderBy('id','desc')->get();
		// $data2 = array('data2'=>Produk::where('nama_produk', '=', 'Sariawan')->orderBy('id','desc')->get());
		$s['data1'] = \App\MasterProduk::all();

		// $data1 = array('data1'=>MasterProduk::all());
		return view('produk')->with($s);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()

	{
		$data1 = array('data1'=>MasterProduk::all());
		return view('produk.add')->with($data1); 
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
			
		$post = new Produk;
		$post->nama_obat = Input::get('nama_obat');
		$post->harga = Input::get('harga');
		$post->nama_produk = Input::get('nama_produk');
		
		if(Input::hasFile('gambar')){
			$gambar = date("YmdHis");
			uniqid().".".Input::file('gambar')->getClientOriginalExtension();
			Input::file('gambar')->move(storage_path(),$gambar);
			$post->gambar = $gambar;
		}
		$post->save();
		return redirect(url('produk/add'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
