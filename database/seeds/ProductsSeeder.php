<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \App\Models\Product::create(
//            [
//               'name'               =>      'Iphone X 64GB',
//                'img_url'           =>      'https://cf.shopee.vn/file/907be96038cb2af06c980899e4206359_tn',
//                'price'             =>      15900000,
//                'description'       =>      'fullbox likenew',
//                'color'             =>      'white',
//                'guarantee_duration'=>      '',
//            ],
//            [
//                'name'               =>     'Iphone X 64GB',
//                'img_url'           =>      'https://cf.shopee.vn/file/03fae647a3e7eb36bc0778aab58830d8_tn',
//                'price'             =>      2500000,
//                'description'       =>      'Điện thoại Vsmart nguyên hộp
//                                            Mới 100%
//                                            Đảm bảo dùng bền, lướt êm
//                                            Hàng Vin thì quá yên tâm rồi ạ
//                                            Vì hàng chuẩn nên giá không thể so với các shop khác ạ',
//                'color'             =>      'Đen',
//                'guarantee_duration'=>      '2 Tháng',
//            ],
//            [
//                'name'               =>     'Iphone X 64GB',
//                'img_url'           =>      'https://cf.shopee.vn/file/a04516cdb691bd26c9308762088e0ef8_tn',
//                'price'             =>      9900000,
//                'description'       =>      'cty cổ phần đây tư quốc tế và tập đoàn BKav ra mắt 2 dòng sp : Bphone 3 và Bphone 3 pro \n
//                                            Kể từ khi ra mắt tại CES 2015, smartphone của Bkav luôn thu hút sự chú ý của người dùng và tín đồ công nghệ.
//                                            Đã có rất nhiều bài viết luận bàn về chiếc điện thoại "Designed by Bkav - Made in Vietnam".
//                                            Bkav.com.vn xin chia sẻ một số bình luận bằng thơ, là những cảm xúc của độc giả VnExpress.net đối với chiếc điện thoại này',
//                'color'             =>      'đen',
//                'guarantee_duration'=>      '3 tháng',
//            ]
//        );
        \App\Models\Product::create([
            'name'               =>     'Iphone X 64GB',
            'img_url'           =>      'https://cf.shopee.vn/file/c56a71e2d9e3ac5fff75b8abd8510075_tn',
            'price'             =>      18450000,
            'description'       =>      'Hàng chính hãng Samsung Việt Nam',
            'color'             =>      'xanh ngọc',
            'guarantee_duration'=>      '',
        ]);

//        factory(\App\Models\Category::class, 50)->create()->each(function ($category) {
//            $category->products()->save(factory(\App\Models\Product::class)->make());
//        });
    }
}
