<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'usersname' => 'Nguyễn Tâm An',
                'email' => '21211TT3528@mail.tdc.edu.vn',
                'password' => '',
                'number_phone' => '1122334455',
                'avatar' => 'nta.jpb',
                'role' => '1',
                'gender' => '0',
            ],
            // add thêm random 
            ['usersname' => 'user1', 'email' => 'user1@example.com', 'password' => '$2b$12$lZtdie.RvHIXIy/vjFq3TO1fC3zwiUXtKi3UgpxaITFWCLpStS9ly', 'number_phone' => '9630103256', 'avatar' => 'user1.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user2', 'email' => 'user2@example.com', 'password' => '$2b$12$dapy6k5/4.fhaznAyvSKNO6rlcLn7YOz3SyiLZvjOk4H5TxkBpqUG', 'number_phone' => '7241735949', 'avatar' => 'user2.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user3', 'email' => 'user3@example.com', 'password' => '$2b$12$OJaiRyWbjObh7CjY0jiiPeidfPUwSrZ.fLeBZl9Eq11XCXcY66HcG', 'number_phone' => '9124097714', 'avatar' => 'user3.jpg', 'role' => '0', 'gender' => '0',],
            ['usersname' => 'user4', 'email' => 'user4@example.com', 'password' => '$2b$12$fIpVySrQskYTbGNU8OBaj.5bWhmtk5fWop/jVF7FkwOf/n47NtG4q', 'number_phone' => '7752017935', 'avatar' => 'user4.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user5', 'email' => 'user5@example.com', 'password' => '$2b$12$GLb.HbQyMGIHU27lpMSojehAqROx6atsUqztGIUwr9f.VUo5Fv1ue', 'number_phone' => '1585563447', 'avatar' => 'user5.jpg', 'role' => '0', 'gender' => '0',],
            ['usersname' => 'user6', 'email' => 'user6@example.com', 'password' => '$2b$12$WJ.3RokyINBCU0qIXTc9KO1hdDts2loaM3gqlX88WyGnQbVnAchRm', 'number_phone' => '2964613335', 'avatar' => 'user6.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user7', 'email' => 'user7@example.com', 'password' => '$2b$12$EZXWQvzC2vsJcpmh/fplauYjo1pwXtIqt67Sr/x5zpiEhqLNp2crS', 'number_phone' => '1934980176', 'avatar' => 'user7.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user8', 'email' => 'user8@example.com', 'password' => '$2b$12$calK/ItDfTZbdbGoPa5pLe9aXBILrp3NQh34yaX8au9sNaTiWtG02', 'number_phone' => '9512796437', 'avatar' => 'user8.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user9', 'email' => 'user9@example.com', 'password' => '$2b$12$mNn8i3hBkM6IFb1KTH4YwOVoghozOr3RcwROYcfqcwSVdul8QPI.i', 'number_phone' => '9556077033', 'avatar' => 'user9.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user10', 'email' => 'user10@example.com', 'password' => '$2b$12$Seyw.5puyWbr5Loja7pVl.Og3F.cwJPUhyV47MGUXOyLteDLSYoCm', 'number_phone' => '8292056424', 'avatar' => 'user10.jpg', 'role' => '0', 'gender' => '0',],
            ['usersname' => 'user11', 'email' => 'user11@example.com', 'password' => '$2b$12$YLeNBYjGEEXUPjxyx2GhSOudUlqI8HQJmo6jLOYM35wfTF0AMbIIa', 'number_phone' => '8069225801', 'avatar' => 'user11.jpg', 'role' => '0', 'gender' => '0',],
            ['usersname' => 'user12', 'email' => 'user12@example.com', 'password' => '$2b$12$Y2zU2wKuKTEMoF1TXJJDeeuE.ArJU1Hee/OjatqPvZboxayG.ZrTO', 'number_phone' => '1453459361', 'avatar' => 'user12.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user13', 'email' => 'user13@example.com', 'password' => '$2b$12$nk2PNFOHGBUSaiOJG0ORL.hl88wlYFiCESJzabU5gUDiqxlD38lUa', 'number_phone' => '7648863294', 'avatar' => 'user13.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user14', 'email' => 'user14@example.com', 'password' => '$2b$12$.ffHhS6ZfB6QG8LYTAHDc..ygvFs3UcehVNLF1tOu6r1qbObCmt1C', 'number_phone' => '2484872714', 'avatar' => 'user14.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user15', 'email' => 'user15@example.com', 'password' => '$2b$12$EIDzOTJsOJGiMsPH25MEJOACYpjFqjP7liUmj4qyYJbMmRDjFcPlC', 'number_phone' => '5976271778', 'avatar' => 'user15.jpg', 'role' => '0', 'gender' => '0',],
            ['usersname' => 'user16', 'email' => 'user16@example.com', 'password' => '$2b$12$/oghDvrKtS3ueCZWfWy0CedsT8.Ha3q1xq7oAqHMQ0TVwF/L66m5W', 'number_phone' => '7787820295', 'avatar' => 'user16.jpg', 'role' => '0', 'gender' => '0',],
            ['usersname' => 'user17', 'email' => 'user17@example.com', 'password' => '$2b$12$jC/id0/RoErXwg0yuwOrGOhKh3tzfUGthAgIWBIl8bd4hOPxqjcSe', 'number_phone' => '4234059958', 'avatar' => 'user17.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user18', 'email' => 'user18@example.com', 'password' => '$2b$12$6WugA4jhwLWpdQEnkRxMOOFNWfiPTM/Y/XO3ssgW/jRmHz0U/khbq', 'number_phone' => '7808788479', 'avatar' => 'user18.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user19', 'email' => 'user19@example.com', 'password' => '$2b$12$zPVqJTlue9cVQ97uJF8DluBVvBofipItVO04T1cjt63G8s..ZxdMG', 'number_phone' => '2729681246', 'avatar' => 'user19.jpg', 'role' => '0', 'gender' => '0',],
            ['usersname' => 'user20', 'email' => 'user20@example.com', 'password' => '$2b$12$TR0/gymbmAHy1O9jBmREAOJnNkmAHoiplqoR4bh3Qj1iJ1kBwPI3.', 'number_phone' => '3018975218', 'avatar' => 'user20.jpg', 'role' => '0', 'gender' => '0',],
            ['usersname' => 'user21', 'email' => 'user21@example.com', 'password' => '$2b$12$NRESFlNOM9NIbi4Xx7QxWeGwLkXJYoIN0459PPjIwvm74RwC.jjEC', 'number_phone' => '6717107450', 'avatar' => 'user21.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user22', 'email' => 'user22@example.com', 'password' => '$2b$12$RvMlT/REu5nnlHlF2HN10OXWCufghkeqyZ.AUksuzbG0Nu82gJZby', 'number_phone' => '4381425710', 'avatar' => 'user22.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user23', 'email' => 'user23@example.com', 'password' => '$2b$12$vigoR./DmQtmBcJIJk6dYeZ2QWOxq8P0thhMnsdukPuwSg0v/SNrG', 'number_phone' => '3323493094', 'avatar' => 'user23.jpg', 'role' => '0', 'gender' => '0',],
            ['usersname' => 'user24', 'email' => 'user24@example.com', 'password' => '$2b$12$30b8sJEhYlSfojcnYG0BhegzeKOcODIik/V6G/gVyzcvTU3GrcBYi', 'number_phone' => '8976079531', 'avatar' => 'user24.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user25', 'email' => 'user25@example.com', 'password' => '$2b$12$e8ctz/Q7AllQS7HD555uBOVv8RQt0FYJpZZttv9fdlDAuXF1UCRvK', 'number_phone' => '2396220733', 'avatar' => 'user25.jpg', 'role' => '0', 'gender' => '0',],
            ['usersname' => 'user26', 'email' => 'user26@example.com', 'password' => '$2b$12$BLRu0AbOhcftgIzmz5KgduusvTOVNBEGkGFjGjJybSF5Ba6ewOdJu', 'number_phone' => '9526447701', 'avatar' => 'user26.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user27', 'email' => 'user27@example.com', 'password' => '$2b$12$tjOQReBYZMYtT7AnYixybe4TOSovk6AmvVxavSQD7QBirRD8VZC9K', 'number_phone' => '1963818644', 'avatar' => 'user27.jpg', 'role' => '0', 'gender' => '0',],
            ['usersname' => 'user28', 'email' => 'user28@example.com', 'password' => '$2b$12$0iTqXgUEEDdPF3mUqDA7MueiW6E.uWFs1uWKh.7k1Fgz9uRB9ubRO', 'number_phone' => '4567437861', 'avatar' => 'user28.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user29', 'email' => 'user29@example.com', 'password' => '$2b$12$GmRRmWiKWWhlTxncZNbLVOTM30F7NWqbAynEmB9yVVpptEZj00OSi', 'number_phone' => '2395895250', 'avatar' => 'user29.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user30', 'email' => 'user30@example.com', 'password' => '$2b$12$z8y/UJ20OeIHY9RaYRUunO2wiukYlyTU0r3jyol5sE6iBApMIEOfW', 'number_phone' => '1699171542', 'avatar' => 'user30.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user31', 'email' => 'user31@example.com', 'password' => '$2b$12$wx6UY4YfoZOp0F07/Jr65O8bYKBDbryQm5aPJaTHwgIQJPGO9TDg.', 'number_phone' => '8426983497', 'avatar' => 'user31.jpg', 'role' => '0', 'gender' => '0',],
            ['usersname' => 'user32', 'email' => 'user32@example.com', 'password' => '$2b$12$uYbhdE2n708jkWsk.RhLCO88GRuNK.UQOrBl1OiKe2WMmWTcWmqP6', 'number_phone' => '7008996411', 'avatar' => 'user32.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user33', 'email' => 'user33@example.com', 'password' => '$2b$12$fkNjw1dmnSoiW3a8V5QBNO1Oem1QiZP84.O.pJ8Sdm1vgX9R1wGhK', 'number_phone' => '8157057726', 'avatar' => 'user33.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user34', 'email' => 'user34@example.com', 'password' => '$2b$12$FzvMTP649wPfpb.YfsXtmOnSuco6AOehUPWqYam1P0BLFigM1BEJO', 'number_phone' => '6522554633', 'avatar' => 'user34.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user35', 'email' => 'user35@example.com', 'password' => '$2b$12$w03Xmy5hK51qlbAD9YwEf.NGt4SnTZpaMiPJSHyZNLxN4dG2JkKV2', 'number_phone' => '4856288856', 'avatar' => 'user35.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user36', 'email' => 'user36@example.com', 'password' => '$2b$12$cZg/Blo5FMiFERoFIMwUPOQTUfZZeV.OVTKt7rkVDmVRRRxAHBIgK', 'number_phone' => '6079727891', 'avatar' => 'user36.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user37', 'email' => 'user37@example.com', 'password' => '$2b$12$2dWjyspsii57MQ9YA/QuOumPM0K1kHGt6GNgynAmDhj2rcaEq/oJW', 'number_phone' => '6261462811', 'avatar' => 'user37.jpg', 'role' => '0', 'gender' => '0',],
            ['usersname' => 'user38', 'email' => 'user38@example.com', 'password' => '$2b$12$U4rHP42m4Z2k84L/JYGeWOsK290euISKItI0Xp8fXsOd1kX5x23YG', 'number_phone' => '2622668045', 'avatar' => 'user38.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user39', 'email' => 'user39@example.com', 'password' => '$2b$12$v16LrD36keu3ISuCR7BX1u251uuvj4ZkRU9oyivG5FWiV.9XteWw2', 'number_phone' => '4019101128', 'avatar' => 'user39.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user40', 'email' => 'user40@example.com', 'password' => '$2b$12$V.2PyBI00D9FFZOdvOKx..aUoRdYP7RmLM4tnL0sm2KQ2jbOPMDJa', 'number_phone' => '6352409461', 'avatar' => 'user40.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user41', 'email' => 'user41@example.com', 'password' => '$2b$12$7N6PYgDtQwverF6CQ7owUeuJeOMzjIbbxDx1ikXz/q68dT49l8Zo6', 'number_phone' => '5796678019', 'avatar' => 'user41.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user42', 'email' => 'user42@example.com', 'password' => '$2b$12$JYF8vtCpY5R2B6BU4kMx2eQfsTcYTQ3ZTtegCb9SYrFYlkFW4KjKu', 'number_phone' => '5032149617', 'avatar' => 'user42.jpg', 'role' => '0', 'gender' => '0',],
            ['usersname' => 'user43', 'email' => 'user43@example.com', 'password' => '$2b$12$.K5ZtcA6Gf35jC534gzyOusXwdpUtf2cSHnnSK1MHyBjg8msnEdHy', 'number_phone' => '6851455725', 'avatar' => 'user43.jpg', 'role' => '0', 'gender' => '0',],
            ['usersname' => 'user44', 'email' => 'user44@example.com', 'password' => '$2b$12$e59tl0kSrDTqxDdC/.eO8eBbdz/Tca/7POyChhWacdYwddRYudm5i', 'number_phone' => '4576089932', 'avatar' => 'user44.jpg', 'role' => '0', 'gender' => '0',],
            ['usersname' => 'user45', 'email' => 'user45@example.com', 'password' => '$2b$12$/yfmgxyfRB7G/GpnNgO9du4NP9N8O65Nx/9fHLcuF/W7.KgZwoBtq', 'number_phone' => '7996933476', 'avatar' => 'user45.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user46', 'email' => 'user46@example.com', 'password' => '$2b$12$x6bY6iuFc5hfKtQbpEs4u.cpj91qFCq.6Auo8mi9dTTe4MR21Jyc6', 'number_phone' => '3191165999', 'avatar' => 'user46.jpg', 'role' => '0', 'gender' => '1',],
            ['usersname' => 'user47', 'email' => 'user47@example.com', 'password' => '$2b$12$KaLNVJi0OcepPNQL/N8Bz.WzmJwO6Dy7RET0MEyG8WA9GpiHaYzLO', 'number_phone' => '9076003810', 'avatar' => 'user47.jpg', 'role' => '0', 'gender' => '0',],
            ['usersname' => 'user48', 'email' => 'user48@example.com', 'password' => '$2b$12$biSTlEwDmhYXFVWUu7QeSucH7lA4ug/R/oBwfmKVsxMQAddLr1vx6', 'number_phone' => '3773126291', 'avatar' => 'user48.jpg', 'role' => '0', 'gender' => '0',],
            ['usersname' => 'user49', 'email' => 'user49@example.com', 'password' => '$2b$12$aMJaErQxRnfKrUtoBpdQWOr3UpXfcTbZJJeYhT7/xHLAYTJloVo9.', 'number_phone' => '1694327581', 'avatar' => 'user49.jpg', 'role' => '0', 'gender' => '0',],




        ]);
    }
}
