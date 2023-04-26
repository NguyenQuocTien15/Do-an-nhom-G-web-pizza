<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Detail_CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('detail_cart')->insert([
            ['id_cart' => '1', 'id_product' => '7', 'id_product_option' => '3', 'quantity' => '3',],
            ['id_cart' => '1', 'id_product' => '19', 'id_product_option' => '1', 'quantity' => '3',],
            ['id_cart' => '1', 'id_product' => '9', 'id_product_option' => '1', 'quantity' => '5',],
            ['id_cart' => '1', 'id_product' => '21', 'id_product_option' => '2', 'quantity' => '1',],
            ['id_cart' => '1', 'id_product' => '3', 'id_product_option' => '3', 'quantity' => '2',],
            ['id_cart' => '1', 'id_product' => '18', 'id_product_option' => '3', 'quantity' => '2',],
            ['id_cart' => '1', 'id_product' => '5', 'id_product_option' => '3', 'quantity' => '2',],
            ['id_cart' => '1', 'id_product' => '6', 'id_product_option' => '1', 'quantity' => '5',],
            ['id_cart' => '2', 'id_product' => '5', 'id_product_option' => '1', 'quantity' => '5',],
            ['id_cart' => '2', 'id_product' => '17', 'id_product_option' => '3', 'quantity' => '5',],
            ['id_cart' => '2', 'id_product' => '17', 'id_product_option' => '2', 'quantity' => '3',],
            ['id_cart' => '2', 'id_product' => '6', 'id_product_option' => '2', 'quantity' => '1',],
            ['id_cart' => '2', 'id_product' => '20', 'id_product_option' => '3', 'quantity' => '3',],
            ['id_cart' => '2', 'id_product' => '12', 'id_product_option' => '1', 'quantity' => '1',],
            ['id_cart' => '2', 'id_product' => '16', 'id_product_option' => '1', 'quantity' => '3',],
            ['id_cart' => '2', 'id_product' => '10', 'id_product_option' => '1', 'quantity' => '1',],
            ['id_cart' => '2', 'id_product' => '8', 'id_product_option' => '3', 'quantity' => '5',],
            ['id_cart' => '4', 'id_product' => '9', 'id_product_option' => '1', 'quantity' => '1',],
            ['id_cart' => '4', 'id_product' => '9', 'id_product_option' => '3', 'quantity' => '4',],
            ['id_cart' => '4', 'id_product' => '19', 'id_product_option' => '3', 'quantity' => '1',],
            ['id_cart' => '4', 'id_product' => '13', 'id_product_option' => '1', 'quantity' => '5',],
            ['id_cart' => '4', 'id_product' => '12', 'id_product_option' => '3', 'quantity' => '1',],
            ['id_cart' => '4', 'id_product' => '6', 'id_product_option' => '2', 'quantity' => '2',],
            ['id_cart' => '4', 'id_product' => '20', 'id_product_option' => '1', 'quantity' => '4',],
            ['id_cart' => '5', 'id_product' => '17', 'id_product_option' => '1', 'quantity' => '2',],
            ['id_cart' => '5', 'id_product' => '6', 'id_product_option' => '3', 'quantity' => '3',],
            ['id_cart' => '5', 'id_product' => '15', 'id_product_option' => '3', 'quantity' => '5',],
            ['id_cart' => '5', 'id_product' => '7', 'id_product_option' => '3', 'quantity' => '2',],
            ['id_cart' => '5', 'id_product' => '21', 'id_product_option' => '1', 'quantity' => '2',],
            ['id_cart' => '5', 'id_product' => '1', 'id_product_option' => '1', 'quantity' => '5',],
            ['id_cart' => '5', 'id_product' => '5', 'id_product_option' => '2', 'quantity' => '3',],
            ['id_cart' => '5', 'id_product' => '17', 'id_product_option' => '1', 'quantity' => '1',],
            ['id_cart' => '5', 'id_product' => '6', 'id_product_option' => '2', 'quantity' => '3',],

        ]);
    }
}
