<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('status')->insert(
            [
                ['name'=>'Chuẩn bị nguyên liệu'],
                ['name'=>'Làm bột'],
                ['name'=>'Làm nước sốt'],
                ['name'=>'Nưỡng bánh'],
                ['name'=>'Giao hàng'],
                ['name'=>'Hoàn thành'],
                ['name'=>'Huỷ đơn'],
            ]
        );
    }
}
