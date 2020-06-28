<?php

use Illuminate\Database\Seeder;
use App\Models\Testimony;

class TestimonySeeder extends Seeder
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
        	Testimony::create(
        		[
        			'name' => $faker->name(10),
        			'post' => 'CEO',
        			'testimony' => $faker->sentence(10),
        			'image' => '1.jpg',
        		]
            );
        }
    }
}
