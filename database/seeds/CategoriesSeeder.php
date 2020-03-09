<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::create([
            'name'      =>      'Điện thoại & phụ kiện',
            'img_url'   =>      'https://cf.shopee.vn/file/31234a27876fb89cd522d7e3db1ba5ca_tn&quot',
        ]);
        \App\Models\Category::create([
            'name'      =>      'Máy tính & laptop',
            'img_url'   =>      'https://cf.shopee.vn/file/c3f3edfaa9f6dafc4825b77d8449999d_tn&quot',
        ]);
        \App\Models\Category::create([
            'name'      =>      'Máy ảnh & máy quay phim',
            'img_url'   =>      'https://cf.shopee.vn/file/ec14dd4fc238e676e43be2a911414d4d_tn&quot',
        ]);
    }
}
