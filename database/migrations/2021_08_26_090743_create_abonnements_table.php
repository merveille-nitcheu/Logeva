<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAbonnementsTable extends Migration {

	public function up()
	{
		Schema::create('abonnements', function(Blueprint $table) {
			$table->string('slug', 255);
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('id_proprietaire')->unsigned();
			$table->integer('id_typeAbonnement')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('abonnements');
	}
}