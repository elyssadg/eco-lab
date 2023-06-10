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

        $faker = Faker::create();

        $messageList = [
            "The benefits of using eco-enzyme include natural cleaning, waste management, soil improvement, water conservation, and reduced environmental impact.",
            "Certainly! Here is a step-by-step guide on making eco-enzyme at home:\nStep 1: Collect fruit peels or kitchen waste\nStep 2: Chop the waste into small pieces\nStep 3: Add the waste to a clean container\nStep 4: Add brown sugar or jaggery in a 1:3 ratio with the waste\nStep 5: Fill the container with water, leaving some space for fermentation\nStep 6: Stir the mixture daily for the first two weeks\nStep 7: After two weeks, let it ferment for 3-6 months\nStep 8: Strain the liquid and store it in airtight bottles\nYour homemade eco-enzyme is now ready to use!",
            "Eco-enzyme can be used for various cleaning purposes such as floor cleaning, toilet cleaning, kitchen cleaning, and stain removal. It is a natural and eco-friendly alternative to chemical cleaners.",
            "Using eco-enzyme as a natural fertilizer has several advantages. It enriches the soil with beneficial microorganisms, improves nutrient availability to plants, enhances plant growth, and reduces the need for synthetic fertilizers.",
            "The scientific explanation behind eco-enzyme lies in the fermentation process. The mixture of fruit peels, sugar, and water undergoes anaerobic fermentation, producing a solution rich in beneficial enzymes, vitamins, and antioxidants.",
            "Eco-enzyme contributes to sustainability by promoting the use of natural and biodegradable ingredients, reducing reliance on harmful chemicals, minimizing waste generation, and supporting eco-friendly practices.",
            "Eco-enzyme differs from chemical cleaners in several ways. It is made from natural ingredients, is biodegradable, non-toxic, and poses no harm to the environment. Chemical cleaners, on the other hand, often contain harmful substances that can pollute water sources and harm ecosystems.",
            "Eco-enzyme is highly eco-friendly compared to other alternatives. It is biodegradable, non-toxic, and does not contribute to pollution or environmental degradation. Its production and use align with sustainable practices.",
            "Eco-enzyme can be used for waste management in multiple ways. It helps break down organic waste, reduces foul odors, and accelerates the decomposition process. It can be used in composting, waste treatment plants, and septic systems.",
            "Enzymes play a crucial role in eco-enzyme production. The fruit peels used in the fermentation process contain natural enzymes that break down organic matter, converting it into a nutrient-rich solution.",
            "Eco-enzyme positively affects soil health by improving its structure, increasing microbial activity, enhancing nutrient availability, and promoting overall soil fertility. It acts as a natural soil conditioner.",
            "Yes, eco-enzyme can effectively eliminate odors. Its natural enzymes help break down organic compounds that cause unpleasant smells, leaving a fresh and clean environment.",
            "Eco-enzyme contributes to water conservation by reducing the need for excessive water usage in cleaning and waste management. Its use promotes sustainable water practices and minimizes water wastage.",
            "While eco-enzyme may have repellent properties against certain pests, it is not a standalone solution for pest control. It can complement other pest management strategies, but professional advice may be needed for severe infestations.",
            "Eco-enzyme has a wide range of applications. It can be used for cleaning floors, tiles, glass surfaces, toilets, kitchen appliances, as well as for laundry purposes, stain removal, and gardening.",
            "Yes, eco-enzyme is an affordable solution for everyday use. It can be made at home using readily available ingredients, which makes it a cost-effective alternative to commercial cleaning products.",
            "Eco-enzyme supports sustainable agriculture practices by providing a natural and nutrient-rich fertilizer option. It helps improve soil health, reduces the need for synthetic fertilizers, and promotes organic farming methods.",
            "Eco-enzyme can be used for septic tank maintenance by adding it regularly to the tank. It helps in breaking down solid waste, reducing odor, and improving the overall functioning of the septic system.",
            "Certainly! Eco-enzyme can be used for various household cleaning tasks such as mopping floors, cleaning windows and glass surfaces, scrubbing tiles, removing stains, and deodorizing spaces.",
            "Eco-enzyme facilitates organic waste decomposition by accelerating the breakdown process. Its enzymes help break down complex organic compounds into simpler forms, making it easier for microorganisms to decompose the waste.",
            "Eco-enzyme is derived from natural ingredients and the fermentation process, making it a renewable resource. As long as fruit peels and other organic waste are available, eco-enzyme can be continuously produced.",
            "Eco-enzyme contributes to composting processes by accelerating the decomposition of organic matter. Adding eco-enzyme to compost piles helps speed up the breakdown of materials and produces nutrient-rich compost.",
            "Eco-enzyme is generally safe for pets and children. However, it's advisable to use caution and keep the eco-enzyme out of their reach, just as you would with any cleaning or household product.",
            "Eco-enzyme is effective in removing grease due to its natural enzymes. It helps break down grease and oil, making it easier to clean surfaces and remove stubborn stains.",
            "Yes, eco-enzyme is a non-toxic alternative to conventional cleaners. It does not contain harsh chemicals or synthetic ingredients that can be harmful to human health or the environment.",
            "Eco-enzyme has various industrial applications. It can be used in the food industry for cleaning and sanitation, in wastewater treatment plants for waste management, and in manufacturing processes as a natural cleaning agent.",
            "Eco-enzyme helps reduce environmental footprint by promoting sustainable and eco-friendly practices. Its use minimizes the release of harmful chemicals into the environment and reduces waste generation.",
            "Eco-enzyme can effectively remove stains from various surfaces. Its enzymes break down the stain molecules, making it easier to clean and remove the discoloration.",
            "Eco-enzyme provides a green solution for laundry by acting as a natural detergent. It helps remove dirt, stains, and odors from clothes while being gentle on the fabric and the environment.",
            "Using eco-enzyme in home gardening offers several benefits. It enriches the soil, enhances nutrient availability to plants, promotes healthy root development, and improves overall plant growth and productivity."
        ];

        $data = [];

        for ($index = 0; $index < count($messageList); $index++) {
            $userId = $faker->numberBetween(1, 6);
            $threadId = $index+7;
            $message = $messageList[$index];
            $postingDate = $faker->dateTimeBetween('2023-07-01', '2023-09-10');
            $createdAt = Carbon::parse($postingDate)->subSeconds(1);
            $updatedAt = $createdAt;

            Comment::create([
                'user_id' => $userId,
                'thread_id' => $threadId,
                'message' => $message,
                'posting_date' => $postingDate,
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
            ]);
        }
    }
}
