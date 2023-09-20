<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuctionRoomFinalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('auction_room_finals')->delete();
        $auction_room_finals = [
            [
                'id' => '1',
                'id_product' => '9',
                'id_auction_room' => '1',
                'id_dgv' => '3',
                'id_user' => '1',
                'bidding_price' => '120000000',
            ]
        ];
        DB::table('auction_room_finals')->insert($auction_room_finals);
    }
}
