<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTable extends Migration {

	public function up()
	{
		Schema::create('messages', function(Blueprint $table) {
			$table->string('slug')->nullable();
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->text('contenu')->nullable();
			$table->string('libelle', 255)->nullable();
			$table->integer('id_recepteur')->nullable();
			$table->integer('id_expediteur')->nullable();
			$table->string('recepteur_cible', 255)->nullable();
			$table->string('expediteur_cible', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('messages');
	}
}