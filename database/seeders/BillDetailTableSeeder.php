<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bill_detail')->insert([
            
            ['id_bill' => 1, 'id_product'=>19,'quantity'=>1,],
            ['id_bill' => 1, 'id_product'=>3,'quantity'=>1,],
            ['id_bill' => 1, 'id_product'=>17,'quantity'=>3,],
            ['id_bill' => 2, 'id_product'=>14,'quantity'=>4,],
            ['id_bill' => 2, 'id_product'=>3,'quantity'=>3,],
            ['id_bill' => 3, 'id_product'=>5,'quantity'=>3,],
            ['id_bill' => 3, 'id_product'=>3,'quantity'=>4,],
            ['id_bill' => 4, 'id_product'=>3,'quantity'=>4,],
            ['id_bill' => 4, 'id_product'=>15,'quantity'=>3,],
            ['id_bill' => 4, 'id_product'=>8,'quantity'=>1,],
            ['id_bill' => 4, 'id_product'=>21,'quantity'=>2,],
            ['id_bill' => 4, 'id_product'=>7,'quantity'=>4,],
            ['id_bill' => 4, 'id_product'=>9,'quantity'=>3,],
            ['id_bill' => 4, 'id_product'=>1,'quantity'=>5,],
            ['id_bill' => 4, 'id_product'=>19,'quantity'=>2,],
            ['id_bill' => 6, 'id_product'=>2,'quantity'=>3,],
            ['id_bill' => 6, 'id_product'=>7,'quantity'=>5,],
            ['id_bill' => 6, 'id_product'=>5,'quantity'=>2,],
            ['id_bill' => 6, 'id_product'=>13,'quantity'=>1,],
            ['id_bill' => 6, 'id_product'=>16,'quantity'=>3,],
            ['id_bill' => 6, 'id_product'=>12,'quantity'=>5,],
            ['id_bill' => 6, 'id_product'=>4,'quantity'=>5,],
            ['id_bill' => 6, 'id_product'=>18,'quantity'=>1,],
            ['id_bill' => 7, 'id_product'=>8,'quantity'=>1,],
            ['id_bill' => 7, 'id_product'=>6,'quantity'=>5,],
            ['id_bill' => 7, 'id_product'=>9,'quantity'=>3,],
            ['id_bill' => 7, 'id_product'=>7,'quantity'=>5,],
            ['id_bill' => 7, 'id_product'=>12,'quantity'=>2,],
            ['id_bill' => 7, 'id_product'=>13,'quantity'=>5,],
            ['id_bill' => 7, 'id_product'=>2,'quantity'=>2,],
            ['id_bill' => 8, 'id_product'=>20,'quantity'=>1,],
            ['id_bill' => 8, 'id_product'=>19,'quantity'=>2,],
            ['id_bill' => 8, 'id_product'=>16,'quantity'=>3,],
            ['id_bill' => 8, 'id_product'=>9,'quantity'=>3,],
            ['id_bill' => 8, 'id_product'=>2,'quantity'=>1,],
            ['id_bill' => 8, 'id_product'=>14,'quantity'=>4,],
            ['id_bill' => 9, 'id_product'=>3,'quantity'=>4,],
            ['id_bill' => 9, 'id_product'=>4,'quantity'=>3,],
            ['id_bill' => 9, 'id_product'=>13,'quantity'=>4,],
            ['id_bill' => 9, 'id_product'=>3,'quantity'=>2,],
            ['id_bill' => 9, 'id_product'=>19,'quantity'=>5,],
            ['id_bill' => 9, 'id_product'=>11,'quantity'=>3,],
            ['id_bill' => 10, 'id_product'=>20,'quantity'=>5,],
            ['id_bill' => 10, 'id_product'=>17,'quantity'=>1,],
            ['id_bill' => 10, 'id_product'=>11,'quantity'=>1,],
            ['id_bill' => 10, 'id_product'=>9,'quantity'=>2,],
            ['id_bill' => 10, 'id_product'=>19,'quantity'=>4,],
            ['id_bill' => 10, 'id_product'=>18,'quantity'=>2,],
           
            
            
        



        ]);
    }
}
