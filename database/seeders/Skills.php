<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Skills extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 0 ;$i< 10 ;$i++){
            $array = [
                'name' => $faker->word,
            ];
            \App\Models\Skills::create($array);
        }
    }
}
