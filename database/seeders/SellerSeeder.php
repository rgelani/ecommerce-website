<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Seller;
use App\Models\State;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $cities = collect(City::get()->modelKeys());

        for ($i = 0; $i < 20; $i++) {
            $city = $cities->random();

            Seller::create([
                'first_name' => $faker->name(),
                'profile_avatar' => null,
                'bank_name' => $faker->name(),
                'last_name' => $faker->name(),
                'pan_certificate' => $faker->name(),
                'phone_number' => '9099666999',
                'email' => $faker->unique()->safeEmail(),
                'status' => '0',
                'password' => '$2y$10$uLtz1sAS8hUX5W7NwV4cQe33HniuHl7we4l9xWPXOM5PNlPNEG88u',
                'company_name' => $faker->company,
                'gst_number' => $faker->asciify('**********'),
                'pan_number' => $faker->asciify('**********'),
                'bank_account_number' => $faker->numerify('##############'),
                'ifsc_code' => $faker->asciify('*****'),
                'business_address' => $faker->address(),
                'business_type' =>  $faker->randomElement(['1', '2', '3']),
                'cancel_cheque' => $faker->name(),
                'pickup_address' => $faker->address(),
                'gst_certificate' => $faker->asciify('**********'),
                'seller_referred_id' => Seller::get()->last()->id ?? null,
                'country_id' => 101,
                'city_id' => $cityId =  $city->random(),
                'state_id' => City::find($cityId)->state_id,
                'warehouse_id' => 'eyJpdiI6IlhzK1VaMGwwaXhPdDJrbkVELy9VbFE9PSIsInZhbHVlIjoiYThDTFptZzUrdTBET1VHRlBISm1zQT09IiwibWFjIjoiOGY5ZDA5ZDA5MTNhYjYwYTAzN2M0MWFkZDNhNTA1MWMyNjk1ZWM5NGQ1MDY2MDk2Y2M4NDU1MDQyNjdkMjcxMCIsInRhZyI6IiJ98qcqSi9Xxx'
            ]);
        }
    }
}