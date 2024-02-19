<?php

use Illuminate\Database\Seeder;
use App\Utilisateur;
use Illuminate\Support\Facades\Hash;
class UtilisateurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
      public function run()
    {
          Utilisateur::create([
            'slug' => Str::random(10),
            'nom' =>'admin', 
            'email' => 'merveille12@gmail.com',
            'login' => 'super',
            'password' =>Hash::make('12345678'),
            'telephone' => random_int(6,9),
            'etat' => Str::random(10)
        ]);
    }

}
