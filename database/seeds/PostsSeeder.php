<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Post::class, 50)->make()->each(function($post){
           $author = User::inRandomOrder()->first();
           $author->posts()->save($post);
        });
    }
}
