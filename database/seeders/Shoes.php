<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Shoes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shoes = [
            ['cat_id' => '1', 'name' => 'Adidas Trae Young 2', 'price' => 2100000, 'detail' => 'bagus banget buat lari', 'image' => 'storage/img/Adidas-1.png'],
            ['cat_id' => '1', 'name' => 'Adidas Dame 8 Mr. Incredible', 'price' => 2000000, 'detail' => 'bagus banget buat olahraga', 'image' => 'storage/img/Adidas-2.png'],
            ['cat_id' => '1', 'name' => 'Adidas Dame 8 Bridge City', 'price' => 2000000, 'detail' => 'Warnanya oke', 'image' => 'storage/img/Adidas-3.png'],
            ['cat_id' => '1', 'name' => 'Adidas Harden Stepback', 'price' => 1400000, 'detail' => 'Cocok buat travelling', 'image' => 'storage/img/Adidas-4.png'],
            ['cat_id' => '1', 'name' => 'Adidas Harden Stepback 3', 'price' => 1400000, 'detail' => 'Cocok buat study tour', 'image' => 'storage/img/Adidas-5.png'],
            ['cat_id' => '2', 'name' => 'Jordan Jumpman Two Trey', 'price' => 2329000, 'detail' => 'Bagus banget buat sekolah', 'image' => 'storage/img/Jordan-1.png'],
            ['cat_id' => '2', 'name' => 'Jordan Zion 2 PF', 'price' => 1869000, 'detail' => 'Warnanya limited edition', 'image' => 'storage/img/Jordan-2.png'],
            ['cat_id' => '2', 'name' => 'Air Jordan 7 Retro Kids', 'price' => 2059000, 'detail' => 'Bagus banget buat sekolah', 'image' => 'storage/img/Jordan-3.png'],
            ['cat_id' => '2', 'name' => 'Air Jordan 11 Retro Women', 'price' => 3309000, 'detail' => 'Cocok untuk daily life', 'image' => 'storage/img/Jordan-4.png'],
            ['cat_id' => '2', 'name' => 'Jordan Luka 1 PF', 'price' => 1729000, 'detail' => 'Lagi ngetren', 'image' => 'storage/img/Jordan-5.png'],
            ['cat_id' => '2', 'name' => 'Air Jordan 5 Retro Women', 'price' => 3799000, 'detail' => 'bagus banget buat sekolah', 'image' => 'storage/img/Jordan-6.png'],
            ['cat_id' => '2', 'name' => 'Air Jordan 3 Retro SE', 'price' => 3199000, 'detail' => 'Diskon buat air Jordan 3 retronya', 'image' => 'storage/img/Jordan-7.png'],
            ['cat_id' => '2', 'name' => 'Jordan Air 200E', 'price' => 2079000, 'detail' => 'Bagus banget buat jalan-jalan', 'image' => 'storage/img/Jordan-8.png'],
            ['cat_id' => '3', 'name' => 'Nike PG 6 EP “BRED” ', 'price' => 1729000, 'detail' => 'Limited edition', 'image' => 'storage/img/Nike-1.png'],
            ['cat_id' => '3', 'name' => 'Nike PG 6 EP “White Black”', 'price' => 1729000, 'detail' => 'New arrival', 'image' => 'storage/img/Nike-2.png'],
            ['cat_id' => '3', 'name' => 'Nike Cosmic Unity 2', 'price' => 2329000, 'detail' => 'Dapet potongan harga 200 ribu', 'image' => 'storage/img/Nike-3.png'],
            ['cat_id' => '3', 'name' => 'Nike KD15 EP', 'price' => 2329000, 'detail' => 'Dapet sticker', 'image' => 'storage/img/Nike-4.png'],
            ['cat_id' => '3', 'name' => 'Nike Zoom Freak 4', 'price' => 1899000, 'detail' => 'Dapet merchandise', 'image' => 'storage/img/Nike-5.png'],
            ['cat_id' => '3', 'name' => 'Lebron Witness VII EP', 'price' => 1499000, 'detail' => 'Diskon untuk lebron witness', 'image' => 'storage/img/Nike-6.png'],
            ['cat_id' => '3', 'name' => 'Nike Air Deldon', 'price' => 1869000, 'detail' => 'Warnanya bagus', 'image' => 'storage/img/Nike-7.png']
        ];

        DB::table('shoes')->insert($shoes);


    }
}
