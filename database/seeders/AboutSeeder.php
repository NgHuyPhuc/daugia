<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('abouts')->delete();
        $abouts = [
            [
                'id' => '1',
                'title' => 'about1',
                'img'=>'10_day_nui_dep_nhat_chau_au.jpg',
                'content'=>'10_day_nui_dep_nhat_chau_au.jpg',
            ]
        ];
        DB::table('abouts')->insert($abouts);
    }
}
