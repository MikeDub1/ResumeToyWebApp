<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Factory;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //CREATE CONTROLLERS FOR ALL ENTITIES!!
        Project::truncate();

        $faker = Factory::create();
        for($i = 0; $i < 5; $i++)
        {
            Project::create([
                'project_name' => $faker->sentence(),
                'organization' => $faker->word(),
                'description' => $faker->sentence(),
                'start_date' => $faker->date('Y-m-d'),
                'end_date' => $faker->date('Y-m-d')
            ]);
        }
    }
}
