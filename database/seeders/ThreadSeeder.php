<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Thread;

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
    }
}
