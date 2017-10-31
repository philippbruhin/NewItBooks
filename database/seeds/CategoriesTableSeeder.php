<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_one = new Category();
        $category_one->slug='laravel';
        $category_one->name='Laravel';
        $category_one->save();

        $category_two = new Category();
        $category_two->slug='php';
        $category_two->name='php';
        $category_two->save();
    }
}
