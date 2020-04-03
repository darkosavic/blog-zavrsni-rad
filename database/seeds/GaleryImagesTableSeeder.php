<?php

use Illuminate\Database\Seeder;

class GaleryImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           
        
        $faker = \Faker\Factory::create();
        //isprazni tabelu
        \DB::table('galery_images')->truncate();
        
        for ($i = 1; $i <= 4; $i ++) {
            \DB::table('galery_images')->insert([
                'url' => $faker->company,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    
    }
}
