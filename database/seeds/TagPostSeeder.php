<?php

use Illuminate\Database\Seeder;

class TagPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tag_post')->truncate();
        
        $postIds = App\Models\Post::all()->pluck("id")->toArray();
        $tagIds = App\Models\Tag::all()->pluck("id");

        foreach ($postIds as $postId) {
            
            $randomTagIds = $tagIds->random(3);
            
            foreach ($randomTagIds as $tagId) {
                
                \DB::table('tag_post')->insert([
                    'post_id' => $postId,
                    'tag_id' => $tagId
                ]);
            }
        }
    }
}
