<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [
            ['cat_name' => 'Adidas'],
            ['cat_name' => 'Jordan'],
            ['cat_name' => 'Nike']
        ];

        DB::table('categories')->insert($categories);
    }
}
