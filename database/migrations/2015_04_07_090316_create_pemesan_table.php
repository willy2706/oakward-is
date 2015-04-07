<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pemesan', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_marketing')->unsigned();
			$table->foreign('id_marketing')->references('id')->on('user');
			$table->string('nama');
			$table->string('alamat');
			$table->string('telepon');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pemesan');
	}

}
