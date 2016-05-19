<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembeliansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pembelians', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_obat');
			$table->string('jenis_obat');
			$table->string('keluhan');
			$table->string('guna');
			$table->string('dosis');
			$table->string('harga');
			$table->string('jumlah_obat');
			$table->string('total');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pembelians');
	}

}
