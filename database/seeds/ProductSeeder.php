<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i <= 10; $i++) 
        { 
        	Product::create(
        		[
        			'name' => $faker->name(10),
        			'slug' => $faker->slug,
        			'description' => $faker->sentence(20),
        			'price' => 1000,
        			'img' => '1.jpg',
        			'img_two' => '2.jpg',
        			'img_three' => '3.jpg',
        			'departments_id' => rand(1, 3),
        			'categories_id' => rand(1, 3),
        		]
            );
        }
    }
}
