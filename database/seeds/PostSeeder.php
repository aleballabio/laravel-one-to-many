<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 50; $i++) {
            $title = $faker->words(rand(2, 10), true);
            Post::create([
                'title'     => $title,
                'content'   => $faker->text(rand(200, 1000)),
                'slug'      => Post::generateSlug($title)
            ]);
        }
    }
}