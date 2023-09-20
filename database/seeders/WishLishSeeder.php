<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WishLishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('wish_lists')->delete();
        $wish_lists = [
            [
                'id' => '1',
                'id_user' => '1',
                'id_product' => '1',
            ],
            [
                'id' => '2',
                'id_user' => '1',
                'id_product' => '2',
            ],
            [
                'id' => '3',
                'id_user' => '1',
                'id_product' => '3',
            ],
            [
                'id' => '4',
                'id_user' => '1',
                'id_product' => '4',
            ],
            [
                'id' => '5',
                'id_user' => '2',
                'id_product' => '2',
            ],
            [
                'id' => '6',
                'id_user' => '2',
                'id_product' => '3',
            ],
            [
                'id' => '7',
                'id_user' => '2',
                'id_product' => '4',
            ],
            [
                'id' => '8',
                'id_user' => '2',
                'id_product' => '5',
            ],
        ];
        DB::table('wish_lists')->insert($wish_lists);
    }
}
