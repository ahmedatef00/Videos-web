<?php

namespace Database\Seeders;

use Database\Seeders\Categories;
use Database\Seeders\Comments;
use Illuminate\Database\Seeder;
use Database\Seeders\Skills;
use Database\Seeders\Tags;
use Database\Seeders\Users;
use Database\Seeders\Videos;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(1000)->create();

        $this->call([
            Users::class,
            Categories::class,
            Skills::class,
            Tags::class,
            Videos::class,
            Comments::class
        ]);
    }
}
