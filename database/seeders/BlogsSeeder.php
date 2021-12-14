<?php

namespace Database\Seeders;

use App\Models\Blog;
use Faker\Factory;
use Illuminate\Database\Seeder;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::factory(50)->create();

        $model = Blog::all();
        foreach ($model as $item)
        {
            $item->attachTag(Factory::create()->randomElement(['sports', 'politics', 'drama', 'public', 'lifestyle']));
        }
    }
}
