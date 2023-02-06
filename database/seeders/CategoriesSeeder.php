<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {

            $category = Category::inRandomOrder()->first();

            Category::create([
                'name' => $faker->name(),
                'parent_id' => $category ? $category->id : null,
                'slug' => $faker->name(),
                'status' => $faker->randomElement(['0', '1']),
                'is_on_home_page' => $faker->randomElement(['0', '1']),
                'image' => null,
                'icon' => null,
                'HSN_code' => $faker->name(),
            ]);
        }
    }
}