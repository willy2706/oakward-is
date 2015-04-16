<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesan extends Model {
	protected $fillable = ['nama', 'alamat', 'telepon'];
	protected $table = 'pemesan';
	public $timestamps = false;
	public function user() {
		return $this->belongsTo('App\User','id_marketing','id');
	}
	public function memesan() {
		return $this->hasMany('App\Memesan', 'id_pemesan', 'id');
	}
}