<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Pemesan;
class HomeController extends Controller {

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

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return new RedirectResponse(url('produk'));
	}

	public function search(Request $request) {
		$k = $request->all()['keyword'];
		if ($k == null) $k = '';
		// return response($k);
		$p = Pemesan::where('nama','LIKE', '%'.$k.'%')->get();
		return view('pesanan.index')->withpesanans($p);
		return response('ok');
	}

}
