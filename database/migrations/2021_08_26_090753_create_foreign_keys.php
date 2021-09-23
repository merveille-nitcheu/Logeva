<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('biens', function(Blueprint $table) {
			$table->foreign('id_typeBien')->references('id')->on('typeBiens')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('biens', function(Blueprint $table) {
			$table->foreign('id_proprietaire')->references('id')->on('proprietaires')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('locatairesBiens', function(Blueprint $table) {
			$table->foreign('id_locataire')->references('id')->on('locataires')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('locatairesBiens', function(Blueprint $table) {
			$table->foreign('id_location')->references('id')->on('locations')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('locations', function(Blueprint $table) {
			$table->foreign('id_bien')->references('id')->on('biens')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('locations', function(Blueprint $table) {
			$table->foreign('id_periodePaiement')->references('id')->on('periodesPaiements')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('locations', function(Blueprint $table) {
			$table->foreign('id_moyenPaiement')->references('id')->on('moyensPaiements')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('paiements', function(Blueprint $table) {
			$table->foreign('id_location')->references('id')->on('locations')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('transactions', function(Blueprint $table) {
			$table->foreign('id_proprietaire')->references('id')->on('proprietaires')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('transactions', function(Blueprint $table) {
			$table->foreign('id_bien')->references('id')->on('biens')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('transactions', function(Blueprint $table) {
			$table->foreign('id_motifTransaction')->references('id')->on('motifTransactions')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('transactions', function(Blueprint $table) {
			$table->foreign('id_frequence')->references('id')->on('periodesPaiements')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('abonnements', function(Blueprint $table) {
			$table->foreign('id_proprietaire')->references('id')->on('proprietaires')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('abonnements', function(Blueprint $table) {
			$table->foreign('id_typeAbonnement')->references('id')->on('typeAbonnements')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('galeries', function(Blueprint $table) {
			$table->foreign('id_bien')->references('id')->on('biens')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('biens', function(Blueprint $table) {
			$table->dropForeign('biens_id_typeBien_foreign');
		});
		Schema::table('biens', function(Blueprint $table) {
			$table->dropForeign('biens_id_proprietaire_foreign');
		});
		Schema::table('locatairesBiens', function(Blueprint $table) {
			$table->dropForeign('locatairesBiens_id_locataire_foreign');
		});
		Schema::table('locatairesBiens', function(Blueprint $table) {
			$table->dropForeign('locatairesBiens_id_location_foreign');
		});
		Schema::table('locations', function(Blueprint $table) {
			$table->dropForeign('locations_id_bien_foreign');
		});
		Schema::table('locations', function(Blueprint $table) {
			$table->dropForeign('locations_id_periodePaiement_foreign');
		});
		Schema::table('locations', function(Blueprint $table) {
			$table->dropForeign('locations_id_moyenPaiement_foreign');
		});
		Schema::table('paiements', function(Blueprint $table) {
			$table->dropForeign('paiements_id_location_foreign');
		});
		Schema::table('transactions', function(Blueprint $table) {
			$table->dropForeign('transactions_id_proprietaire_foreign');
		});
		Schema::table('transactions', function(Blueprint $table) {
			$table->dropForeign('transactions_id_bien_foreign');
		});
		Schema::table('transactions', function(Blueprint $table) {
			$table->dropForeign('transactions_id_motifTransaction_foreign');
		});
		Schema::table('transactions', function(Blueprint $table) {
			$table->dropForeign('transactions_id_frequence_foreign');
		});
		Schema::table('abonnements', function(Blueprint $table) {
			$table->dropForeign('abonnements_id_proprietaire_foreign');
		});
		Schema::table('abonnements', function(Blueprint $table) {
			$table->dropForeign('abonnements_id_typeAbonnement_foreign');
		});
		Schema::table('galeries', function(Blueprint $table) {
			$table->dropForeign('galeries_id_bien_foreign');
		});
	}
}