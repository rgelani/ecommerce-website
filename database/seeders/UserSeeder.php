<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\City;
use App\Models\State;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $cities = collect(City::all());

        for ($i = 0; $i < 20; $i++) {
            $user = User::create([
                'first_name' => $faker->name(),
                'last_name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => '$2y$10$uLtz1sAS8hUX5W7NwV4cQe33HniuHl7we4l9xWPXOM5PNlPNEG88u',
                'phone_no' => $faker->numerify('##########'),
                'total_spent' => $faker->numberBetween(100, 10000),
                'order_count' => $faker->randomDigit,
                'gst_no' => $faker->asciify('**********'),
                'gst_name' =>  $faker->name(),
            ]);
            $city = $cities->random();
            Address::create([
                'name' => $faker->name(),
                'user_id' => $user->id,
                'phone_no' => $faker->numerify('##########'),
                'address1' => "$faker->address",
                'address2' => "$faker->address",
                'address3' => "$faker->address",
                'city_id' =>  $city->id,
                'state_id' =>  $city->state_id,
                'country_id' => 101,
                'alternate_phone_no' =>  $faker->numerify('##########'),
                'type' => $faker->randomElement(['0', '1']),
                'pin_code' => $faker->numerify('######'),
                'status' => '0',
            ]);
        }
    }
}