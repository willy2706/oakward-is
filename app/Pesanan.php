<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model {
	protected $fillable = ['nama', 'alamat', 'telepon'];
	protected $table = 'pemesan';
	public $timestamps = false;
	public function user() {
		return $this->belongsTo('App\User','id_marketing','id');
	}
}