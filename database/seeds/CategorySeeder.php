<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //isprazni tabelu
        \DB::table('categories')->truncate();

        $categories = ["Growth", "Local", "Sales", "Tips", "Business"];

        foreach ($categories as $category) {
            \DB::table('categories')->insert([
                // Generates a random department name
                'name' => $category,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}    