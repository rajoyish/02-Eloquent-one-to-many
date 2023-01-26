<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Company;
use App\Models\Employee;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        Company::factory(10)->create()->each(function ($company) {
            $company->employees() // relationship method in Company.php
                ->saveMany(Employee::factory(mt_rand(2, 5))->make());
        });

        Post::factory(10)->create()->each(function ($post) {
            $post->comments()
                ->saveMany(Comment::factory(mt_rand(2, 5))->make());
        });
    }
}
