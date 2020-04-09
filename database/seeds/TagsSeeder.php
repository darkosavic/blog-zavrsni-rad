<?php

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \DB::table('tags')->truncate();

        $categories = ["Technology", "Fashion", "Sports", "Economy", "Business"];

        foreach ($categories as $category) {
            \DB::table('tags')->insert([
                // Generates a random department name
                'name' => $category,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
