<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Post;
use \App\Models\Category;
use \App\Models\AdminUser;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Category::factory(5)->state(new Sequence(
            ['category' => 'politics'],
            ['category' => 'auto'],
            ['category' => 'sport'],
            ['category' => 'health'],
            ['category' => 'tourism'],
        ))->create();
        Post::factory(20)->state(new Sequence(
            ['category_id' => 1],
            ['category_id' => 2],
            ['category_id' => 3],
            ['category_id' => 4],
            ['category_id' => 5],
        ))->create();
        AdminUser::factory(1)->create([
            "name" => "Admin",
            "email" => "admin@mail.ru",
            "password" => bcrypt("admin"),
        ]);
    }
}
