<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\PeriodePaiement;

class PeriodePaiementTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('periodesPaiements')->delete();

		// Add_mensuel
		PeriodePaiement::create(array(
				'libelle' => 'mensuel'
			));

		// Add_trimestriel
		PeriodePaiement::create(array(
				'libelle' => 'trimestriel'
			));

		// Add_semestriel
		PeriodePaiement::create(array(
				'libelle' => 'semestriel'
			));

		// Add_annuel
		PeriodePaiement::create(array(
				'libelle' => 'annuel'
			));

		// Add_quotidien
		PeriodePaiement::create(array(
				'libelle' => 'quotidien'
			));

		// Add_hebdomadaire
		PeriodePaiement::create(array(
				'libelle' => 'hebdomadaire'
			));

		// Add_horaire
		PeriodePaiement::create(array(
				'libelle' => 'horaire'
			));
	}
}