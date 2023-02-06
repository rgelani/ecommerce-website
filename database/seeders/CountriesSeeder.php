<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();
        $countries = array(
            array('id' => 101,'code' => 'IN','name' => "India",'phone_code' => 91),
        );
        DB::table('countries')->insert($countries);
    }
}
