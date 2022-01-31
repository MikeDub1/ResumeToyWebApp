<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;
use Faker\Factory;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::truncate();

        $faker = Factory::create();
        for($i = 0; $i < 5; $i++)
        {
            Skill::create([
                'skill_name' => $faker->word(),
                'description' => $faker->sentence()
            ]);
        }

    }
}
