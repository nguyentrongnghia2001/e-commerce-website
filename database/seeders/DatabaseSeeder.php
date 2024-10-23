<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'AnhPhi',
                'email' => 'anhphi@gmail.com',
                'password' => Hash::make('123123'),
                'avatar' => null,
                'level' => 2,
                'description' => null,

                'street_address' => 'Nhon Trach district',
                'phone' => '036363636',

            ],
        ]);

        DB::table('suppliers')->insert([
            [
                'id' => 1,
                'name' => 'Nhà cung cấp 1',
                'email' => 'ncc1@gmail.com',
                'address' => 'Nhon Trach district',
                'phone' => '036363636',
            ],
            [
                'id' => 2,
                'name' => 'Nhà cung cấp 2',
                'email' => 'ncc2@gmail.com',
                'address' => 'Nhon Trach district',
                'phone' => '036363636',
            ],
            [
                'id' => 3,
                'name' => 'Nhà cung cấp 3',
                'email' => 'ncc3@gmail.com',
                'address' => 'Nhon Trach district',
                'phone' => '036363636',
            ],
        ]);

        DB::table('users')->insert([
            [
                'id' => 2,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 1,
                'description' => null,
            ],
        ]);

        DB::table('blogs')->insert([
            [
                'user_id' => 3,
                'title' => 'Top 10 Kem Nền Nào Tốt Nhất Giá Bình Dân Nhất Hiện Nay',
                'subtitle' => 'Kem nền là một sản phẩm không thể thiếu trong makeup, không phải ai cũng có được làn da khỏe không tì vết, chính',
                'image' => 'lamdep1.png',
                'category' => 'Trị Mụn',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Top 9 Phấn Phủ Tốt Nhất Hiện Nay Được Nhiều Người Ưa',
                'subtitle' => 'Phấn phủ là các tinh thể cực kỳ nhỏ bé, mỏng, có độ bám trên da và kết cấu ở dạng khô. Ta dùng phấn phủ để lớp',
                'image' => 'lamdep2.png',
                'category' => 'Trắng Da',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Top 10 Kem Chống Nắng Cao Cấp Nhất',
                'subtitle' => 'Sử dụng kem chống nắng có thể giúp bảo vệ cho làn da của bạn trước tác động từ tia UV. Trong thời gian từ 9h',
                'image' => 'lamdep3.png',
                'category' => 'Trị Mụn',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Top 10 Kem Nền Nào Tốt Nhất Giá Bình Dân Nhất Hiện Nay',
                'subtitle' => 'Kem nền là một sản phẩm không thể thiếu trong makeup, không phải ai cũng có được làn da khỏe không tì vết, chính',
                'image' => 'lamdep1.png',
                'category' => 'Trị Mụn',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Top 9 Phấn Phủ Tốt Nhất Hiện Nay Được Nhiều Người Ưa',
                'subtitle' => 'Phấn phủ là các tinh thể cực kỳ nhỏ bé, mỏng, có độ bám trên da và kết cấu ở dạng khô. Ta dùng phấn phủ để lớp',
                'image' => 'lamdep2.png',
                'category' => 'Trắng Da',
                'content' => '',
            ],
           
        ]);

        DB::table('brands')->insert([
            [
                'name' => 'ANESSA',
            ],
            [
                'name' => 'LAROCHE-POSAY',
            ],
            [
                'name' => 'CERAVE',
            ],
            [
                'name' => 'SVR',
            ],
        ]);

        DB::table('madeins')->insert([
            [
                'name' => 'Pháp',
            ],
            [
                'name' => 'Mỹ',
            ],
            [
                'name' => 'Anh',
            ],

        ]);

        DB::table('product_categories')->insert([
            [
                'name' => 'Sữa Rửa Mặt',
            ],
            [
                'name' => 'Kem Chống Nắng',
            ],
            [
                'name' => 'Tẩy Trang',
            ],
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'brand_id' => 1,
                'product_category_id' => 1,
                'madein_id' => 1,
                'name' => 'Sửa Rửa Mặt 1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor',
                'content' => '',
                'price' => 200000,
                'qty' => 20,
                'discount' => 180000,
                'weight' => 1.3,
                'sku' => '00012',
                'status' => 1,
                
            ],
            [
                'id' => 2,
                'brand_id' => 2,
                'product_category_id' => 1,
                'madein_id' => 1,
                'name' => 'Sửa Rửa Mặt 2',
                'description' => null,
                'content' => null,
                'price' => 170000,
                'qty' => 20,
                'discount' => 150000,
                'weight' => null,
                'sku' => null,
                'status' => 0,
                
            ],
            [
                'id' => 3,
                'brand_id' => 3,
                'product_category_id' => 1,
                'madein_id' => 1,
                'name' => 'Sửa Rửa Mặt 3',
                'description' => null,
                'content' => null,
                'price' => 30000,
                'qty' => 20,
                'discount' => 15000,
                'weight' => null,
                'sku' => null,
                'status' => 1,
                
            ],
            [
                'id' => 4,
                'brand_id' => 4,
                'product_category_id' => 2,
                'madein_id' => 1,
                'name' => 'Kem Chống Nắng 1',
                'description' => null,
                'content' => null,
                'price' => 40000,
                'qty' => 20,
                'discount' => 30000,
                'weight' => null,
                'sku' => null,
                'status' => 0,
                
            ],
            [
                'id' => 5,
                'brand_id' => 1,
                'product_category_id' => 2,
                'madein_id' => 1,
                'name' => "Kem Chống Nắng 2",
                'description' => null,
                'content' => null,
                'price' => 70000,
                'qty' => 20,
                'discount' => 60000,
                'weight' => null,
                'sku' => null,
                'status' => 1,
                
            ],
            [
                'id' => 6,
                'brand_id' => 1,
                'product_category_id' => 2,
                'madein_id' => 1,
                'name' => 'Kem Chống Nắng 3',
                'description' => null,
                'content' => null,
                'price' => 100000,
                'qty' => 20,
                'discount' => 80000,
                'weight' => null,
                'sku' => null,
                'status' => 1,
                
            ],
            [
                'id' => 7,
                'brand_id' => 1,
                'product_category_id' => 3,
                'madein_id' => 1,
                'name' => 'Tẩy Trang 1',
                'description' => null,
                'content' => null,
                'price' => 120000,
                'qty' => 20,
                'discount' => 100000,
                'weight' => null,
                'sku' => null,
                'status' => 1,
               
            ],
            [
                'id' => 8,
                'brand_id' => 1,
                'product_category_id' => 3,
                'madein_id' => 1,
                'name' => 'Tẩy Trang 2',
                'description' => null,
                'content' => null,
                'price' => 100000,
                'qty' => 20,
                'discount' => 80000,
                'weight' => null,
                'sku' => null,
                'status' => 1,
               
            ],
            [
                'id' => 9,
                'brand_id' => 1,
                'product_category_id' => 3,
                'madein_id' => 1,
                'name' => 'Tẩy Trang 3',
                'description' => null,
                'content' => null,
                'price' => 90000,
                'qty' => 20,
                'discount' => 80000,
                'weight' => null,
                'sku' => null,
                'status' => 1,
                
            ],
            [
                'id' => 10,
                'brand_id' => 1,
                'product_category_id' => 1,
                'madein_id' => 1,
                'name' => 'Sửa Rửa Mặt 4',
                'description' => null,
                'content' => null,
                'price' => 90000,
                'qty' => 20,
                'discount' => 80000,
                'weight' => null,
                'sku' => null,
                'status' => 1,

            ],
            [
                'id' => 11,
                'brand_id' => 1,
                'product_category_id' => 1,
                'madein_id' => 1,
                'name' => 'Sửa Rửa Mặt 5',
                'description' => null,
                'content' => null,
                'price' => 90000,
                'qty' => 20,
                'discount' => 80000,
                'weight' => null,
                'sku' => null,
                'status' => 1,

            ],
            [
                'id' => 12,
                'brand_id' => 1,
                'product_category_id' => 1,
                'madein_id' => 1,
                'name' => 'Sửa Rửa Mặt 6',
                'description' => null,
                'content' => null,
                'price' => 90000,
                'qty' => 20,
                'discount' => 80000,
                'weight' => null,
                'sku' => null,
                'status' => 1,

            ],
            [
                'id' => 13,
                'brand_id' => 1,
                'product_category_id' => 2,
                'madein_id' => 1,
                'name' => 'Kem Chống Nắng 4',
                'description' => null,
                'content' => null,
                'price' => 90000,
                'qty' => 20,
                'discount' => 80000,
                'weight' => null,
                'sku' => null,
                'status' => 1,

            ],
           
            [
                'id' => 14,
                'brand_id' => 1,
                'product_category_id' => 2,
                'madein_id' => 1,
                'name' => 'Kem Chống Nắng 6',
                'description' => null,
                'content' => null,
                'price' => 90000,
                'qty' => 20,
                'discount' => 80000,
                'weight' => null,
                'sku' => null,
                'status' => 1,

            ],
            [
                'id' => 15,
                'brand_id' => 1,
                'product_category_id' => 2,
                'madein_id' => 1,
                'name' => 'Kem Chống Nắng 7',
                'description' => null,
                'content' => null,
                'price' => 90000,
                'qty' => 20,
                'discount' => 80000,
                'weight' => null,
                'sku' => null,
                'status' => 1,

            ],
           
            [
                'id' => 16,
                'brand_id' => 1,
                'product_category_id' => 3,
                'madein_id' => 1,
                'name' => 'Tẩy Trang 5',
                'description' => null,
                'content' => null,
                'price' => 90000,
                'qty' => 20,
                'discount' => 80000,
                'weight' => null,
                'sku' => null,
                'status' => 1,

            ],
            [
                'id' => 17,
                'brand_id' => 1,
                'product_category_id' => 3,
                'madein_id' => 1,
                'name' => 'Tẩy Trang 6',
                'description' => null,
                'content' => null,
                'price' => 90000,
                'qty' => 20,
                'discount' => 80000,
                'weight' => null,
                'sku' => null,
                'status' => 1,

            ],
            [
                'id' => 18,
                'brand_id' => 1,
                'product_category_id' => 3,
                'madein_id' => 1,
                'name' => 'Tẩy Trang 7',
                'description' => null,
                'content' => null,
                'price' => 90000,
                'qty' => 20,
                'discount' => 80000,
                'weight' => null,
                'sku' => null,
                'status' => 1,

            ],
            [
                'id' => 19,
                'brand_id' => 1,
                'product_category_id' => 2,
                'madein_id' => 1,
                'name' => 'Kem Chống Nắng 5',
                'description' => null,
                'content' => null,
                'price' => 90000,
                'qty' => 20,
                'discount' => 80000,
                'weight' => null,
                'sku' => null,
                'status' => 1,

            ],
            [
                'id' => 20,
                'brand_id' => 1,
                'product_category_id' => 3,
                'madein_id' => 1,
                'name' => 'Tẩy Trang 4',
                'description' => null,
                'content' => null,
                'price' => 90000,
                'qty' => 20,
                'discount' => 80000,
                'weight' => null,
                'sku' => null,
                'status' => 1,

            ],
        ]);

        // DB::table('product_images')->insert([
        //     [
        //         'product_id' => 1,
        //         'path' => 'srm-1.jpg',
        //     ],
        //     [
        //         'product_id' => 2,
        //         'path' => 'srm-2.jpg',
        //     ],
        //     [
        //         'product_id' => 3,
        //         'path' => 'srm-3.png',
        //     ],
        //     [
        //         'product_id' => 4,
        //         'path' => 'kcn-1.png',
        //     ],
        //     [
        //         'product_id' => 5,
        //         'path' => 'kcn-2.png',
        //     ],
        //     [
        //         'product_id' => 6,
        //         'path' => 'kcn-3.png',
        //     ],
        //     [
        //         'product_id' => 7,
        //         'path' => 'tt-1.png',
        //     ],
        //     [
        //         'product_id' => 8,
        //         'path' => 'tt-2.png',
        //     ],
        //     [
        //         'product_id' => 9,
        //         'path' => 'tt-3.png',
        //     ],
        // ]);


        DB::table('product_comments')->insert([
            [
                'product_id' => 1,
                'user_id' => 4,
                'email' => 'BrandonKelley@gmail.com',
                'name' => 'Brandon Kelley',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 1,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
        ]);
    }
}
