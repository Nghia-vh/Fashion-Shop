<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $hinh_arr = [
            'anh2.jpg',
            'anh3.jpg',
            'anh4.webp',
            'anh5.jpg',
            'anh6.webp',
            'anh7.jpg',
            'anh8.webp',
            'anh9.jpg',
            'anh10.jpg',
            'anh11.jpg'
        ];

        // Insert vào bảng tinh_chat
        DB::table('tinh_chat')->insertOrIgnore([
            ['id' => 1, 'ten' => 'Bình Thường'],
            ['id' => 2, 'ten' => 'Giá Rẻ'],
            ['id' => 3, 'ten' => 'Giảm Sốc'],
            ['id' => 4, 'ten' => 'Cao Cấp'],
        ]);

        // Insert vào bảng nha_sx
        DB::table('nha_sx')->insertOrIgnore([
            ['id' => 1, 'ten' => 'NIKE', 'thu_tu' => 1, 'an_hien' => 1],
            ['id' => 2, 'ten' => 'ADIDAS', 'thu_tu' => 2, 'an_hien' => 1],
            ['id' => 3, 'ten' => 'MLB', 'thu_tu' => 3, 'an_hien' => 1],
            ['id' => 4, 'ten' => 'Converse', 'thu_tu' => 4, 'an_hien' => 1],
            ['id' => 5, 'ten' => 'VANS', 'thu_tu' => 5, 'an_hien' => 1],
            ['id' => 6, 'ten' => 'PUMA', 'thu_tu' => 6, 'an_hien' => 1],
            ['id' => 7, 'ten' => 'New Balance', 'thu_tu' => 7, 'an_hien' => 0],
        ]);

        // Insert vào bảng san_pham
        for ($i = 0; $i < 1000; $i++) {
            DB::table('san_pham')->insert([
                'id_nhasx' => mt_rand(1, 7),
                'ten' => 'VEST NAM NỮ CAO CẤP ' . $i,
                'gia' => mt_rand(3000000, 5000000),
                'gia_km' => mt_rand(1000000, 1500000),
                'hinh' => Arr::random($hinh_arr),
                'ngay' => now(),
                'xem' => mt_rand(0, 2000),
                'hot' => mt_rand(0, 1),
                'an_hien' => mt_rand(0, 1),
                'tinh_chat' => mt_rand(1, 4),
                'mau_sac' => Arr::random(['Đỏ', 'Xanh', 'Đen', 'Trắng', 'Vàng']),
                'can_nang' => Arr::random(['500g', '1kg', '1.5kg', '2kg'])
            ]);
        }
    }
}
