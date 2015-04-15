<?php namespace App\Http\Controllers;
use App\Pemesan;
use App\Memesan;
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
		$p = Pemesan::all();
		return view('pesanan.index')->withpesanans($p);
	}

	public function getView($id) {
		$p = Pemesan::find($id);
		$m = Memesan::where('id_pemesan', $id)->get();
		return view('pesanan.view')->withpesanan($p)->withmemesans($m);
	}

	public function getCreate()
	{
		$pesanan = new Pemesan;
		return view('pesanan.create')->withpesanan($pesanan);
	}

	public function postCreate(Request $request) {
		$r = $request->all();
		$pesanan = new Pemesan;
		$pesanan->fill($r);
		$pesanan->id_marketing = Auth::user()->id;
		$pesanan->save();
		for ($i=1; $i<count($request['id_produk']); $i++) {
			$memesan = new Memesan;
			$memesan->id_pemesan = $pesanan->id;
			$memesan->id_produk = $request['id_produk'][$i];
			// $memesan->tanggal = ;
			$memesan->jumlah = $request['jumlah_' . $i];
			$memesan->save();
		}
		return Redirect::to('pesanan')->withalert('pesanan berhasil ditambahkan');
	}

	public function getUpdate($id) {
		$pesanan = Pemesan::find($id);
		$memesan = Memesan::where('id_pemesan', $id)->get();
		return view('pesanan.create')->withpesanan($pesanan)->withmemesan($memesan);
	}

	public function postUpdate($id, Request $request) {
		// return response($request->all());
		$pesanan = Pemesan::find($id);
		$pesanan->fill($request->all());
		$pesanan->save();
		$memesan->where('id_produk', $id)->delete();
		for ($i=1; $i<count($request['id_produk']); $i++) {
			$memesan = new Memesan;
			$memesan->id_pemesan = $pesanan->id;
			$memesan->id_produk = $request['id_produk'][$i];
			// $memesan->tanggal = ;
			$memesan->jumlah = $request['jumlah_' . $i];
			$memesan->save();
		}
		return Redirect::to('pesanan')->withalert('pesanan berhasil diubah');
	}
}
