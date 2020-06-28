<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
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
            Category::create(
                [
                    'name' => $faker->name(10),
                    'slug' => $faker->slug,
                ]
            );
        }

    }
}
