<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionsTable extends Migration {

	public function up()
	{
		Schema::create('transactions', function(Blueprint $table) {
			$table->string('slug', 255)->nullable();
			$table->increments('id');
			$table->integer('id_proprietaire')->unsigned()->nullable();
			$table->integer('id_bien')->unsigned()->nullable();
			$table->integer('id_motifTransaction')->unsigned()->nullable();
			$table->integer('id_frequence')->unsigned()->nullable();
			$table->string('type_paiement', 255)->nullable();
			$table->date('date_paiement')->nullable();
			$table->decimal('montant')->nullable();
			$table->string('statut', 255)->nullable();
			$table->string('imputer_sur_quittance', 255)->nullable()->default('non');
			$table->date('date_debut')->nullable();
			$table->date('date_fin')->nullable();
			$table->string('commentaire', 255)->nullable();
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('transactions');
	}
}