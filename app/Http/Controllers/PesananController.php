<?php namespace App\Http\Controllers;
use App\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Auth;
class PesananController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getIndex() {
		// $pt = Pesanan::find(1);
		// $px = $pt->user->nama;
		// var_dump($px);
		$p = Pesanan::all();
		return view('pesanan.index')->withpesanans($p);
	}

	public function getCreate()
	{
		$pesanan = new Pesanan;
		// return response('aaaaa');
		return view('pesanan.create')->withpesanan($pesanan);
	}

	public function postCreate(Request $request) {
		$r = $request->all();
		$pesanan = new Pesanan;
		$pesanan->fill($r);
		$pesanan->id_marketing = Auth::user()->id;
		$pesanan->save();
		return Redirect::to('pesanan')->withalert('pesanan berhasil ditambahkan');
	}

	public function getUpdate($id) {
		$pesanan = Pesanan::find($id);
		return view('pesanan.create')->withpesanan($pesanan);
	}

	public function postUpdate($id, Request $request) {
		// return response($request->all());
		$pesanan = Pesanan::find($id);
		$pesanan->fill($request->all());
		$pesanan->save();
		return Redirect::to('pesanan')->withalert('pesanan berhasil diubah');
	}
}
