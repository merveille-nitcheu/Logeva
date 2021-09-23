<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocatairesBiensTable extends Migration {

	public function up()
	{
		Schema::create('locatairesBiens', function(Blueprint $table) {
			$table->string('slug', 255)->nullable();
			$table->integer('id_locataire')->unsigned();
			$table->increments('id');
			$table->integer('id_location')->unsigned();
			$table->timestamps();
			$table->string('etat_contrat', 255)->nullable()->default('envoyé');
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('locatairesBiens');
	}
}