<?php

use Illuminate\Database\Seeder;
use App\Blog;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog_one = new Blog();
        $blog_one->title='Title 1';
        $blog_one->body='Lorem ipsum dolor';
        $blog_one->save();

        $blog_one = new Blog();
        $blog_one->title='Title 2';
        $blog_one->body='Tis is the body of my second blog. Add more text if you want.';
        $blog_one->save();
    }
}
