<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\City;
use App\Models\Seller;
use App\Models\SellerCampaignAmount;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            CountriesSeeder::class,
            StateSeeder::class,
            CitySeeder::class,
            UserSeeder::class,
            CategoriesSeeder::class,
            SellerSeeder::class,
            ProductSeeder::class,
            OrderSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();
        // create permissions
        Permission::create(['guard_name' => 'admin', 'name' => 'role-list']);
        Permission::create(['guard_name' => 'admin', 'name' => 'role-create']);
        Permission::create(['guard_name' => 'admin', 'name' => 'role-edit']);
        Permission::create(['guard_name' => 'admin', 'name' => 'role-delete']);
        Permission::create(['guard_name' => 'admin', 'name' => 'admin-list']);
        Permission::create(['guard_name' => 'admin', 'name' => 'admin-create']);
        Permission::create(['guard_name' => 'admin', 'name' => 'admin-edit']);
        Permission::create(['guard_name' => 'admin', 'name' => 'admin-delete']);

        // create roles and assign existing permissions
        $role1 = Role::create(['guard_name' => 'admin', 'name' => 'super-admin']);
        $role1->givePermissionTo('admin-list');
        $role1->givePermissionTo('admin-create');
        $role1->givePermissionTo('admin-edit');
        $role1->givePermissionTo('admin-delete');
        $role1->givePermissionTo('role-list');
        $role1->givePermissionTo('role-create');
        $role1->givePermissionTo('role-edit');
        $role1->givePermissionTo('role-delete');

        $role2 = Role::create(['guard_name' => 'admin', 'name' => 'admin']);
        $role2->givePermissionTo('admin-list');
        $role2->givePermissionTo('admin-create');

        // create demo users
        $user = Admin::create([
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'email' => 'superadmin@admin.com',
            'password' => '$2y$10$uLtz1sAS8hUX5W7NwV4cQe33HniuHl7we4l9xWPXOM5PNlPNEG88u'
        ]);
        $user->assignRole($role1);

        $user = Admin::create([
            'first_name' => 'Admin',
            'last_name' => 'Normal',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$uLtz1sAS8hUX5W7NwV4cQe33HniuHl7we4l9xWPXOM5PNlPNEG88u'
        ]);
        $user->assignRole($role2);
        $faker = Faker::create();
        $city = collect(City::get()->modelKeys());

        $seller = Seller::create([
            'first_name' => 'Test',
            'last_name' => 'Seller',
            'email' => 'test@seller.com',
            'status' => '1',
            'first_name' => $faker->name(),
            'profile_avatar' => null,
            'bank_name' => $faker->name(),
            'last_name' => $faker->name(),
            'pan_certificate' => $faker->name(),
            'phone_number' => '9099666999',
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
            'seller_referred_id' => null,
            'country_id' => 101,
            'city_id' => $cityId =  $city->random(),
            'state_id' => City::find($cityId)->state_id,
            'warehouse_id' => 'eyJpdiI6IlhzK1VaMGwwaXhPdDJrbkVELy9VbFE9PSIsInZhbHVlIjoiYThDTFptZzUrdTBET1VHRlBISm1zQT09IiwibWFjIjoiOGY5ZDA5ZDA5MTNhYjYwYTAzN2M0MWFkZDNhNTA1MWMyNjk1ZWM5NGQ1MDY2MDk2Y2M4NDU1MDQyNjdkMjcxMCIsInRhZyI6IiJ98qcqSi9Xxx',
        ]);

        SellerCampaignAmount::create([
            "seller_id" => $seller->id,
            "total_amount" => 5000
        ]);

        $user = User::create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@user.com',
            'password' => '$2y$10$uLtz1sAS8hUX5W7NwV4cQe33HniuHl7we4l9xWPXOM5PNlPNEG88u'
        ]);
    }
}