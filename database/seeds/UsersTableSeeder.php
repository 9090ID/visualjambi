<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $owner = User::create([
            'name' => 'Rio Aditya',
            'email' => 'rioaditya92@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        $owner->assignRole('owner');
         $owner = User::create([
            'name' => 'Farhan',
            'email' => 'farhan@unja.ac.id',
            'password' => bcrypt('farhan2020'),
        ]);
         $owner->assignRole('owner');
          $owner = User::create([
            'name' => 'Admin Visual Jambi',
            'email' => 'visualjambi@gmail.com',
            'password' => bcrypt('visualjambi2020'),
        ]);
        $owner->assignRole('owner');

        $kasir = User::create([
            'name' => 'Sintia Sari',
            'email' => 'sintiasari@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        $kasir->assignRole('kasir');
    }
}
