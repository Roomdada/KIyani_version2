<?php

use Illuminate\Database\Seeder;
use App\Models\Portefolio;
class PortefolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
       Portefolio::create(
        		[
        			'name' => $faker->name(10),
        			'slug' => $faker->slug,
        			'client_name' => $faker->name(10),
        			'location' => 'Abidjan',
        			'surface' => 1200,
        			'price' => 10000,
        			'description' => $faker->sentence(20),
        			'image1' => '1.jpg',
        			'image2' => '2.jpg',
        			'image3' => '3.jpg'
        		]
            );
        }
    
}
