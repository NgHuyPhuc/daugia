<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LawSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('laws')->delete();
        $laws = [
            [
                'id' => '1',
                'info' => 'Luật đấu giá 2016',
                'link'=>'https://vbpl.vn/botuphap/Pages/vbpq-van-ban-goc.aspx?ItemID=121748',
            ],
            [
                'id' => '2',
                'info' => 'Nghị định 62/2017/NĐ-CP',
                'link'=>'https://vbpl.vn/botuphap/Pages/vbpq-toanvan.aspx?ItemID=121741&Keyword=8',
            ],
            [
                'id' => '3',
                'info' => 'Thông tư 06/2017/TT-BTP',
                'link'=>'https://vbpl.vn/botuphap/Pages/vbpq-toanvan.aspx?ItemID=122824&Keyword=',
            ],
            [
                'id' => '4',
                'info' => 'Luật giao địch điện tử',
                'link'=>'https://vbpl.vn/botuphap/Pages/vbpq-toanvan.aspx?ItemID=17067&Keyword=',
            ],
            [
                'id' => '5',
                'info' => 'Luật công nghệ thông tin',
                'link'=>'https://vbpl.vn/TW/Pages/vbpq-toanvan.aspx?ItemID=15066',
            ],
            [
                'id' => '6',
                'info' => 'Nghị định 52/2013/NĐ-CP',
                'link'=>'https://vbpl.vn/botuphap/Pages/vbpq-van-ban-goc.aspx?ItemID=30470',
            ],
            [
                'id' => '7',
                'info' => 'Thông tư 59/2015/TT-BCT',
                'link'=>'https://vbpl.vn/TW/Pages/vbpq-van-ban-goc.aspx?ItemID=105747',
            ],
            [
                'id' => '8',
                'info' => 'Thông tư 12/2013/TT-BCT',
                'link'=>'Thông tư 12/2013/TT-BCT',
            ],
            [
                'id' => '9',
                'info' => 'Thông tư 47/2014/TT-BCT',
                'link'=>'https://vbpl.vn/TW/Pages/vbpq-van-ban-goc.aspx?ItemID=44378',
            ],
            [
                'id' => '10',
                'info' => 'Thông tư 21/2018/TT-BCT',
                'link'=>'https://vbpl.vn/bocongthuong/Pages/vbpq-toanvan.aspx?ItemID=130669&Keyword=',
            ],
        ];
        DB::table('laws')->insert($laws);
    }
}
