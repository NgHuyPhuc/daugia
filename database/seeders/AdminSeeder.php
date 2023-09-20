<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->delete();
        $admins = [
            [
                'id' => '1',
                'email' => 'nguyenvana@gmail.com',
                'password'=>bcrypt(123456),
                'name'=>'Nguyễn Văn A',
                'dgv_chung_chi'=>'imager_3507.jpg',
                'dgv_ngay_cap_chung_chi'=>'2023-09-13',
                'dgv_so_the_dgv'=>'dgv_so_the_dgv 1',
                'dgv_ngay_cap_the_dgv'=>'2023-09-13',
                'dgv_noi_cap_the_dgv'=>'Hà Nội',
                'level'=>'1',
            ],
            [
                'id' => '2',
                'email' => 'nguyenvanb@gmail.com',
                'password'=>bcrypt(123456),
                'name'=>'Nguyễn Văn B',
                'dgv_chung_chi'=>'imager_3507.jpg',
                'dgv_ngay_cap_chung_chi'=>'2023-09-1',
                'dgv_so_the_dgv'=>'dgv_so_the_dgv 3',
                'dgv_ngay_cap_the_dgv'=>'2023-09-1',
                'dgv_noi_cap_the_dgv'=>'Hà Nội',
                'level'=>'1',
            ],
            [
                'id' => '3',
                'email' => 'nguyenvanc@gmail.com',
                'password'=>bcrypt(123456),
                'name'=>'Nguyễn Văn C',
                'dgv_chung_chi'=>'imager_3507.jpg',
                'dgv_ngay_cap_chung_chi'=>'2023-09-2',
                'dgv_so_the_dgv'=>'dgv_so_the_dgv 2',
                'dgv_ngay_cap_the_dgv'=>'2023-09-2',
                'dgv_noi_cap_the_dgv'=>'Hà Nội',
                'level'=>'2',
            ],
        ];
        DB::table('admins')->insert($admins);
    }
}
