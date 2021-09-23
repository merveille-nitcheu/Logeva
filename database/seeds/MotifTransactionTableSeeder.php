<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\MotifTransaction;

class MotifTransactionTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('motifTransactions')->delete();

		// Add_aides
		MotifTransaction::create(array(
				'libelle' => 'Aides , allocations'
			));

		// Add_provisions
		MotifTransaction::create(array(
				'libelle' => ' Provisions sur charges'
			));

		// Add_chargesForfaitaires
		MotifTransaction::create(array(
				'libelle' => 'Charges forfaitaires'
			));

		// Add_assurance_Remboursement
		MotifTransaction::create(array(
				'libelle' => 'Assurance Remboursement'
			));

		// Add_loyer
		MotifTransaction::create(array(
				'libelle' => 'Loyer'
			));

		// Add_loyer_revision
		MotifTransaction::create(array(
				'libelle' => 'Loyer (révision)'
			));

		// Add_apurement_charges
		MotifTransaction::create(array(
				'libelle' => 'Apurement des charges'
			));

		// Add_depot_garantie 
		MotifTransaction::create(array(
				'libelle' => 'Dépôt de garantie'
			));

		// Add_honoraires comptables
		MotifTransaction::create(array(
				'libelle' => 'Honoraires comptables'
			));

		// Add_frais_huissier
		MotifTransaction::create(array(
				'libelle' => 'Frais d\'huissier'
			));

		// Add_charges_copropriete
		MotifTransaction::create(array(
				'libelle' => 'charges copropriété'
			));

		// Add_assurance_franchise
		MotifTransaction::create(array(
				'libelle' => 'Assurance - Franchise'
			));

		// Add_assurance_autres
		MotifTransaction::create(array(
				'libelle' => 'Assurance - Autre'
			));

		// Add_assurance_prime
		MotifTransaction::create(array(
				'libelle' => 'Assurance - Prime'
			));

		// Add_pret_assurance
		MotifTransaction::create(array(
				'libelle' => 'Prêt - Assurance'
			));

		// Add_pret_interets
		MotifTransaction::create(array(
				'libelle' => 'Prêt - Intérêts'
			));

		// Add_pret_amortissement
		MotifTransaction::create(array(
				'libelle' => 'Prêt - Amortissement'
			));

		// Add_taxe_ordures_menageres
		MotifTransaction::create(array(
				'libelle' => 'Taxe Ordures Ménagères' 
			));

		// Add_travaux
		MotifTransaction::create(array(
				'libelle' => 'Travaux'
			));

		// Add_impots
		MotifTransaction::create(array(
				'libelle' => 'impôts'
			));

		// Add_taxe_fonciere
		MotifTransaction::create(array(
				'libelle' => 'Taxe Foncière'
			));

		// Add_autre
		MotifTransaction::create(array(
				'libelle' => 'Autre'
			));
	}
}