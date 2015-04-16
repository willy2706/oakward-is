<?php namespace App\Http\Controllers;
use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
class ProdukController extends Controller {

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
		$p = Produk::all();
		return view('produk.index')->withproduks($p);
	}

	public function getCreate()
	{
		$produk = new Produk;
		// return response('aaaaa');
		return view('produk.create')->withproduk($produk);
	}

	public function postCreate(Request $request) {
		// var_dump();exit;
		// return response($request->file('foto'));
		$r = $request->all();
		$produk = new Produk;
		$produk->fill($r);
		if (\Request::hasFile('foto')) {
			$ext = \Request::file('foto')->getClientOriginalExtension();
			$dest = public_path() . '/foto/';
			$filename = 'produk_' . time() . '.' . $ext;
			\Request::file('foto')->move($dest, $filename);
			$produk->gambar = '/foto/'.$filename;
		}
		$produk->save();
		return Redirect::to('produk')->withalert('produk berhasil ditambahkan');
	}

	public function getUpdate($id) {
		$produk = Produk::find($id);
		return view('produk.create')->withproduk($produk);
	}

	public function postUpdate($id, Request $request) {
		// return response($request->all());
		$produk = Produk::find($id);
		$produk->fill($request->all());
		if (\Request::hasFile('foto')) {
			$ext = \Request::file('foto')->getClientOriginalExtension();
			$dest = public_path() . '/foto/';
			$filename = 'produk_' . time() . '.' . $ext;
			\Request::file('foto')->move($dest, $filename);
			$produk->gambar = '/foto/'.$filename;
		}
		$produk->save();
		return Redirect::to('produk')->withalert('produk berhasil diubah');
	}

	// public function getDelete($id, Request $request) {
	// 	$produk = Produk::find($id);
	// 	$produk->delete();
	// 	return Redirect::to('produk')->withalert('produk berhasil dihapus');
	// }

}
