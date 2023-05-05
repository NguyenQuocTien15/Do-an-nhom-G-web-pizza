<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('bills')->insert(
            [
                ['id_user'=>'1','id_status'=>'6','id_voucher'=>null,'address'=>'Linh đông',],
                ['id_user'=>'2','id_status'=>'4','id_voucher'=>null,'address'=>'Linh đông',],
                ['id_user'=>'3','id_status'=>'7','id_voucher'=>null,'address'=>'Linh đông',],
                ['id_user'=>'4','id_status'=>'3','id_voucher'=>null,'address'=>'Linh đông',],
                ['id_user'=>'5','id_status'=>'6','id_voucher'=>null,'address'=>'Linh đông',],
                ['id_user'=>'6','id_status'=>'1','id_voucher'=>null,'address'=>'Linh đông',],
                ['id_user'=>'7','id_status'=>'2','id_voucher'=>null,'address'=>'Linh đông',],
                ['id_user'=>'8','id_status'=>'7','id_voucher'=>null,'address'=>'Linh đông',],
                ['id_user'=>'9','id_status'=>'1','id_voucher'=>null,'address'=>'Linh đông',],

                ['id_user'=>'10','id_status'=>'1','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'11','id_status'=>'2','id_voucher'=>2002,'address'=>'Linh đông',],
                ['id_user'=>'12','id_status'=>'3','id_voucher'=>2003,'address'=>'Linh đông',],
                ['id_user'=>'13','id_status'=>'4','id_voucher'=>2004,'address'=>'Linh đông',],
                ['id_user'=>'14','id_status'=>'5','id_voucher'=>2005,'address'=>'Linh đông',],
                ['id_user'=>'15','id_status'=>'6','id_voucher'=>2006,'address'=>'Linh đông',],
                

                

                ['id_user'=>'10','id_status'=>'1','id_voucher'=>2001,'address'=>'Linh đông',],

                ['id_user'=>'10','id_status'=>'2','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'2','id_voucher'=>2001,'address'=>'Linh đông',],

                ['id_user'=>'10','id_status'=>'3','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'3','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'3','id_voucher'=>2001,'address'=>'Linh đông',],

                ['id_user'=>'10','id_status'=>'4','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'4','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'4','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'4','id_voucher'=>2001,'address'=>'Linh đông',],

                ['id_user'=>'10','id_status'=>'5','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'5','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'5','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'5','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'5','id_voucher'=>2001,'address'=>'Linh đông',],

                ['id_user'=>'10','id_status'=>'6','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'6','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'6','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'6','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'6','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'6','id_voucher'=>2001,'address'=>'Linh đông',],

                ['id_user'=>'10','id_status'=>'7','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'7','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'7','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'7','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'7','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'7','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'7','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'7','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'7','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'7','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'7','id_voucher'=>2001,'address'=>'Linh đông',],
                ['id_user'=>'10','id_status'=>'7','id_voucher'=>2001,'address'=>'Linh đông',],
            ]
        );
    }
}
