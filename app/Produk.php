<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model {
	protected $fillable = ['nama', 'deskripsi', 'stok', 'harga', 'gambar'];
	protected $table = 'produk';
	public $timestamps = false;
}