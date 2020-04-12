<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        \DB::table('users')->truncate();
        
        $faker = \Faker\Factory::create('en_US');
        
        \DB::table('users')->insert([
            'name' => 'Aleksandar Dimic',
            'email' => 'aleksandar.dimic@cubes.rs',
            'phone_number' => '0628831301',
            'ban' => $faker->randomElement([true, false]),
            'password' => \Hash::make('cubesphp'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        \DB::table('users')->insert([
            'name' => 'Pera Peric',
            'email' => 'pera.peric@cubes.rs',
            'ban' => $faker->randomElement([true, false]),
            'password' => \Hash::make('cubesphp'),
            'phone_number' => '0628831302',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        \DB::table('users')->insert([
            'name' => 'Darko Savic',
            'email' => 'darkosavic1997@gmail.com',
            'ban' => $faker->randomElement([true, false]),
            'password' => \Hash::make('cubesphp'),
            'phone_number' => '0628831303',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        \DB::table('users')->insert([
            'name' => 'Marko Savic',
            'email' => 'markosavic1997@gmail.com',
            'ban' => $faker->randomElement([true, false]),
            'password' => \Hash::make('cubesphp'),
            'phone_number' => '0628831304',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        \DB::table('users')->insert([
            'name' => 'Snezana Savic',
            'email' => 'snezanasavic1997@gmail.com',
            'ban' => $faker->randomElement([true, false]),
            'password' => \Hash::make('cubesphp'),
            'phone_number' => '0628831305',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }

}
