<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Tag::create(['name'=> 'phusics']);
        Tag::create(['name'=> 'science']);
        Tag::create(['name'=> 'computer science']);
        Tag::create(['name'=> 'programing']);
    }
}
