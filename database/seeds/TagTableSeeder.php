<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new Tag();
        $tag->tag = "Knowledge";
        $tag->save();
        
        $tag = new Tag();
        $tag->tag = "Lamborghini";
        $tag->save();
        
        $tag = new Tag();
        $tag->tag = "Books";
        $tag->save();
    }
}
