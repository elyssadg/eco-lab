<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Thread;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Thread::create([
            'user_id' => 1,
            'title' => 'Does eco enzyme really affect the environment?',
            'message' => 'I really want to know does eco enzyme really affect the environment in that way?',
            'posting_date' => '2023-05-28 01:45:32'
        ]);

        Thread::create([
            'user_id' => 2,
            'title' => 'How is eco enzyme made?',
            'message' => 'I am making a eco enzyme but i need some help can someone give me the process of making eco enzyme',
            'posting_date' => '2023-05-14 12:34:18'
        ]);

        Thread::create([
            'user_id' => 3,
            'title' => 'Eco Enzyme Advantages',
            'message' => 'What are the advantages of eco enzyme compares to conventional chemical',
            'posting_date' => '2023-05-12 23:23:15'
        ]);

        Thread::create([
            'user_id' => 4,
            'title' => 'Limitation of Eco enzyme',
            'message' => 'While eco enzyme has many benefits is there is any limitation or precautions of using eco enzyme?',
            'posting_date' => '2023-05-02 15:12:42'
        ]);

        Thread::create([
            'user_id' => 5,
            'title' => 'Eco Enzyme for Agricultural',
            'message' => 'Can eco enzyme be used for agricultural purposes, such as improving crop yield or soil health?',
            'posting_date' => '2023-05-04 16:57:52'
        ]);

        Thread::create([
            'user_id' => 6,
            'title' => 'Variation Eco-Enzyme',
            'message' => 'Are there any variations or different types of eco enzyme available, and what are their specific uses?',
            'posting_date' => '2023-03-06 06:56:18'
        ]);

        $faker = Faker::create();

        $titleList = [
            "Benefits of Using Eco-Enzyme",
            "How to Make Eco-Enzyme at Home?",
            "Eco-Enzyme for Cleaning Purposes",
            "Eco-Enzyme as a Natural Fertilizer",
            "The Science Behind Eco-Enzyme",
            "Eco-Enzyme: A Sustainable Solution",
            "Eco-Enzyme vs. Chemical Cleaners: A Comparison",
            "Eco-Enzyme: An Eco-Friendly Alternative",
            "Using Eco-Enzyme for Waste Management",
            "The Role of Enzymes in Eco-Enzyme",
            "Eco-Enzyme and its Impact on Soil Health",
            "Eco-Enzyme for Odor Elimination",
            "Eco-Enzyme and Water Conservation",
            "Eco-Enzyme: A Natural Pest Repellent",
            "The Versatility of Eco-Enzyme",
            "Eco-Enzyme: An Affordable Solution",
            "Eco-Enzyme and Sustainable Agriculture",
            "Eco-Enzyme for Septic Tank Maintenance",
            "Eco-Enzyme and Household Cleaning",
            "Eco-Enzyme and Organic Waste Decomposition",
            "Eco-Enzyme: A Renewable Resource",
            "Eco-Enzyme and Composting",
            "Eco-Enzyme: Safe for Pets and Children?",
            "Eco-Enzyme and Grease Removal",
            "Eco-Enzyme: A Non-Toxic Alternative",
            "Eco-Enzyme and Industrial Applications",
            "Eco-Enzyme: Reducing Environmental Footprint",
            "Eco-Enzyme and Stain Removal",
            "Eco-Enzyme: A Green Solution for Laundry",
            "Eco-Enzyme: Benefits for the Home Garden",
        ];

        $messageList = [
            "What are the benefits of using eco-enzyme?",
            "Can you provide a step-by-step guide on making eco-enzyme at home?",
            "How can eco-enzyme be used for cleaning purposes?",
            "What are the advantages of using eco-enzyme as a natural fertilizer?",
            "What is the scientific explanation behind eco-enzyme?",
            "How does eco-enzyme contribute to sustainability?",
            "What are the differences between eco-enzyme and chemical cleaners?",
            "How eco-friendly is eco-enzyme compared to other alternatives?",
            "In what ways can eco-enzyme be used for waste management?",
            "What is the role of enzymes in eco-enzyme production?",
            "How does eco-enzyme affect soil health?",
            "Can eco-enzyme effectively eliminate odors?",
            "How does eco-enzyme contribute to water conservation?",
            "Is eco-enzyme a natural repellent for pests?",
            "What are the different applications of eco-enzyme?",
            "Is eco-enzyme an affordable solution for everyday use?",
            "How does eco-enzyme support sustainable agriculture practices?",
            "How can eco-enzyme be used for septic tank maintenance?",
            "Can eco-enzyme be used for various household cleaning tasks?",
            "How does eco-enzyme facilitate organic waste decomposition?",
            "Is eco-enzyme a renewable resource?",
            "How does eco-enzyme contribute to composting processes?",
            "Is eco-enzyme safe for pets and children?",
            "How effective is eco-enzyme in removing grease?",
            "Is eco-enzyme a non-toxic alternative to conventional cleaners?",
            "What are the industrial applications of eco-enzyme?",
            "How does eco-enzyme help reduce environmental footprint?",
            "Can eco-enzyme effectively remove stains?",
            "How does eco-enzyme provide a green solution for laundry?",
            "What are the benefits of using eco-enzyme in home gardening?",
        ];

        $data = [];

        for ($index = 0; $index < count($titleList); $index++) {
            $userId = $faker->numberBetween(1, 6);
            $title = $titleList[$index];
            $message = $messageList[$index];
            $postingDate = $faker->dateTimeBetween('2023-04-01', '2023-06-10');
            $createdAt = Carbon::parse($postingDate)->subSeconds(1);
            $updatedAt = $createdAt;

            Thread::create([
                'user_id' => $userId,
                'title' => $title,
                'message' => $message,
                'posting_date' => $postingDate,
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
            ]);
        }
    }
}
