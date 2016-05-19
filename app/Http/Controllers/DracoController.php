<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Blog;
use App\Promosi;
use App;
use Illuminate\Support\Facades\Input;

class DracoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function index()
	{
		$data = \App\Blog::all();
		return view('blog.all')->with('data',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('blog.add');
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

}
