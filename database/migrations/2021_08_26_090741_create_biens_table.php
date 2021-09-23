<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBiensTable extends Migration {

	public function up()
	{
		Schema::create('biens', function(Blueprint $table) {
			$table->string('slug', 255)->nullable();
			$table->increments('id');
			$table->integer('id_typeBien')->unsigned();
			$table->integer('id_proprietaire')->unsigned();
			$table->string('nom', 255);
			$table->integer('nombre_piece')->default('1');
			$table->float('surface');
			$table->string('adresse', 255);
			$table->string('ville', 255);
			$table->string('pays', 255);
			$table->string('code_postal', 255)->nullable();
			$table->string('description', 255)->nullable();
			$table->string('centre_imposition', 255)->nullable();
			$table->integer('nombre_lot')->nullable();
			$table->integer('nombre_batiment')->nullable();
			$table->integer('nombre_etage')->nullable();
			$table->integer('nombre_escalier')->nullable();
			$table->integer('numero_porte')->nullable();
			$table->string('zone_stationnement', 255)->nullable()->default('non');
			$table->string('garage', 255)->nullable()->default('non');
			$table->string('cave', 255)->nullable()->default('non');
			$table->string('autres_dependance', 255)->nullable()->default('Aucune');
			$table->string('gardiennage', 255)->nullable()->default('non');
			$table->string('interphone', 255)->nullable()->default('non');
			$table->string('ascenseur', 255)->nullable()->default('non');
			$table->string('vide_ordure', 255)->nullable()->default('non');
			$table->string('espaces_vert', 255)->nullable()->default('non');
			$table->string('chauffage_collectif', 255)->nullable()->default('non');
			$table->string('eau_chaude_collective', 255)->nullable()->default('non');
			$table->string('antenne_tv_collective', 255)->nullable()->default('non');
			$table->string('autre_elements_collectif', 255)->nullable()->default('Aucun');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('biens');
	}
}