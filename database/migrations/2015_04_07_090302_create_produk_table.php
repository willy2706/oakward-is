<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produk', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama');
			$table->string('desrkipsi');
			$table->integer('stok')->unsigned();
			$table->string('harga');
			$table->string('gambar');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produk');
	}

}
