<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\TypeBien;

class TypeBienTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('typeBiens')->delete();

		// Add_appartement
		TypeBien::create(array(
				'libelle' => 'appartement'
			));

		// Add_maison
		TypeBien::create(array(
				'libelle' => 'maison'
			));

		// Add_garage
		TypeBien::create(array(
				'libelle' => 'garage'
			));

		// Add_bureau
		TypeBien::create(array(
				'libelle' => 'bureau'
			));

		// Add_local
		TypeBien::create(array(
				'libelle' => 'local'
			));

		// Add_commercial
		TypeBien::create(array(
				'libelle' => 'commercial'
			));

		// Add_terrain
		TypeBien::create(array(
				'libelle' => 'terrain'
			));
	}
}