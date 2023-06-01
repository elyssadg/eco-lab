<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Thread;
use Faker\Factory as Faker;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 3; $i++) {
            Thread::create([
                'user_id' => 1, 
                'title' => $faker->sentence,
                'message' => $faker->paragraph,
                'image' => 'null',
                'posting_date' => $faker->dateTimeThisMonth(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        for ($i = 1; $i <= 3; $i++) {
            Thread::create([
                'user_id' => 2, 
                'title' => $faker->sentence,
                'message' => $faker->paragraph,
                'image' => 'null',
                'posting_date' => $faker->dateTimeThisMonth(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
