<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotifiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('notifies')->delete();
        $notifies = [
            [
                'id' => '1',
                'info' => 'Công ty Đấu giá Hợp danh 2E HHT Việt Nam Thông báo danh sách khách hàng không đủ điều kiện tham gia đấu giá Tài sản cố định & Công cụ dụng cụ lô thiết bị văn phòng cũ hỏng năm 2021 của Bộ Ngoại giao.',
                'link'=>'618.pdf',
            ],
            [
                'id' => '2',
                'info' => 'Công ty Đấu giá Hợp danh An Bình Thông báo bán Đấu giá tài sản là Quyền sử dụng đất và tài sản gắn liền với đất tại thửa đất số 16; tờ bản đồ số 2; tại địa chỉ: Khối Thanh Tây, phường Cẩm Châu, thành phố Hội An, tỉnh Quảng Nam; diện tích 1434,1 m2.',
                'link'=>'1452.pdf',
            ],
            [
                'id' => '3',
                'info' => 'Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Đấu giá tài sản là quyền sử dụng đất đối với các thửa đất trên địa bàn phường Long Biên, quận Long Biên, Thành phố Hà Nội.',
                'link'=>'1453.pdf',
            ],
            [
                'id' => '4',
                'info' => 'Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Tạm dừng tổ chức cuộc đấu giá tài sản là quyền sử dụng đất thuê để sử dụng vào mục đích sản xuất nông nghiệp (trồng cây hàng năm) tại bãi 8A (khu đất công ích), xã Trung Châu, huyện Đan Phượng, thành phố Hà Nội.',
                'link'=>'1461.pdf',
            ],
            [
                'id' => '5',
                'info' => 'Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Đấu giá quyền sử dụng đất ở đối với 10 thửa đất thuộc ô TĐC-DV02; TĐC-DV10 và TĐC-DV12 tại khu đô thị HUD - Sơn Tây, phường Trung Hưng, thị xã Sơn Tây, thành phố Hà Nội..',
                'link'=>'1464.pdf',
            ],
            [
                'id' => '6',
                'info' => 'Công ty Đấu giá Hợp danh Tân Đại Phát Thông báo Đấu giá tài sản là Tài sản, công cụ dụng cụ cũ, đã qua sử dụng (Tài sản thu hồi nợ tại mặt bằng Nhà dịch vụ cho thuê) của Trường Cao đẳng Truyền hình. .',
                'link'=>'1473.pdf',
            ],
            [
                'id' => '7',
                'info' => 'Công ty Đấu giá HD Số 5 - Quốc gia Thông báo Đấu giá QSD đất thuê để sử dụng vào mục đích sản xuất nông nghiệp Khu đồng Cao Bạn, thôn Ích Vịnh và Khu đồng Ngọn Đầm, thôn Cổ Thượng xã Phương Đình, huyện Đan Phượng.',
                'link'=>'1474.pdf',
            ],
            [
                'id' => '8',
                'info' => 'Trung tâm DỊch vụ Đấu giá tài sản tỉnh Đông Nai Thông báo Đấu giá là Lô gỗ tận thu rừng trồng là gỗ Dầu (80 lóng), khối lượng 8,349m3 của Công ty TNHH MTV Lâm Nghiệp La Ngà - Đồng Nai.',
                'link'=>'1475.pdf',
            ],
            [
                'id' => '9',
                'info' => 'Trung tâm DỊch vụ Đấu giá tài sản tỉnh Đông Nai Thông báo Đấu giá là Lô gỗ tận thu rừng trồng là gỗ Dầu (354 lóng), khối lượng 59,48m3 của Công ty TNHH MTV Lâm Nghiệp La Ngà - Đồng Nai.',
                'link'=>'1476.pdf',
            ],
            [
                'id' => '10',
                'info' => 'Công ty Đấu giá Hợp danh Đông Nam thông báo đấu giá tài sản là: Quyền sử dụng đất diện tích 83,1m2 thuộc thửa đất số 45, tờ bản đồ số 26 tọa lạc tại thôn Hải Triều, xã Vạn Long, huyện Vạn Ninh, tỉnh Khánh Hòa và tài sản gắn liền với đất..',
                'link'=>'1481.pdf',
            ],
            [
                'id' => '11',
                'info' => 'Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Dừng tổ chức cuộc đấu giá tài sản là lô tài sản thanh lý gồm tài sản cố định, công cụ dụng cụ, vật tư tồn kho, hàng hóa đã qua sử dụng, không có nhu cầu sử dụng, có chứa chất thải nguy hại của Tập đoàn Công nghiệp - Viễn thông quân đội (dự kiến cuộc đấu giá tổ chức ngày 31/8/2023.',
                'link'=>'1482.pdf',
            ],
            [
                'id' => '12',
                'info' => 'Công ty Đấu giá Hợp danh 2E HHT Việt Nam thông báo đấu giá đối với: Lô tài sản tịch thu sung quỹ nhà nước gồm: 01 máy đào bánh xích nhãn hiệu DAWOO – 300LCV và 01 xe ô tô nhãn hiệu KIA Cerato, màu trắng, biển số 30E-608.68, loại xe 5 chỗ ngồi, xe đã qua sử dụng, số khung RNYYE41A6GC078918, số máy G4FGGS029925, năm sản xuất 2016.',
                'link'=>'1483.pdf',
            ],
            [
                'id' => '13',
                'info' => 'Công ty Đấu giá Hợp danh 2E HHT Việt Nam thông báo đấu giá đối với tài sản: 01 xe ô tô nhãn hiệu Vinfast; Biển số 99A-578.54; theo GCN đăng ký xe ô tô số 99 000490 do Công an thành phố Từ Sơn, tỉnh Bắc Ninh cấp ngày 07/09/2022..',
                'link'=>'1484.pdf',
            ],
            [
                'id' => '14',
                'info' => 'Công ty Đấu giá Hợp danh số 5 – Quốc gia Thông báo Đấu giá tài sản là xe ô tô phục vụ công tác chung dôi dư thu hồi theo Quyết định số 1263/QĐ-UBND ngày 15 tháng 4 năm 2021 của UBND thành phố Đà Nẵng về việc thu hồi tài sản công.',
                'link'=>'1485.pdf',
            ],
            [
                'id' => '15',
                'info' => 'Công ty Đấu giá Hợp danh 2E HHT Việt Nam thông báo đấu giá đối với tài sản: 01 xe tải và 01 máy xúc đã qua sử dụng.',
                'link'=>'1486.pdf',
            ],
            [
                'id' => '16',
                'info' => 'Công ty Đấu giá Hợp danh Số 5 - Quốc gia Thông báo Đấu giá tài sản là quyền sử dụng đất ở tại thôn Tân Thái, xã Hiền Ninh, huyện Sóc Sơn, thành phố Hà Nội.',
                'link'=>'1487.pdf',
            ],
        ];
        DB::table('notifies')->insert($notifies);
    }
}
