<?php

use Illuminate\Database\Seeder;
use App\Models\Partners;
class PatnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  //
        $faker = Faker\Factory::create();
        for ($i=1; $i < 7; $i++) 
        {

               Partners::create(
        		[
        			'image' => $i.'.png',
        			'links' => 'link' .$i,
        		]
            );
    }
}

}
