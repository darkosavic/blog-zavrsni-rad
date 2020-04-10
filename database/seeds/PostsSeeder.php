<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        \DB::table('posts')->truncate();

        $categoryIds = App\Models\Category::all()->pluck("id")->toArray();
        $userIds = App\User::all()->pluck("id")->toArray();

        $faker = \Faker\Factory::create('en_GB');

        for ($x = 0; $x <= 10; $x++) {
            \DB::table('posts')->insert([
                'title' => $faker->text(30),
                'preview' => $faker->text(400),
                'body' => $faker->text(1500),
                'imageUrl' => "/themes/front/img/blog-post-3.jpeg",
                'numberOfViews' => 10,
                'category_id' => $faker->randomElement($categoryIds),
                'user_id' => $faker->randomElement($userIds),
                'important' => $faker->randomElement([true, false]),
                'disabled' => $faker->randomElement([true, false]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }

}
