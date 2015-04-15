<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Memesan extends Model {
	// protected $fillable = ['tanggal', 'jumlah'];
	protected $table = 'memesan';
	public $timestamps = false;
	public function pemesan() {
		return $this->belongsTo('App\Pemesan','id_pemesan','id');
	}
	public function produk() {
		return $this->belongsTo('App\Produk','id_produk','id');
	}
}