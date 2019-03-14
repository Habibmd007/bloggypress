<?php

use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_categories')->insert([
            'cat'  =>   'travel',
            'img'  =>  'images/cat1.jpg'
        ]);
        DB::table('blog_categories')->insert([
            'cat'  =>   'lifestyle',
            'img'  =>  'images/cat2.jpg'
        ]);
        DB::table('blog_categories')->insert([
            'cat'  =>   'journey',
            'img'  =>  'images/cat3.jpg'
        ]);
        DB::table('blog_categories')->insert([
            'cat'  =>   'hobby',
            'img'  =>  'images/cat4.jpg'
        ]);
        DB::table('blog_categories')->insert([
            'cat'  =>   'tour',
            'img'  =>  'images/cat5.jpg'
        ]);
        DB::table('blog_categories')->insert([
            'cat'  =>   'music',
            'img'  =>  'images/cat6.jpg'
        ]);
    }
}
