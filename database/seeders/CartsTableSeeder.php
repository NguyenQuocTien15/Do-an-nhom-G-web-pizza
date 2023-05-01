<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('carts')->insert([
            
            ['user_id' => 5, 'id_voucher'=>null,],
            ['user_id' => 6, 'id_voucher'=>null,],
            ['user_id' => 7, 'id_voucher'=>null,],
            ['user_id' => 8, 'id_voucher'=>null,],
            ['user_id' => 9, 'id_voucher'=>null,],
            ['user_id' => 10, 'id_voucher'=>null,],
            ['user_id' => 11, 'id_voucher'=>null,],
            ['user_id' => 12, 'id_voucher'=>null,],
            ['user_id' => 13, 'id_voucher'=>null,],
            ['user_id' => 14, 'id_voucher'=>null,],
            ['user_id' => 15, 'id_voucher'=>null,],
            ['user_id' => 16, 'id_voucher'=>null,],
            ['user_id' => 17, 'id_voucher'=>null,],
            ['user_id' => 18, 'id_voucher'=>null,],
            ['user_id' => 19, 'id_voucher'=>null,],
            ['user_id' => 20, 'id_voucher'=>null,],
            ['user_id' => 21, 'id_voucher'=>null,],
            ['user_id' => 22, 'id_voucher'=>null,],
            ['user_id' => 23, 'id_voucher'=>null,],
            ['user_id' => 24, 'id_voucher'=>null,],
            ['user_id' => 25, 'id_voucher'=>null,],
            ['user_id' => 26, 'id_voucher'=>null,],
            ['user_id' => 27, 'id_voucher'=>null,],
            ['user_id' => 28, 'id_voucher'=>null,],
            ['user_id' => 29, 'id_voucher'=>null,],
            ['user_id' => 30, 'id_voucher'=>null,],
            ['user_id' => 31, 'id_voucher'=>null,],
            ['user_id' => 32, 'id_voucher'=>null,],
            ['user_id' => 33, 'id_voucher'=>null,],
            ['user_id' => 34, 'id_voucher'=>null,],
            ['user_id' => 35, 'id_voucher'=>null,],
            ['user_id' => 36, 'id_voucher'=>null,],
            ['user_id' => 37, 'id_voucher'=>null,],
            ['user_id' => 38, 'id_voucher'=>null,],
            ['user_id' => 39, 'id_voucher'=>null,],
            ['user_id' => 40, 'id_voucher'=>null,],
            ['user_id' => 41, 'id_voucher'=>null,],
            ['user_id' => 42, 'id_voucher'=>null,],
            ['user_id' => 43, 'id_voucher'=>null,],
            ['user_id' => 44, 'id_voucher'=>null,],
            ['user_id' => 45, 'id_voucher'=>null,],
            ['user_id' => 46, 'id_voucher'=>null,],
            ['user_id' => 47, 'id_voucher'=>null,],

            ['user_id' => 48, 'id_voucher'=>1001,],
            ['user_id' => 49, 'id_voucher'=>1002,],
            ['user_id' => 50, 'id_voucher'=>1003,],
            ['user_id' => 51, 'id_voucher'=>1004,],
            ['user_id' => 52, 'id_voucher'=>1005,],
            ['user_id' => 53, 'id_voucher'=>1006,],
            
        



        ]);
    }
}
