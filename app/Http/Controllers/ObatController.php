<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ObatController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function anti_jamur()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%anti jamur%');
		return view('obat.antijamur.view')->with($s);
	}

	public function anti_septik()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%anti septik%');
		return view('obat.antiseptik.view')->with($s);
	}
	public function asam_urat()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%asam urat%');
		return view('obat.asamurat.view')->with($s);
	}
	public function balsem()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%balsem%');
		return view('obat.balsem.view')->with($s);
	}
	public function batuk_berdahak()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%batuk berdahak%');
		return view('obat.berdahak.view')->with($s);
	}
	public function batuk_pilek()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%batuk%pilek%');
		return view('obat.batukpilek.view')->with($s);
	}
	public function demam()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%demam%');
		return view('obat.demam.view')->with($s);
	}
	public function diare()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%diare%');
		return view('obat.diare.view')->with($s);
	}
	public function gatal()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%gatal%');
		return view('obat.gatal.view')->with($s);
	}
	public function gatal_alergi()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%gatal%alergi%');
		return view('obat.gatalalergi.view')->with($s);
	}
	public function jerawat()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%jerawat%');
		return view('obat.jerawat.view')->with($s);
	}
	public function kalsium()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%kalsium%');
		return view('obat.kalsium.view')->with($s);
	}
	public function lambung()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%lambung%');
		return view('obat.lambung.view')->with($s);
	}
	public function mata()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%mata%');
		return view('obat.mata.view')->with($s);
	}
	public function sesak()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%sesak%');
		return view('obat.sesak.view')->with($s);
	}
	public function pencahar()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%pencahar%');
		return view('obat.pencahar.view')->with($s);
	}
	public function pilek()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%pilek%');
		return view('obat.pilek.view')->with($s);
	}
	public function sariawan()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%sariawan%');
		return view('obat.sariawan.view')->with($s);
	}
	public function susu()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%susu%');
		return view('obat.susu.view')->with($s);
	}
	public function vitamin()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%vitamin%');
		return view('obat.vitamin.view')->with($s);
	}
	public function vitamin_anak()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%vitamin%anak%');
		return view('obat.vitaminanak.view')->with($s);
	}
	public function panas()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%panas%');
		return view('obat.panas.view')->with($s);
	}
	public function suplemen()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%suplemen%');
		return view('obat.suplemen.view')->with($s);
	}
	public function mulut_tenggorokan()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%mulut%tenggorokan%');
		return view('obat.muluttenggorokan.view')->with($s);
	}
	public function madu()
	{
		$s['pembelian'] = \App\Pembelian::all()->where('guna','like','%madu%');
		return view('obat.madu.view')->with($s);
	}
}
