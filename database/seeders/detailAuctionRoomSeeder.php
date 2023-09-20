<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class detailAuctionRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('detail_auction_rooms')->delete();
        $detail_auction_rooms = [
            [
                'id' => '1',
                'id_product' => '9',
                'id_auction_room'=>'1',
                'id_user'=>'1',
                'bidding_price' => '100000000',
            ],
            [
                'id' => '2',
                'id_product' => '9',
                'id_auction_room'=>'1',
                'id_user'=>'2',
                'bidding_price' => '113000000',
            ],
            [
                'id' => '3',
                'id_product' => '9',
                'id_auction_room'=>'1',
                'id_user'=>'2',
                'bidding_price' => '115000000',
            ],
            [
                'id' => '4',
                'id_product' => '9',
                'id_auction_room'=>'1',
                'id_user'=>'1',
                'bidding_price' => '120000000',
            ],
        ];
        DB::table('detail_auction_rooms')->insert($detail_auction_rooms);
    }
}
