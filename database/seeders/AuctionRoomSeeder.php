<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class AuctionRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('auction_rooms')->delete();
        $auction_rooms = [
            [
                'id' => '1',
                'id_product' => '9',
                'thoi_gian_bat_dau' => Carbon::createFromFormat('H:i:s d/m/Y', '8:00:00 16/09/2022'),
                'thoi_gian_ket_thuc' => Carbon::createFromFormat('H:i:s d/m/Y', '10:00:00 16/09/2022'),
                'id_dgv' => '3',
                'state' => '0',
            ],

        ];
        DB::table('auction_rooms')->insert($auction_rooms);
    }
}
