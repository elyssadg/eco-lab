<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'elys@gmail.com',
            'username' => 'elyssadg',
            'full_name' => 'Elyssa Davina Giovanni',
            'password' => bcrypt('elys123'),
            'gender' => 'female',
            'birthday' => Carbon::parse('2003-08-28')
        ]);

        User::create([
            'email' => 'guido@gmail.com',
            'username' => 'guido',
            'full_name' => 'Guido William',
            'password' => bcrypt('guido123'),
            'gender' => 'male',
            'birthday' => Carbon::parse('2003-11-11')
        ]);

        User::create([
            'email' => 'vincentius@gmail.com',
            'username' => 'vincentius',
            'full_name' => 'Vincentius Jericho',
            'password' => bcrypt('vije123'),
            'gender' => 'male',
            'birthday' => Carbon::parse('2003-12-17')
        ]);

        User::create([
            'email' => 'desu@gmail.com',
            'username' => 'desu',
            'full_name' => 'Devin Suhandi',
            'password' => bcrypt('desu123'),
            'gender' => 'male',
            'birthday' => Carbon::parse('2004-01-09')
        ]);

        User::create([
            'email' => 'delu@gmail.com',
            'username' => 'delu',
            'full_name' => 'Devin Luize Saan',
            'password' => bcrypt('delu123'),
            'gender' => 'male',
            'birthday' => Carbon::parse('2003-11-11')
        ]);

        User::create([
            'email' => 'kelson@gmail.com',
            'username' => 'kelson',
            'full_name' => 'Kelson Edbert Susilo',
            'password' => bcrypt('kelson123'),
            'gender' => 'male',
            'birthday' => Carbon::parse('2003-07-05')
        ]);
    }
}
