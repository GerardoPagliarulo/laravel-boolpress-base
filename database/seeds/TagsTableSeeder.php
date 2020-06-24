<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tags
        $tags = [
            'HTML',
            'PHP',
            'JS',
            'Laravel'
        ];
        foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->name = $tag;
            // Save
            $newTag->save();
        }
    }
}
