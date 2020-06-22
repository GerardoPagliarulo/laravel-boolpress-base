<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Truncate
        //Post::truncate();
        $records = 10;
        $users = User::all();
        for ($i = 0; $i < $records; $i++) { 
            $newPost = new Post();
            $newPost->user_id = $users->random()->id;
            $newPost->title = $faker->text(100);
            $newPost->body = $faker->text(400);
            // Save
            $newPost->save();
        }
    }
}
