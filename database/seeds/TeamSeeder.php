<?php

use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i <= 3; $i++) 
        { 
        	Team::create(
        		[
        			'name' => $faker->name(10),
        			'post' => 'CEO',
        			'social_one' => 'Social 1',
        			'social_two' => 'Social 2',
        			'social_three' => 'Social 3',
        			'image' => ($i+1).'.jpg',
        		]
            );
        }
    }
}
