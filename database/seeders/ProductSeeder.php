<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariantImage;
use App\Models\Seller;
use App\Models\Variant;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $category = collect(Category::all()->modelKeys());
        $seller = collect(Seller::all()->modelKeys());

        for ($i = 0; $i < 20; $i++) {

            $product = Product::create([
                'category_id' => $category->random(),
                'seller_id' => $seller->random(),
                'sku' => $faker->name(),
                'MRP' => $faker->randomDigit(),
                'selling_price' => $faker->randomDigit(),
                // 'HSN_code' => $faker->name(),
                'hsn_id' => $faker->name(),
                'GST' => $faker->asciify('**********'),
                'dispatch_in_day' => $faker->randomDigit(),
                'quantity' => $faker->randomDigit(),
                'local_delivery_charge' => $faker->randomDigit(),
                'zonal_delivery_charge' => $faker->randomDigit(),
                'national_delivery_charge' => $faker->randomDigit(),
                'weight' => $faker->randomDigit(),
                'length' => $faker->randomDigit(),
                'width' => $faker->randomDigit(),
                'height' => $faker->randomDigit(),
                'title' => $faker->name(),
                'manufacturer' => $faker->name(),
                'brand_name' => $faker->name(),
                'description' => $faker->sentence(),
                'keyword' => $faker->name(),
                'key_features' => $faker->name(),
                'meta_tags' => $faker->name(),
                'return_order' => $faker->randomElement(['0', '1']),
                'return_order_in_day' => $faker->randomDigit(),
                'sale_price' => $faker->randomDigit(),
                'sale_start_date' => now(),
                'sale_end_date' => now()->addMonth(1),
                'country_of_origin' => $faker->name(),
                'status' => $faker->randomElement(['0', '1']),
                'sub_category_id' => $category->random(),
            ]);
            ProductVariantImage::create(
                [
                    'src' => 'product_1_0_1657945983.jpg',
                    'alt' => 'no image',
                    'product_id' => $product->id,
                ]
            );

            ProductVariantImage::create([
                'product_id' => $product->id,
                'src' => 'demo_product.jpg,demo_product.jpg,demo_product.jpg,demo_product.jpg',
                'alt' =>'no image'
            ]);

            for ($j = 0; $j < 3; $j++) {
                $variant = Variant::create([
                    'product_id' => $product->id,
                    'sku' => $faker->name(),
                    'title' => $faker->name(),
                    'price' => $faker->randomDigit(),
                    'quantity' => $faker->randomDigit(),
                    'color' => $faker->hexColor(),
                    'size' => $faker->randomElement(['s', 'm', 'l']),
                    'weight' => $faker->randomDigit(),
                ]);

                ProductVariantImage::create([
                    'variant_id' => $variant->id,
                    'src' => 'demo_variant.jpg',
                    'alt' =>'no image'
                ]);
            }
        }
    }
}