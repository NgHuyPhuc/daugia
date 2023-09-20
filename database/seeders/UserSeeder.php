<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();
        $users = [
            [
                'id' => '1',
                'email' => 'khach1@gmail.com',
                'password'=>bcrypt(123456),
                'name' => 'Khách 1',
                'phone' => '0326691468',
                'imgccdtrc'=>'236008.jpg',
                'imgccdsau'=>'22017.jpg',
                'dob'=>Carbon::create(2001-6-22),
                'gender'=>'1',
                'address'=>'Hà Nội',
                'cccd'=>'213456789',
                'ngay_cap_cccd'=>Carbon::create(2015-11-11),
                'noi_cap_cccd'=>'Hà Nội',
                'bank_account_number'=>'123443534',
                'bank'=>'BIDV',
                'bank_branch'=>'Cầu Giấy',
                'account_holder_name'=>'NGUYEN HUY PHUC',
                'dgv_chung_chi'=>null,
                'dgv_ngay_cap_chung_chi'=>null,
                'dgv_so_the_dgv'=>null,
                'dgv_ngay_cap_the_dgv'=>null,
                'dgv_noi_cap_the_dgv'=>null,
                'level'=>'1',
            ],
            [
                'id' => '2',
                'email' => 'khach2@gmail.com',
                'password'=>bcrypt(123456),
                'name' => 'Khách 2',
                'phone' => '0326691468',
                'imgccdtrc'=>'236008.jpg',
                'imgccdsau'=>'22017.jpg',
                'dob'=>Carbon::create(2001-12-22),
                'gender'=>'2',
                'address'=>'Hà Nội',
                'cccd'=>'546475324',
                'ngay_cap_cccd'=>Carbon::create(2015-11-11),
                'noi_cap_cccd'=>'Hà Nội',
                'bank_account_number'=>'125654643',
                'bank'=>'BIDV',
                'bank_branch'=>'Cầu Giấy',
                'account_holder_name'=>'Khach 2',
                'dgv_chung_chi'=>null,
                'dgv_ngay_cap_chung_chi'=>null,
                'dgv_so_the_dgv'=>null,
                'dgv_ngay_cap_the_dgv'=>null,
                'dgv_noi_cap_the_dgv'=>null,
                'level'=>'1',
            ],
            [
                'id' => '3',
                'email' => 'nguyenvana@gmail.com',
                'password'=>bcrypt(123456),
                'name' => 'Nguyễn Văn A',
                'phone' => '0326691468',
                'imgccdtrc'=>'22017.jpg',
                'imgccdsau'=>null,
                'dob'=>null,
                'gender'=>null,
                'address'=>null,
                'cccd'=>null,
                'ngay_cap_cccd'=>null,
                'noi_cap_cccd'=>null,
                'bank_account_number'=>null,
                'bank'=>null,
                'bank_branch'=>null,
                'account_holder_name'=>null,
                'dgv_chung_chi'=>'dgv_chung_chi 1',
                'dgv_ngay_cap_chung_chi'=>Carbon::create(2023-9-13),
                'dgv_so_the_dgv'=>'dgv_so_the_dgv 1',
                'dgv_ngay_cap_the_dgv'=>Carbon::create(2023-9-13),
                'dgv_noi_cap_the_dgv'=>'Hà Nội',
                'level'=>'2',
            ],
            [
                'id' => '4',
                'email' => 'nguyenvanb@gmail.com',
                'password'=>bcrypt(123456),
                'name' => 'Nguyễn Văn B',
                'phone' => '0326691468',
                'imgccdtrc'=>'22017.jpg',
                'imgccdsau'=>null,
                'dob'=>null,
                'gender'=>null,
                'address'=>null,
                'cccd'=>null,
                'ngay_cap_cccd'=>null,
                'noi_cap_cccd'=>null,
                'bank_account_number'=>null,
                'bank'=>null,
                'bank_branch'=>null,
                'account_holder_name'=>null,
                'dgv_chung_chi'=>'dgv_chung_chi 2',
                'dgv_ngay_cap_chung_chi'=>Carbon::create(2023-9-1),
                'dgv_so_the_dgv'=>'dgv_so_the_dgv 3',
                'dgv_ngay_cap_the_dgv'=>Carbon::create(2023-9-1),
                'dgv_noi_cap_the_dgv'=>'Hà Nội',
                'level'=>'2',
            ],
            [
                'id' => '5',
                'email' => 'nguyenvanc@gmail.com',
                'password'=>bcrypt(123456),
                'name' => 'Nguyễn Văn C',
                'phone' => '0326691468',
                'imgccdtrc'=>'_league-of-legends-lol-wallpaper-full-hd- 88.jpg',
                'imgccdsau'=>null,
                'dob'=>null,
                'gender'=>null,
                'address'=>null,
                'cccd'=>null,
                'ngay_cap_cccd'=>null,
                'noi_cap_cccd'=>null,
                'bank_account_number'=>null,
                'bank'=>null,
                'bank_branch'=>null,
                'account_holder_name'=>null,
                'dgv_chung_chi'=>'dgv_chung_chi 3',
                'dgv_ngay_cap_chung_chi'=>Carbon::create(2023-9-2),
                'dgv_so_the_dgv'=>'dgv_so_the_dgv 2',
                'dgv_ngay_cap_the_dgv'=>Carbon::create(2023-9-2),
                'dgv_noi_cap_the_dgv'=>'Hà Nội',
                'level'=>'2',
            ],
        ];
        DB::table('users')->insert($users);
    }
}
