<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Line_item;
use App\Models\Order;
use App\Models\Product;
use App\Models\Seller;
use App\Models\User;
use App\Models\Variant;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $addresses = collect(Address::all());
        $variants = collect(Variant::with('product')->get());

        for ($i = 0; $i < 100; $i++) {
            $address = $addresses->random();
            $order = Order::create([
                'user_id' =>  $address->user_id,
                'address_id' =>  $address->id,
                'email' => $faker->unique()->safeEmail(),
                'shiping_charge' => $faker->numberBetween(100, 10000),
                'total' => $faker->numberBetween(100, 10000),
                'total_gst' => $faker->numberBetween(100, 10000),
                'payment_mode' => $faker->randomElement(['0', '1', '2', '3']),
                'shipping_mode' => $faker->randomElement(['0', '1']),
                'status' => '0',
                'email_verified_at' => now(),
            ]);

            for ($j = 0; $j < 3; $j++) {
                $variant = $variants->random();
                Line_item::create([
                    'variant_id' => $variant->id,
                    'product_id' => $variant->product_id,
                    'seller_id' => $variant->product->seller_id,
                    'order_id' => $order->id,
                    'wbns' => $faker->name(),
                    'quantity' => $faker->randomNumber(),
                    'tax_total' => $faker->numberBetween(100, 10000),
                    'selling_price' => $faker->numberBetween(100, 10000),
                    'sku' => $faker->name(),
                    'barcode' => $faker->name(),
                    'oid_barcode' => $faker->name(),
                    'image' => null,
                    'title' => $faker->name(),
                    'discription' => $faker->sentence(),
                    'upload_wbn' => $faker->name(),
                    'weight' => $faker->numberBetween(100, 10000),
                    'status' => '0',
                    'shiping_charge' => $faker->numberBetween(100, 10000),
                ]);
            }
        }
    }
}