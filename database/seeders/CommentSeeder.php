<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use Faker\Factory as Faker;
use Carbon\Carbon;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'user_id' => 1,
            'thread_id' => 5,
            'message' => 'Yes, Eco enzyme enhances soil fertility, structure, and crop yield. It breaks down organic matter, boosts nutrient availability, and encourages beneficial microbes for healthy plant growth.',
            'posting_date' => '2023-03-06 14:25:43'
        ]);

        Comment::create([
            'user_id' => 2,
            'thread_id' => 5,
            'message' => 'Eco enzyme enhances soil fertility, structure, and crop yield. It breaks down organic matter, boosts nutrient availability, and encourages beneficial microbes for healthy plant growth.',
            'posting_date' => '2023-03-07 06:23:18'
        ]);

        Comment::create([
            'user_id' => 3,
            'thread_id' => 5,
            'message' => 'Yes, eco enzyme has shown potential for enhancing crop yield and soil health. It aids organic matter decomposition, nutrient availability, soil structure improvement.',
            'posting_date' => '2023-03-08 03:54:12'
        ]);

        Comment::create([
            'user_id' => 1,
            'thread_id' => 3,
            'message' => 'Eco enzyme is eco-friendly and biodegradable unlike harsh chemical cleaners. Conventional cleaners harm aquatic life and the environment, while eco enzyme derived from natural sources poses minimal risks.',
            'posting_date' => '2023-03-06 06:56:18'
        ]);

        Comment::create([
            'user_id' => 2,
            'thread_id' => 3,
            'message' => 'Eco enzyme is safer for human health compared to chemical cleaners containing irritants or hazardous substances. It\'s a preferred choice for individuals with sensitivities, households with children/pets, or those seeking to minimize exposure.',
            'posting_date' => '2023-03-06 07:12:12'
        ]);

        Comment::create([
            'user_id' => 3,
            'thread_id' => 3,
            'message' => 'Eco enzymes offer sustainable and cost-effective cleaning solutions. They use waste materials, reducing reliance on virgin resources. Eco enzyme production is simple and can save money. Help minimize carbon footprint.',
            'posting_date' => '2023-03-06 23:52:15'
        ]);

        Comment::create([
            'user_id' => 1,
            'thread_id' => 4,
            'message' => 'Eco enzymes are sensitive to extreme temperatures and pH levels. Store them properly. Avoid mixing with strong acids or bases. Maintain stability and effectiveness.',
            'posting_date' => '2023-03-06 06:56:18'
        ]);

        Comment::create([
            'user_id' => 2,
            'thread_id' => 4,
            'message' => 'Follow dilution ratios and application guidelines for optimal results and to avoid damage. Proper application ensures performance.',
            'posting_date' => '2023-03-06 12:23:34'
        ]);

        Comment::create([
            'user_id' => 3,
            'thread_id' => 4,
            'message' => 'Eco enzymes may have a distinct odor. Ensure ventilation during application. Consider personal sensitivities and preferences.',
            'posting_date' => '2023-03-06 15:23:34'
        ]);

        Comment::create([
            'user_id' => 4,
            'thread_id' => 4,
            'message' => 'Check compatibility with specific materials before use. Some surfaces may require specialized cleaning methods. Perform a patch test for compatibility.',
            'posting_date' => '2023-03-06 12:12:15'
        ]);


    }
}
