<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoreImageProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('more_image_products')->delete();
        $more_image_products = [
            [
                'id' => '1',
                'id_product' => '1',
                'img'=>'_league-of-legends-lol-wallpaper-full-hd- 88.jpg',
            ],
            [
                'id' => '2',
                'id_product' => '1',
                'img'=>'10_day_nui_dep_nhat_chau_au.jpg',
            ],
            [
                'id' => '3',
                'id_product' => '1',
                'img'=>'2560x1440.jpg',
            ],
            [
                'id' => '4',
                'id_product' => '1',
                'img'=>'22017.jpg',
            ],
            [
                'id' => '5',
                'id_product' => '2',
                'img'=>'236008.jpg',
            ],
            [
                'id' => '6',
                'id_product' => '3',
                'img'=>'96546842_p0_master1200.jpg',
            ],
            [
                'id' => '7',
                'id_product' => '4',
                'img'=>'anh-nen-2k-cho-may-tinh_014252436.jpg',
            ],
            [
                'id' => '8',
                'id_product' => '5',
                'img'=>'123',
            ],
        ];
        DB::table('more_image_products')->insert($more_image_products);
    }
}
