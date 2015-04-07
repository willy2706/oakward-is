<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemesanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('memesan', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_pemesan')->unsigned();
			$table->foreign('id_pemesan')->references('id')->on('pemesan');
			$table->integer('id_produk')->unsigned();
			$table->foreign('id_produk')->references('id')->on('produk');
			$table->date('tanggal');
			$table->integer('jumlah');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('memesan');
	}

}
