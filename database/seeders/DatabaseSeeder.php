<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            AdditionalImageSeeder::class,
            AddonSeeder::class,
            ProductReviewSeeder::class,
            ProductReviewResponseSeeder::class,
            CouponSeeder::class,
            DeliveryAreaSeeder::class,
            ShippingMethodSeeder::class,
            TableSeeder::class,
            // ReservationTimeSeeder::class,
            ReservationSeeder::class,
            BlogTagSeeder::class,
            BlogCategorySeeder::class,
            BlogContentSeeder::class,
            BlogCommentSeeder::class,
            BlogCommentResponseSeeder::class,
            SubscriberSeeder::class,
            EmployeePositionSeeder::class,
            EmployeeSeeder::class,
        ]);
    }
}
