<?php

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
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
        	Department::create(
        		[
        			'name' => $faker->name(10),
        			'slug' => $faker->slug,
        			'image' => '1.jpg',
        		]
            );
        }
    }
}
