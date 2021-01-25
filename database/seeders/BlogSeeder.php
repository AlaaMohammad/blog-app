<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('blogs')->insert([[
            'title' => 'Art',
            'img_src' => 'art-blog.jpg'
        ],[
            'title' => 'Life',
            'img_src' => 'life-blog.jpg'
        ],[
            'title' => 'Product',
            'img_src' => 'product-blog.jpg'
        ],[
            'title' => 'Idea',
            'img_src' => 'idea-blog.jpg'
        ],[
            'title' => 'Review',
            'img_src' => 'review-blog.jpg'
        ],[
            'title' => 'Design',
            'img_src' => 'design-blog.jpg'
        ],[
            'title' => 'Style',
            'img_src' => 'style-blog.jpeg'
        ]]);
    }
}
