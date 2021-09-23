<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypeAbonnementsTable extends Migration {

	public function up()
	{
		Schema::create('typeAbonnements', function(Blueprint $table) {
			$table->string('slug', 255)->nullable();
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('libelle', 255)->nullable();
			$table->string('prix', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('typeAbonnements');
	}
}