<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Comment;
use Faker\Generator as Faker;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Truncate
        //Comment::truncate();
        $records = 20;
        $posts = Post::all();
        for ($i = 0; $i < $records; $i++) { 
            $newComment = new Comment();
            $newComment->post_id = $posts->random()->id;
            $newComment->name = $faker->name();
            $newComment->body = $faker->text(200);
            // Save
            $newComment->save();
        }
    }
}
