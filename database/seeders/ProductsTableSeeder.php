<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('products')->insert([
            // pizza
            ['name' => 'Pizza Lạp Xưởng Xốt Trứng Muối Mayonnaise - Saigon Mania
', 'image' => 'Pizza-lap-xuong-1.jpg',  'quantity' => '100', 'description' => 'Lạp xưởng tươi, xốt trứng muối, xốt Mayonnaise dịu ngọt, ruốc khô (tép khô), bắp ngọt, hành lá, phô mai Mozzarella, xốt cà chua.
', 'price' => '209000
', 'count_buy' => '36', 'category_id' => 2,], ['name' => 'Pizza Thập Cẩm Thượng Hạng - Extravaganza
', 'image' => 'Extravaganza-thong-tin.jpg',  'quantity' => '100', 'description' => 'Xốt Cà Chua, Phô Mai Mozzarella, Xúc Xích Pepperoni, Thịt Dăm Bông, Xúc Xich Ý, Thịt Bò Viên, Ớt Chuông Xanh, Nấm Mỡ, Hành Tây, Ô-liu
', 'price' => '209000
', 'count_buy' => '11', 'category_id' => 5,], ['name' => 'Pizza Bò &amp; Tôm Nướng Kiểu Mỹ - Surf &amp; Turf
', 'image' => 'Surf-turf-thong-tin.jpg',  'quantity' => '100', 'description' => 'Xốt Cà Chua, Xốt Phô Mai, Phô Mai Mozzarella, Tôm, Thịt Bò Mexico, Cà Chua, Hành Tây
', 'price' => '209000
', 'count_buy' => '68', 'category_id' => 3,], ['name' => 'Pizza Bò Mê-Hi-Cô Thượng Hạng - Prime Beef
', 'image' => 'Prime-beef-thong-tin.jpg',  'quantity' => '100', 'description' => 'Xốt phô mai, Xốt cà chua, bò viên kiểu Ý, thịt bò Mexico, hành tây, cà chua, phô mai Mozzarella
', 'price' => '209000
', 'count_buy' => '53', 'category_id' => 3,], ['name' => 'Pizza Rau Củ Thập Cẩm - Veggie Mania
', 'image' => 'Veggie-mania-thong-tin.jpg',  'quantity' => '100', 'description' => 'Xốt Cà Chua, Phô Mai Mozzarella, Hành Tây, Ớt Chuông Xanh, Ô-liu, Nấm Mỡ, Cà Chua, Thơm (dứa)
', 'price' => '159000
', 'count_buy' => '48', 'category_id' => 6,], ['name' => 'Pizza Xúc Xích Xốt Phô Mai - Sausage Kid Mania
', 'image' => 'Sausage-Kid-Maniat.jpg',  'quantity' => '100', 'description' => 'Xốt phô mai, Phô mai Mozzarella, Xúc Xích, Thịt Heo Muối, Bắp (Ngô), Thơm (Dứa)
', 'price' => '179000
', 'count_buy' => '39', 'category_id' => 5,], ['name' => 'Pizza Gà Phô Mai Thịt Heo Xông Khói - Cheesy Chicken Bacon
', 'image' => 'Cheesy-chicken-bacon-thong-tin+(2).jpg',  'quantity' => '100', 'description' => 'Xốt Phô Mai, Thịt Gà, Thịt Heo Muối, Phô Mai Mozzarella, Cà Chua
', 'price' => '179000
', 'count_buy' => '25', 'category_id' => 4,], ['name' => 'Pizza Thập Cẩm Thượng Hạng - Extravaganza
', 'image' => 'Extravaganza-thong-tin.jpg',  'quantity' => '100', 'description' => 'Xốt Cà Chua, Phô Mai Mozzarella, Xúc Xích Pepperoni, Thịt Dăm Bông, Xúc Xich Ý, Thịt Bò Viên, Ớt Chuông Xanh, Nấm Mỡ, Hành Tây, Ô-liu
', 'price' => '209000
', 'count_buy' => '48', 'category_id' => 3,], ['name' => 'Pizza 5 Loại Thịt Thượng Hạng - Meat Lovers
', 'image' => 'meat-lover-detail.jpg',  'quantity' => '100', 'description' => 'Xốt Cà Chua, Phô Mai Mozzarella, Xúc Xích Pepperoni, Thịt Dăm Bông, Xúc Xich Ý, Thịt Bò Viên, Thịt Heo Muối
', 'price' => '209000
', 'count_buy' => '5', 'category_id' => 5,], ['name' => 'Pizza Hải Sản Xốt Cà Chua - Seafood Delight
', 'image' => 'Seafood-delight-detail+(1)-compressed.jpg',  'quantity' => '100', 'description' => 'Xốt Cà Chua, Phô Mai Mozzarella, Tôm, Mực, Thanh Cua, Hành Tây
', 'price' => '209000
', 'count_buy' => '19', 'category_id' => 2,], ['name' => 'Pizza Dăm Bông Dứa Kiểu Hawaii - Hawaiian
', 'image' => 'Hawaiian-detail.jpg',  'quantity' => '100', 'description' => 'Xốt Cà Chua, Phô Mai Mozzarella, Thịt Dăm Bông, Thơm
', 'price' => '179000
', 'count_buy' => '57', 'category_id' => 5,], ['name' => 'Pizza Lạp Xưởng Xốt Trứng Muối Mayonnaise - Saigon Mania
', 'image' => 'Pizza-lap-xuong-1.jpg',  'quantity' => '100', 'description' => 'Lạp xưởng tươi, xốt trứng muối, xốt Mayonnaise dịu ngọt, ruốc khô (tép khô), bắp ngọt, hành lá, phô mai Mozzarella, xốt cà chua.
', 'price' => '209000
', 'count_buy' => '0', 'category_id' => 5,], ['name' => 'Pizza Hải Sản Nhiệt Đới
', 'image' => 'Pizzaminsea-thong-tin-1.jpg',  'quantity' => '100', 'description' => 'Xốt Tiêu - Pizzamin Sea
', 'price' => '209000
', 'count_buy' => '44', 'category_id' => 2,], ['name' => 'Pizza Gà Xốt Tương Kiểu Nhật - Teriyaki Chicken
', 'image' => 'Teriyaki-chicken-detail.jpg',  'quantity' => '100', 'description' => 'Xốt Teriyaki, Phô Mai Mozzarella, Mayonnaise, Gà, Nấm Mỡ, Hành Tây
', 'price' => '179000
', 'count_buy' => '12', 'category_id' => 4,], ['name' => 'Pizza Bò &amp; Tôm Nướng Kiểu Mỹ - Surf &amp; Turf
', 'image' => 'Surf-turf-thong-tin.jpg',  'quantity' => '100', 'description' => 'Xốt Cà Chua, Xốt Phô Mai, Phô Mai Mozzarella, Tôm, Thịt Bò Mexico, Cà Chua, Hành Tây
', 'price' => '209000
', 'count_buy' => '60', 'category_id' => 2,], ['name' => 'Pizza Phô Mai Hảo Hạng - Cheese Mania
', 'image' => 'Cheese-mania-detail.jpg',  'quantity' => '100', 'description' => 'Xốt Cà Chua, phô Mai Mozzarella
', 'price' => '159000
', 'count_buy' => '69', 'category_id' => 6,], ['name' => 'Pizza Xúc Xích Ý Truyền Thống - Pepperoni Feast
', 'image' => 'Pepperoni-feast-thong-tin.jpg',  'quantity' => '100', 'description' => 'Xốt Cà Chua, Phô Mai Mozzarella, Xúc Xích Pepperoni
', 'price' => '209000
', 'count_buy' => '54', 'category_id' => 5,], ['name' => 'Pizza Gà Phô Mai Thịt Heo Xông Khói - Cheesy Chicken Bacon
', 'image' => 'Cheesy-chicken-bacon-thong-tin+(2).jpg',  'quantity' => '100', 'description' => 'Xốt Phô Mai, Thịt Gà, Thịt Heo Muối, Phô Mai Mozzarella, Cà Chua
', 'price' => '179000
', 'count_buy' => '18', 'category_id' => 5,], ['name' => 'Pizza Bò Beefsteak Phô Mai Kiểu New York - New York CheeseSteak
', 'image' => 'menu-chi-tie%CC%82%CC%81t-PC_LTO-NewYork.jpg',  'quantity' => '100', 'description' => 'Bò Beefsteak, Xốt Demi-Glace (Xốt Bít Tết), Xốt Kem Chua, Phô Mai Mozzarella, Nấm, Cà Chua, Hành Tây, Bột Rong Biển.
', 'price' => '219000
', 'count_buy' => '26', 'category_id' => 3,], ['name' => 'Pizza 5 Loại Thịt Thượng Hạng - Meat Lovers
', 'image' => 'meat-lover-detail.jpg',  'quantity' => '100', 'description' => 'Xốt Cà Chua, Phô Mai Mozzarella, Xúc Xích Pepperoni, Thịt Dăm Bông, Xúc Xich Ý, Thịt Bò Viên, Thịt Heo Muối
', 'price' => '209000
', 'count_buy' => '57', 'category_id' => 3,], ['name' => 'Pizza Hải Sản Xốt Mayonnaise - Ocean Mania
', 'image' => 'Ocean-mania-thong-tin.jpg',  'quantity' => '100', 'description' => 'Xốt Mayonnaise , Phô Mai Mozzarella, Tôm, Mực, Thanh Cua, Hành Tây
', 'price' => '209000
', 'count_buy' => '39', 'category_id' => 2,],


            // mon phu


            ['name' => 'Khai Vị Tổng Hợp
', 'image' => 'Khai-vi.jpg',  'quantity' => '100', 'description' => '2 miếng Cánh gà nướng BBQ, 3 miếng Xúc Xích Xông Khói Đút Lò và Khoai tây phô mai đút lò
', 'price' => '99000
', 'count_buy' => '4', 'category_id' => 10,], ['name' => 'Gà Viên Phô Mai Đút Lò
', 'image' => 'MENU-PC-G%C3%A0-Vi%C3%AAn-Ph%C3%B4-Mai-%C4%90%C3%BAt-L%C3%B2.jpg',  'quantity' => '100', 'description' => 'Gà Viên Popcorn, Thịt Heo Xông Khói, Phô Mai Mozarella, Xốt Pizza
', 'price' => '69000
', 'count_buy' => '5', 'category_id' => 10,], ['name' => 'Bánh Mì Nướng Phô Mai
', 'image' => 'banh-mi-pho-mai.jpg',  'quantity' => '100', 'description' => 'Bánh Mì, Bơ, Phô Mai, Bột Tỏi, Xốt Pizza
', 'price' => '59000
', 'count_buy' => '0', 'category_id' => 12,], ['name' => 'Bánh Mì Nướng Bơ Tỏi
', 'image' => 'banh-mi-bo-toi.jpg',  'quantity' => '100', 'description' => 'Bánh Mì, Bơ, Bột Tỏi, Xốt Pizza
', 'price' => '39000
', 'count_buy' => '34', 'category_id' => 12,], ['name' => 'Cánh Gà BBQ Kiểu Mỹ (4 miếng)
', 'image' => 'MENU-PC_Ca%CC%81nh-Ga%CC%80-BBQ-Kie%CC%82%CC%89u-My%CC%83-.jpg',  'quantity' => '100', 'description' => 'Cánh Gà, Xốt BBQ
', 'price' => '99000
', 'count_buy' => '64', 'category_id' => 10,], ['name' => 'Gà Không Xương BBQ
', 'image' => 'MENU-MB_GA%CC%80-KHO%CC%82NG-XU%CC%9BO%CC%9BNG-BBQ.jpg',  'quantity' => '100', 'description' => 'Gà Không Xương, Xốt BBQ
', 'price' => '89000
', 'count_buy' => '18', 'category_id' => 10,], ['name' => 'Xúc Xích Xông Khói Đút Lò (8 miếng)
', 'image' => 'MENU-MB_Xu%CC%81c-Xi%CC%81ch-Xo%CC%82ng-Kho%CC%81i-%C4%90u%CC%81t-Lo%CC%80.jpg',  'quantity' => '100', 'description' => 'Xúc Xích Xông Khói, Xốt BBQ
', 'price' => '89000
', 'count_buy' => '4', 'category_id' => 11,], ['name' => 'Xúc Xích Xông Khói Đút Lò (4 miếng)
', 'image' => 'MENU-MB_Xu%CC%81c-Xi%CC%81ch-Xo%CC%82ng-Kho%CC%81i-%C4%90u%CC%81t-Lo%CC%80+-+4.jpg',  'quantity' => '100', 'description' => 'Xúc Xích Xông Khói, Xốt BBQ
', 'price' => '49000
', 'count_buy' => '62', 'category_id' => 11,], ['name' => 'Cánh Gà BBQ Kiểu Mỹ (6 miếng)
', 'image' => 'MENU-PC_Ca%CC%81nh-Ga%CC%80-BBQ-Kie%CC%82%CC%89u-My%CC%83-.jpg',  'quantity' => '100', 'description' => 'Cánh Gà, Xốt BBQ
', 'price' => '129000
', 'count_buy' => '53', 'category_id' => 10,], ['name' => 'Khoai Tây Phô Mai Đút Lò
', 'image' => 'MENU-PC_Khoai-Ta%CC%82y-Pho%CC%82-Mai-%C4%90u%CC%81t-Lo%CC%80.jpg',  'quantity' => '100', 'description' => 'Khoai Tây, Thịt Heo Xông Khói, Phô Mai
', 'price' => '49000
', 'count_buy' => '23', 'category_id' => 11,],




// tráng miệng


['name' => 'Chocochips (Đế mỏng giòn)
', 'image' => 'MENU-PC_choco-pizza-1.jpg',  'quantity' => '100','description' => 'Sô-cô-la chip Đen Và Trắng, Xốt Sô-cô-la Đen, Phô Mai Mozarella, Xốt Kem Chua, Đế Mỏng Giòn
','price' => '39000
','count_buy' => '35','category_id' => 8,],['name' => 'Bánh Cuộn Quế Xốt Sữa Đặc
', 'image' => 'PC-Cinnamon-Roll-1.jpg',  'quantity' => '100','description' => 'Bánh Cuộn Mềm Xốp, Bột Đường Quế, Bơ, Sữa Đặc
','price' => '49000
','count_buy' => '67','category_id' => 8,],['name' => 'Bánh Sô-Cô-La Đút Lò
', 'image' => 'choco.jpg',  'quantity' => '100','description' => 'Bánh Sô-Cô-La Nguyên Chất
','price' => '49000
','count_buy' => '40','category_id' => 8,],['name' => 'Bánh Cuộn Quế Xốt Sô-Cô-La
', 'image' => 'PC-Chocolate-Roll-1.jpg',  'quantity' => '100','description' => 'Bánh Cuộn Mềm Xốp, Sô-cô-la chip Đen Và Trắng, Xốt Sô-cô-la Đen
','price' => '49000
','count_buy' => '9','category_id' => 8,],['name' => 'Chocochips (Đế dày xốp)
', 'image' => 'MENU-PC_choco-pizza-1.jpg',  'quantity' => '100','description' => 'Sô-cô-la chip Đen Và Trắng, Xốt Sô-cô-la Đen, Phô Mai Mozarella, Xốt Kem Chua, Đế Dày Xốp
','price' => '39000
','count_buy' => '7','category_id' => 8,],['name' => 'Bánh Cuộn Quế Xốt Kem Sữa
', 'image' => 'MENU-PC-Cinnamon-Roll-1-nen-xam_360X240px.jpg',  'quantity' => '100','description' => 'Bánh Cuộn Mềm Xốp, Bột Đường Quế, Bơ, Xốt Kem Sữa
','price' => '49000
','count_buy' => '5','category_id' => 8,],


// thức uống

['name' => 'Chai Coca-Cola 1.5L
', 'image' => 'coke-1.5.jpg',  'quantity' => '100','description' => '39,000₫
','price' => '39000
','count_buy' => '21','category_id' => 9,],['name' => 'Lon Coca-Cola zero 320ml
', 'image' => 'coke-zero.jpg',  'quantity' => '100','description' => '25,000₫
','price' => '25000
','count_buy' => '53','category_id' => 9,],['name' => 'Chai Sprite 390ml
', 'image' => 'Sprite-390.jpg',  'quantity' => '100','description' => '25,000₫
','price' => '25000
','count_buy' => '8','category_id' => 9,],['name' => 'Chai Coca-Cola Zero Sugar 1.5L
', 'image' => 'MENU-MB_Coca-Zero-1L5_trang.png',  'quantity' => '100','description' => '39,000₫
','price' => '39000
','count_buy' => '66','category_id' => 9,],['name' => 'Chai Fanta 390ml
', 'image' => 'fanta-390.jpg',  'quantity' => '100','description' => '25,000₫
','price' => '25000
','count_buy' => '35','category_id' => 9,],['name' => 'Nước suối Dasani 510ml
', 'image' => 'daisani.jpg',  'quantity' => '100','description' => '25,000₫
','price' => '25000
','count_buy' => '52','category_id' => 9,],['name' => 'Chai Coca-Cola 390ml
', 'image' => 'coke-390.jpg',  'quantity' => '100','description' => '25,000₫
','price' => '25000
','count_buy' => '63','category_id' => 9,],['name' => 'CHAI SPRITE 1.85L
', 'image' => 'Sprite-1.5L.jpg',  'quantity' => '100','description' => '39,000₫
','price' => '39000
','count_buy' => '49','category_id' => 9,],['name' => 'Nước Suối Dasani 1.5L
', 'image' => 'Dasani15L.jpg',  'quantity' => '100','description' => '39,000₫
','price' => '39000
','count_buy' => '53','category_id' => 9,],['name' => 'Chai Fanta 1.5L
', 'image' => 'fanta-1.5.jpg',  'quantity' => '100','description' => '39,000₫
','price' => '39000
','count_buy' => '30','category_id' => 9,],['name' => 'Lon Coca-Cola plus 320ml
', 'image' => 'coke-light.jpg',  'quantity' => '100','description' => '25,000₫
','price' => '25000
','count_buy' => '65','category_id' => 9,],['name' => 'CHANH DÂY HẠT CHIA 350ML
', 'image' => 'FUZETEA-CHANH-D%C3%82Y-H%E1%BA%A0T-CHIA-PC-nen-trang_360X240px.png',  'quantity' => '100','description' => '25,000₫
','price' => '25000
','count_buy' => '4','category_id' => 9,],['name' => 'Trà đào hạt chia 350ml
', 'image' => 'dao-hat-chia.jpg',  'quantity' => '100','description' => '25,000₫
','price' => '25000
','count_buy' => '24','category_id' => 9,],
        ]);


    }
}
