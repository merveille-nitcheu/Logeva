<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUtilisateursTable extends Migration {

	public function up()
	{
		Schema::create('utilisateurs', function(Blueprint $table) {
			$table->string('slug', 255)->nullable();
			$table->increments('id');
			$table->string('nom', 255);
			$table->string('email', 255);
			$table->string('login', 255);
			$table->string('password', 255);
			$table->string('telephone', 255);
			$table->string('etat', 255);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('utilisateurs');
	}
}