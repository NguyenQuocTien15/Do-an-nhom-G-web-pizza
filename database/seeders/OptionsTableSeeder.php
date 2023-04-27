<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('options')->insert([
            [
                'name' => 'Bánh nhỏ',
               'add_price' => 0,
            ],
            [
                'name' => 'Bánh vừa',
               'add_price' => 90000,
            ],
            [
                'name' => 'Bánh lớn',
               'add_price' => 160000,
            ],
           

        ]);
    }
}
