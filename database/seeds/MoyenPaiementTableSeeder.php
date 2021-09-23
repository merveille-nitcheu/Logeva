<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\MoyenPaiement;

class MoyenPaiementTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('moyensPaiements')->delete();

		// Add_virement
		MoyenPaiement::create(array(
				'libelle' => 'virement'
			));

		// Add_cheque
		MoyenPaiement::create(array(
				'libelle' => 'chèque'
			));

		// Add_prelevement
		MoyenPaiement::create(array(
				'libelle' => 'prélèvement'
			));

		// Add_especes
		MoyenPaiement::create(array(
				'libelle' => 'espèces'
			));

		// Add_autre
		MoyenPaiement::create(array(
				'libelle' => 'autre'
			));
	}
}