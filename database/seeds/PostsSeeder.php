<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $categoryIds = App\Models\Category::all()->pluck("id")->toArray();
               
        $faker = \Faker\Factory::create();
//        \DB::table('posts')->truncate();

        for($x=0; $x<=10; $x++){
            \DB::table('posts')->insert([
                'title' => $faker->text(50),
                'body' => $faker->text(1000),
                'imageUrl' => "/themes/front/img/blog-post-3.jpeg" ,
                'numberOfViews' => 10,
                'category_id' => $faker->randomElement($categoryIds),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
