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
    }
}
