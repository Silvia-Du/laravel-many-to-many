<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Post;

class PostsTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for( $i=0 ; $i< 25 ; $i++ ){
            $post = Post::inRandomOrder()->first();
            $tag_id = Tag::inRandomOrder()->first()->id;
            $post->tags()->attach($tag_id);

        }
    }
}
