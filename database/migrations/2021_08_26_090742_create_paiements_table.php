<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaiementsTable extends Migration {

	public function up()
	{
		Schema::create('paiements', function(Blueprint $table) {
			$table->string('slug', 255)->nullable();
			$table->increments('id');
			$table->integer('id_location')->unsigned()->nullable();
			$table->date('date');
			$table->string('etat_paiement', 255)->nullable()->default('non payé');
			$table->string('local_code_paiement', 255)->nullable();
			$table->string('online_code_paiement', 255)->nullable();
			$table->string('statut', 255)->nullable();
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('paiements');
	}
}