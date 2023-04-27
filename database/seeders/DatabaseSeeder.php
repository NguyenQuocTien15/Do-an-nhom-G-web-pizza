<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call([BillDetailTableSeeder::class,BillsTableSeeder::class,CartsTableSeeder::class,CategoriesTableSeeder::class,Detail_CartTableSeeder::class,OptionsTableSeeder::class,ProductOptionSeeder::class,ProductsTableSeeder::class,StatusTableSeeder::class,UsersTableSeeder::class,VouchersTableSeeder::class,]);



        $this->call(BillDetailTableSeeder::class);
        $this->call(BillsTableSeeder::class);
        $this->call(CartsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(Detail_CartTableSeeder::class);
        $this->call(OptionsTableSeeder::class);
        $this->call(ProductOptionSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VouchersTableSeeder::class);

    }
}
