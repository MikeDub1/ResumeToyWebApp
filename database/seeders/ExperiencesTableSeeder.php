<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;
use Faker\Factory;

class ExperiencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Experience::truncate();

        $faker = Factory::create();
        for($i = 0; $i < 5; $i++)
        {
            Experience::create([
                'role' => $faker->sentence(),
                'organization' => $faker->word(),
                'description' => $faker->sentence(),
                'start_date' => $faker->date('Y-m-d'),
                'end_date' => $faker->date('Y-m-d')
            ]);
        }
    }
}
