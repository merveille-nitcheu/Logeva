<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationsTable extends Migration {

	public function up()
	{
		Schema::create('locations', function(Blueprint $table) {
			$table->string('slug', 255)->nullable();
			$table->increments('id');
			$table->integer('id_bien')->unsigned();
			$table->integer('id_periodePaiement')->unsigned();
			$table->integer('id_moyenPaiement')->unsigned();
			$table->string('duree', 255);
			$table->date('date_debut');
			$table->string('loyer_initial', 255);
			$table->string('charge', 255);
			$table->string('type_charge', 255);
			$table->integer('jour_paiement');
			$table->string('clause_revision_loyer', 255)->nullable()->default('non');
			$table->string('indice_reference', 255)->nullable();
			$table->string('description_bail', 255)->nullable()->default('non');
			$table->string('clause_particuliere', 255)->nullable()->default('non');
			$table->string('garant_solidaire', 255)->nullable()->default('non');
			$table->string('valider_automatiquement_paiement', 255)->nullable()->default('non');
			$table->string('envoyer_automatiquement_cheance', 255)->nullable()->default('non');
			$table->string('envoyer_automatiquement_quittance', 255)->nullable()->default('non');
			$table->string('rappeler_automatiquement_revision_loyer', 255)->nullable()->default('non');
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('locations');
	}
}