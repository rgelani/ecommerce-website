<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->delete();
        $country = Country::first();
        $states = array(
            array('name' => "Andaman and Nicobar Islands",'country_id' => $country->id),
            array('name' => "Andhra Pradesh",'country_id' => $country->id),
            array('name' => "Arunachal Pradesh",'country_id' => $country->id),
            array('name' => "Assam",'country_id' => $country->id),
            array('name' => "Bihar",'country_id' => $country->id),
            array('name' => "Chandigarh",'country_id' => $country->id),
            array('name' => "Chhattisgarh",'country_id' => $country->id),
            array('name' => "Dadra and Nagar Haveli",'country_id' => $country->id),
            array('name' => "Daman and Diu",'country_id' => $country->id),
            array('name' => "Delhi",'country_id' => $country->id),
            array('name' => "Goa",'country_id' => $country->id),
            array('name' => "Gujarat",'country_id' => $country->id),
            array('name' => "Haryana",'country_id' => $country->id),
            array('name' => "Himachal Pradesh",'country_id' => $country->id),
            array('name' => "Jammu and Kashmir",'country_id' => $country->id),
            array('name' => "Jharkhand",'country_id' => $country->id),
            array('name' => "Karnataka",'country_id' => $country->id),
            array('name' => "Kenmore",'country_id' => $country->id),
            array('name' => "Kerala",'country_id' => $country->id),
            array('name' => "Lakshadweep",'country_id' => $country->id),
            array('name' => "Madhya Pradesh",'country_id' => $country->id),
            array('name' => "Maharashtra",'country_id' => $country->id),
            array('name' => "Manipur",'country_id' => $country->id),
            array('name' => "Meghalaya",'country_id' => $country->id),
            array('name' => "Mizoram",'country_id' => $country->id),
            array('name' => "Nagaland",'country_id' => $country->id),
            array('name' => "Narora",'country_id' => $country->id),
            array('name' => "Natwar",'country_id' => $country->id),
            array('name' => "Odisha",'country_id' => $country->id),
            array('name' => "Paschim Medinipur",'country_id' => $country->id),
            array('name' => "Pondicherry",'country_id' => $country->id),
            array('name' => "Punjab",'country_id' => $country->id),
            array('name' => "Rajasthan",'country_id' => $country->id),
            array('name' => "Sikkim",'country_id' => $country->id),
            array('name' => "Tamil Nadu",'country_id' => $country->id),
            array('name' => "Telangana",'country_id' => $country->id),
            array('name' => "Tripura",'country_id' => $country->id),
            array('name' => "Uttar Pradesh",'country_id' => $country->id),
            array('name' => "Uttarakhand",'country_id' => $country->id),
            array('name' => "Vaishali",'country_id' => $country->id),
            array('name' => "West Bengal",'country_id' => $country->id),
        );
        DB::table('states')->insert($states);
    }
}
