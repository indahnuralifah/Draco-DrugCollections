<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Blog;
use App\Promosi;
use App;
use App\MasterProduk;
use App\Produk;
use App\Stok;

use Illuminate\Support\Facades\Input;

class DracoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
		
	public function index()
	{
		$data = array('data'=>\App\Blog::get());
		$data2 = array('data2'=>\App\MasterProduk::get());
		return view('blog.all')->with($data)->with($data2);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data2 = array('data2'=>MasterProduk::all());
		return view('blog.add')->with($data2);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Blog;
		$post->judul = Input::get('judul');
		$post->isi = Input::get('isi');
		if(Input::hasFile('gambar')){
			$gambar = date("YmdHis");
			uniqid().".".Input::file('gambar')->getClientOriginalExtension();
			Input::file('gambar')->move(storage_path(),$gambar);
			$post->gambar = $gambar;
		}
		$post->save();
		return redirect(url('blog/add'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		

        return view('blog.add', compact('blog'));
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
	public function get_Promosi()
	{

		$post = new Promosi;
		$post->judul = Input::get('judul');
		$post->ket = Input::get('ket');
		if(Input::hasFile('gambar')){
			$gambar = date("YmdHis");
			uniqid().".".Input::file('gambar')->getClientOriginalExtension();
			Input::file('gambar')->move(storage_path(),$gambar);
			$post->gambar = $gambar;
		}
		$post->save();
		return redirect(url('promosi/add'));

			}
	public function view_Promosi()
	{
		$data = array('data'=>Promosi::all());
		return view('promosi.add')->with($data);
	}
	public function add_Promosi()
	{
		return view('promosi.add');
	}
	public function obat_view()
	{
		
		return view('obat.view');
	}



	public function get_Stok()
	{

		$post = new Stok;
		$post->kode = Input::get('kode');
		$post->nama_obat = Input::get('nama_obat');
		$post->jenis_obat = Input::get('jenis_obat');
		$post->satuan = Input::get('satuan');
		$post->nama_produk = Input::get('nama_produk');
		$post->ket = Input::get('ket');
		$post->harga_jual = Input::get('harga_jual');
		$post->harga_beli = Input::get('harga_jual');
		$post->jumlah_stok = Input::get('jumlah_stok');
		
		$post->save();
		return redirect(url('stok/add'));

			}
	public function view_Stok()
	{

		$data = array('data'=>Promosi::all());
		return view('stok.add')->with($data);
	}
	public function add_Stok()
	{
		$data1 = array('data1'=>MasterProduk::all());
		return view('stok.add')->with($data1);
	}





}
