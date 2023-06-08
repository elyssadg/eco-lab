<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Like;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $uniqueLikes = [];

        for ($i = 0; $i < 120; $i++) {
            $userId = rand(1, 6);
            $threadId = rand(1, 6);

            $like = ['thread_id' => $threadId, 'user_id' => $userId];

            if (!in_array($like, $uniqueLikes)) {
                Like::create($like);
                $uniqueLikes[] = $like;
            }
        }
    }
}
