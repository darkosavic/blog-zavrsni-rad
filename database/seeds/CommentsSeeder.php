<?php

use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        \DB::table('comments')->truncate();

        $postIds = App\Models\Post::all()->pluck("id")->toArray();
        
        
        $faker = \Faker\Factory::create('en_US');
        \DB::table('comments')->truncate();

        for ($x = 0; $x <= 50; $x++) {
            \DB::table('comments')->insert([
                'commenter' => $faker->name,
                'email' => $faker->email,
                'text' => $faker->realText(),
                'post_id' => $faker->randomElement($postIds),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }

}
