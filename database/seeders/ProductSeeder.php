<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\Product;
  
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Pizza Hai Phong',
                'description' => 'Pizza ngon tai hai phong',
                'image' => 'https://pizzalove.vn/wp-content/uploads/2020/03/pizza-ngon-tai-hai-phong.jpg',
                'price' => 100
            ],
            [
                'name' => 'Pizza hai san',
                'description' => 'Pizza hai san VIP pro',
                'image' => 'https://znews-photo.zingcdn.me/w660/Uploaded/wyhktpu/2018_04_24/image001_12.jpg',
                'price' => 500
            ]
           
            
        ];
  
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}