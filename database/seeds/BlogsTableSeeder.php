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
        $blog_one->slug='title-1';
        $blog_one->meta_title='this is the meta title';
        $blog_one->meta_description='metadescription';
        $blog_one->body='Lorem ipsum dolor';
        $blog_one->save();

        $blog_two = new Blog();
        $blog_two->title='Title 2';
        $blog_two->slug='title-2';
        $blog_two->meta_title='this is the metatitle of blog entry 2';
        $blog_two->meta_description='Meta description';
        $blog_two->body='Tis is the body of my second blog. Add more text if you want.';
        $blog_two->save();
    }
}
