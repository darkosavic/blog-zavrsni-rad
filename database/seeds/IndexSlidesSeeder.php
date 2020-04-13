<?php

use Illuminate\Database\Seeder;

class IndexSlidesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        \DB::table('index_slides')->truncate();
        $faker = \Faker\Factory::create('en_US');

        for ($i = 0; $i < 3; $i++) {
            \DB::table('index_slides')->insert([
                'title' => $faker->realText(50),
                'button_text' => $faker->word(2),
                'photo' => '/themes/front/img/featured-pic-1.jpeg',
                'url' => 'https://www.google.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
