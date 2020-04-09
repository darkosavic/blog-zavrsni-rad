<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        \DB::table('users')->insert([
            'name' => 'Aleksandar Dimic',
            'email' => 'aleksandar.dimic@cubes.rs',
            'password' => \Hash::make('cubesphp'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

//        \DB::table('users')->insert([
//            'name' => 'Pera Peric',
//            'email' => 'pera.peric@cubes.rs',
//            'password' => \Hash::make('cubesphp'),
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//        ]);
        
        \DB::table('users')->insert([
            'name' => 'Darko Savic',
            'email' => 'darkosavic1997@gmail.com',
            'password' => \Hash::make('cubesphp'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }

}
