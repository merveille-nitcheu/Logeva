<?php

use Illuminate\Database\Seeder;
use App\Locataire;
class LocataireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Locataire::create([
            'slug' => Str::random(10),
            'nom' =>'merveille', 
            'email' => 'merveillenitcheu12@gmail.com',
            'login' => 'merv1',
            'password' =>'12345678',
            'telephone' => random_int(6,9),
            'etat' => Str::random(10)
        ]);
    }
}
