<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('product_option')->insert([
            ['product_id' => 1,'option_id' => 1,],
            ['product_id' => 1,'option_id' => 2,],
            ['product_id' => 1,'option_id' => 3,],
            ['product_id' => 2,'option_id' => 1,],
            ['product_id' => 2,'option_id' => 2,],
            ['product_id' => 2,'option_id' => 3,],
            ['product_id' => 3,'option_id' => 1,],
            ['product_id' => 3,'option_id' => 2,],
            ['product_id' => 3,'option_id' => 3,],
            ['product_id' => 4,'option_id' => 1,],
            ['product_id' => 4,'option_id' => 2,],
            ['product_id' => 4,'option_id' => 3,],
            ['product_id' => 5,'option_id' => 1,],
            ['product_id' => 5,'option_id' => 2,],
            ['product_id' => 5,'option_id' => 3,],
            ['product_id' => 6,'option_id' => 1,],
            ['product_id' => 6,'option_id' => 2,],
            ['product_id' => 6,'option_id' => 3,],
            ['product_id' => 7,'option_id' => 1,],
            ['product_id' => 7,'option_id' => 2,],
            ['product_id' => 7,'option_id' => 3,],
            ['product_id' => 8,'option_id' => 1,],
            ['product_id' => 8,'option_id' => 2,],
            ['product_id' => 8,'option_id' => 3,],
            ['product_id' => 9,'option_id' => 1,],
            ['product_id' => 9,'option_id' => 2,],
            ['product_id' => 9,'option_id' => 3,],
            ['product_id' => 10,'option_id' => 1,],
            ['product_id' => 10,'option_id' => 2,],
            ['product_id' => 10,'option_id' => 3,],
            ['product_id' => 11,'option_id' => 1,],
            ['product_id' => 11,'option_id' => 2,],
            ['product_id' => 11,'option_id' => 3,],
            ['product_id' => 12,'option_id' => 1,],
            ['product_id' => 12,'option_id' => 2,],
            ['product_id' => 12,'option_id' => 3,],
            ['product_id' => 13,'option_id' => 1,],
            ['product_id' => 13,'option_id' => 2,],
            ['product_id' => 13,'option_id' => 3,],
            ['product_id' => 14,'option_id' => 1,],
            ['product_id' => 14,'option_id' => 2,],
            ['product_id' => 14,'option_id' => 3,],
            ['product_id' => 15,'option_id' => 1,],
            ['product_id' => 15,'option_id' => 2,],
            ['product_id' => 15,'option_id' => 3,],
            ['product_id' => 16,'option_id' => 1,],
            ['product_id' => 16,'option_id' => 2,],
            ['product_id' => 16,'option_id' => 3,],
            ['product_id' => 17,'option_id' => 1,],
            ['product_id' => 17,'option_id' => 2,],
            ['product_id' => 17,'option_id' => 3,],
            ['product_id' => 18,'option_id' => 1,],
            ['product_id' => 18,'option_id' => 2,],
            ['product_id' => 18,'option_id' => 3,],
            ['product_id' => 19,'option_id' => 1,],
            ['product_id' => 19,'option_id' => 2,],
            ['product_id' => 19,'option_id' => 3,],
            ['product_id' => 20,'option_id' => 1,],
            ['product_id' => 20,'option_id' => 2,],
            ['product_id' => 20,'option_id' => 3,],
            ['product_id' => 21,'option_id' => 1,],
            ['product_id' => 21,'option_id' => 2,],
            ['product_id' => 21,'option_id' => 3,],
           
           

        ]);
    

    }
}
