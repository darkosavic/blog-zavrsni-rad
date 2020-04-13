<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call(CategorySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(PostsSeeder::class);
        $this->call(CommentsSeeder::class);
        $this->call(TagPostSeeder::class);
        $this->call(IndexSlidesSeeder::class);
    }

}
