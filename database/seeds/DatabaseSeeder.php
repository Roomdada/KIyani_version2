<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(TestimonySeeder::class);
        $this->call(PortefolioSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(PatnersSeeder::class);
    }
}
