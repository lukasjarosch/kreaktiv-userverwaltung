<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personen', function($t) {
			$t->increments('id');
			$t->string('vorname', 50);
			$t->string('nachname', 50);
			$t->date('geburtsdatum');
			$t->string('geburtsort', 50);
			$t->string('handynummer', 35);
			$t->string('telefonnummer', 35);
			$t->string('email'); // Varchar limit
			$t->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personen');
	}

}
