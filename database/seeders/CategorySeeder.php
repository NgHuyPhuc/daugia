<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->delete();
        $categories = [
            [
                'id' => '1',
                'name' => 'QUYỀN SỬ DỤNG ĐẤT ĐỂ GIAO ĐẤT HOẶC CHO THUÊ ĐẤT',
            ],
            [
                'id' => '2',
                'name' => 'TÀI SẢN LÀ NỢ XẤU VÀ TÀI SẢN BẢO ĐẢM TẠI TỔ CHỨC TÍN DỤNG',
            ],
            [
                'id' => '3',
                'name' => 'TÀI SẢN THI HÀNH ÁN',
            ],
            [
                'id' => '4',
                'name' => 'TÀI SẢN LÀ TANG VẬT, PHƯƠNG TIỆN VI PHẠM HÀNH CHÍNH HOẶC TÀI SẢN KÊ BIÊN',
            ],
            [
                'id' => '5',
                'name' => 'CÁC LOẠI TÀI SẢN KHÁC',
            ],

        ];
        DB::table('categories')->insert($categories);
    }
}
