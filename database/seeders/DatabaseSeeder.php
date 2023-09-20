<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            AdminSeeder::class,
            LawSeeder::class,
            NotifiSeeder::class,
            AboutSeeder::class,
            CategorySeeder::class,
        ]);
        $this->call([
            ProductSeeder::class,
        ]);
        $this->call([
            WishLishSeeder::class,
            MoreImageProductSeeder::class,
            PaymentSeeder::class,
            AuctionRoomSeeder::class,
        ]);
        $this->call([
            detailAuctionRoomSeeder::class,
            AuctionRoomFinalSeeder::class
        ]);
    }
}
