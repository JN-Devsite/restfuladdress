<?php

use Illuminate\Database\Seeder;
use App\Address;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			$faker = \Faker\Factory::create();
			
			for($i = 0; $i < 50; $i++) {
				Address::create([
					'address' => $faker->address, 
					'city' => $faker->city, 
					'country' => $faker->country,
					'code' => $faker->randomNumber(5),
					'lat' => $faker->latitude, 
					'long' => $faker->longitude
				]);
			}
    }
}








