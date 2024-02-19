<?php

use Illuminate\Database\Seeder;
use App\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create(array(
              
          'nom' => 'super',
          'email' => 'merveillenitcheu12@gmail.com',
          'password' => 'admin1',
          'role' => 'admin'
        ));


        User::create(array(
              
          'nom' => 'super',
          'email' => 'merveillenitcheu@gmail.com',
          'password' => 'proprietaire1',
          'role' => 'proprietaire'
        ));

        User::create(array(
              
          'nom' => 'super',
          'email' => 'marilainenitcheu@gmail.com',
          'password' => 'locataire1',
          'role' => 'locataire'
        ));
    }
}
