<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalizationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personalizations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('customer_id')->unsigned();
			$table->integer('milk_id')->unsigned();
			$table->integer('modality_id')->unsigned();
			$table->integer('option_id')->unsigned();
			$table->integer('type_id')->unsigned();
			$table->string('code');
			$table->integer('size');
			$table->integer('step');
			$table->integer('transaction');
			$table->timestamps();

			$table->foreign('customer_id')->references('id')->on('customers');
			$table->foreign('milk_id')->references('id')->on('milks');
			$table->foreign('modality_id')->references('id')->on('modalities');
			$table->foreign('option_id')->references('id')->on('options');
			$table->foreign('type_id')->references('id')->on('types');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personalizations');
	}

}
