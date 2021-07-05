<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Image;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\Video;
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
        User::factory(1)->create();
        $posts = Post::factory(4)->create();
        $comments = Comment::factory(2)->make();
        Tag::factory(2)->create();
        $images = Image::factory(2)->create();
        $videos = Video::factory(2)->create();

        /** @var Post $post */
        $post = $posts->get(0);
        $post->comments()->saveMany($comments);
    }
}
