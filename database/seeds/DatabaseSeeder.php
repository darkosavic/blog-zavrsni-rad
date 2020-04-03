<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CategorySeeder::class);
         $this->call(TagsSeeder::class);
         $this->call(CommentsSeeder::class);
         $this->call(PostsSeeder::class);
    }
}
