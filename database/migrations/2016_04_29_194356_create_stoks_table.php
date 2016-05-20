<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stoks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('kode');
			$table->string('nama_obat');
			$table->string('jenis_obat');
			$table->string('satuan');
			$table->string('kegunaan');
			$table->string('harga_beli');
			$table->string('harga_jual');
			$table->string('jumlah_stok');
			$table->date('tanggal_masuk');
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
		Schema::drop('stoks');
	}

}
