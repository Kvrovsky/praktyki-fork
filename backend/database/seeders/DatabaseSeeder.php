<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::factory()->create();
        \App\Models\Article::factory(3)->create(['user_id' => $user->id]);

        $user2 = \App\Models\User::factory()->create();
        \App\Models\Article::factory(3)->create(['user_id' => $user2->id]);

        $user2 = \App\Models\User::factory()->create();
        $category = \App\Models\Category::create(["name" => "motoryzacja"]);
        \App\Models\Job::factory(3)->create(["user_id" => $user->id, "category_id"=>$category->id, "wage_period"=>"monthly"]);
        

        // $this->call(JobTableSeeder::class);
        // 
        // $faker = \Faker\Factory::create();
        // for ($i = 0; $i < 50; $i++) {
        //     Job::create([
        //         'name' => $faker->sentence,
        //         'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        //         'wage' => $faker->numberBetween($min = 1, $max = 25000),
        //         'city' => $faker->city(),
        //     ]);
        // }
    }
    
}
