<?php

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	$faker = Faker\Factory::create();
        for ($i = 1; $i <= 3; $i++) 
        { 
        	Service::create(
        		[
        			'name' => $faker->name(10),
        			'slug' => $faker->slug,
        			'description' => $faker->sentence(10),
        			'image1' => '1.jpg',
        			'image2' => '2.jpg',
        			'image3' => '3.jpg',
        			'image4' => '4.jpg',
        			'image5' => '5.jpg',
        		]
            );
        }
    }
}
