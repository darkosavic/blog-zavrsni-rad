<?php

use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        \DB::table('comments')->truncate();

        for($x=0; $x<=50; $x++){
            \DB::table('comments')->insert([
                'commenter' => $faker->name,
                'email' => $faker->email,
                'text' => $faker->text,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
