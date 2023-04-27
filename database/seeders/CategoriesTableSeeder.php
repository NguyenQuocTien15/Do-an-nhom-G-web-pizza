<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Pizza',
                'parent_id' => 0,
                
            ],
            [
                'name' => 'Hải sản',
                'parent_id' => 1,
            ],
            [
                'name' => 'Bò',
                'parent_id' => 1,
            ],
            [
                'name' => 'Gà',
                'parent_id' => 1,
            ],
            [
                'name' => 'Heo',
                'parent_id' => 1,
            ],
            [
                'name' => 'Ăn chay',
                'parent_id' => 1,
            ],
            [
                'name' => 'Món phụ',
                'parent_id' => 0,
            ],
            [
                'name' => 'Tráng miệng',
                'parent_id' => 0,
            ],
            [
                'name' => 'Thức uống',
                'parent_id' => 0,
            ],
            [
                'name' => 'Gà',
                'parent_id' => 7,
            ],[
                'name' => 'Heo',
                'parent_id' => 7,
            ],[
                'name' => 'Ăn chay',
                'parent_id' => 7,
            ],

        ]);
    }
}
