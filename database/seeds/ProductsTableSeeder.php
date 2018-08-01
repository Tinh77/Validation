<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->delete();
        DB::table('products')->insert([
            [
                'id'=>1,
                'name'=>'Tùng lợn',
                'description'=>'Tùng lợn nhưng tùng không lợn mà là lợn',
                'categoryId'=>1,
                'price'=>2000,
                'image'=>'https://anh.24h.com.vn//upload/4-2017/images/2017-12-05/1512442534-431-151243815768758-thumbnail.jpg'
            ],
            [
                'id'=>2,
                'name'=>'Hạnh lợn',
                'description'=>'Hạnh lợn nhưng tùng không lợn mà là lợn',
                'categoryId'=>2,
                'price'=>2000,
                'image'=>'https://images.kienthuc.net.vn/zoomh/500/uploaded/hongngan/2017_01_09/F/vua-lon-khong-lo-hien-lanh-de-im-cho-gai-tre-cuoi.jpg'
            ],
            [
                'id'=>3,
                'name'=>'Nam lợn',
                'description'=>'Nam lợn nhưng tùng không lợn mà là lợn',
                'categoryId'=>3,
                'price'=>2500,
                'image'=>'https://baomoi-photo-1-td.zadn.vn/w1000_r1/17/10/03/105/23441004/1_100183.jpg'
            ],
            [
                'id'=>4,
                'name'=>'Lơn Lỵ',
                'description'=>'Ly lợn nhưng tùng không lợn mà là lợn',
                'categoryId'=>2,
                'price'=>2700,
                'image'=>'http://img.khoahoc.tv/photos/image/2016/04/08/lon-rung-dot-bien.jpg'
            ],
            [
                'id'=>5,
                'name'=>'Lòng lợn',
                'description'=>'Lợn Long nhưng tùng không lợn mà là lợn',
                'categoryId'=>3,
                'price'=>2000,
                'image'=>'http://khoahoc.tv/photos/image/112011/21/lonrung.jpg'
            ],
            [
                'id'=>6,
                'name'=>'Tình lợn',
                'description'=>'Tình lợn nhưng tùng không lợn mà là lợn',
                'categoryId'=>1,
                'price'=>2000,
                'image'=>'http://news.tongplus.com/site/data/img_dir/2016/05/30/2016053001434_0.jpg'
            ],
            [
                'id'=>7,
                'name'=>'Lơn Duỵ',
                'description'=>'Lơn Duỵ nhưng tùng không lợn mà là lợn',
                'categoryId'=>3,
                'price'=>2000,
                'image'=>'http://a9.vietbao.vn/images/vn999/55/2014/08/20140823-what-the-hoi-7.jpg'
            ],
            [
                'id'=>8,
                'name'=>'Lơn Hạnh',
                'description'=>'Lơn Duỵ nhưng tùng không lợn mà là lợn',
                'categoryId'=>1,
                'price'=>2000,
                'image'=>'http://news.tongplus.com/site/data/img_dir/2016/05/30/2016053001434_0.jpg'
            ],
            [
                'id'=>9,
                'name'=>'Lơn Tình',
                'description'=>'Lơn Duỵ nhưng tùng không lợn mà là lợn',
                'categoryId'=>3,
                'price'=>2000,
                'image'=>'http://a9.vietbao.vn/images/vn999/55/2014/08/20140823-what-the-hoi-7.jpg'
            ],
            [
                'id'=>10,
                'name'=>'Lơn Nội',
                'description'=>'Lơn Duỵ nhưng tùng không lợn mà là lợn',
                'categoryId'=>3,
                'price'=>2000,
                'image'=>'https://baomoi-photo-1-td.zadn.vn/w1000_r1/17/10/03/105/23441004/1_100183.jpg'
            ],
            [
                'id'=>11,
                'name'=>'Lơn Ngoại',
                'description'=>'Lơn Duỵ nhưng tùng không lợn mà là lợn',
                'categoryId'=>5,
                'price'=>2000,
                'image'=>'http://a9.vietbao.vn/images/vn999/55/2014/08/20140823-what-the-hoi-7.jpg'
            ],
            [
                'id'=>12,
                'name'=>'Lơn Toán',
                'description'=>'Lơn Duỵ nhưng tùng không lợn mà là lợn',
                'categoryId'=>3,
                'price'=>2000,
                'image'=>'https://baomoi-photo-1-td.zadn.vn/w1000_r1/17/10/03/105/23441004/1_100183.jpg'
            ],
            [
                'id'=>13,
                'name'=>'Lơn Ly',
                'description'=>'Lơn Duỵ nhưng tùng không lợn mà là lợn',
                'categoryId'=>3,
                'price'=>2000,
                'image'=>'http://a9.vietbao.vn/images/vn999/55/2014/08/20140823-what-the-hoi-7.jpg'
            ],
            [
                'id'=>14,
                'name'=>'Lơn Long',
                'description'=>'Lơn Duỵ nhưng tùng không lợn mà là lợn',
                'categoryId'=>5,
                'price'=>2000,
                'image'=>'http://a9.vietbao.vn/images/vn999/55/2014/08/20140823-what-the-hoi-7.jpg'
            ],
            [
                'id'=>15,
                'name'=>'Lơn Yang',
                'description'=>'Lơn Duỵ nhưng tùng không lợn mà là lợn',
                'categoryId'=>3,
                'price'=>2000,
                'image'=>'https://baomoi-photo-1-td.zadn.vn/w1000_r1/17/10/03/105/23441004/1_100183.jpg'
            ],
            [
                'id'=>16,
                'name'=>'Lơn Minh',
                'description'=>'Lơn Duỵ nhưng tùng không lợn mà là lợn',
                'categoryId'=>5,
                'price'=>2000,
                'image'=>'http://a9.vietbao.vn/images/vn999/55/2014/08/20140823-what-the-hoi-7.jpg'
            ],
            [
                'id'=>17,
                'name'=>'Lơn Mình',
                'description'=>'Lơn Duỵ nhưng tùng không lợn mà là lợn',
                'categoryId'=>3,
                'price'=>2000,
                'image'=>'https://baomoi-photo-1-td.zadn.vn/w1000_r1/17/10/03/105/23441004/1_100183.jpg'
            ],
            [
                'id'=>18,
                'name'=>'Lơn Mính',
                'description'=>'Lơn Duỵ nhưng tùng không lợn mà là lợn',
                'categoryId'=>3,
                'price'=>2000,
                'image'=>'http://a9.vietbao.vn/images/vn999/55/2014/08/20140823-what-the-hoi-7.jpg'
            ],
            [
                'id'=>19,
                'name'=>'Lơn Mỉnh',
                'description'=>'Lơn Duỵ nhưng tùng không lợn mà là lợn',
                'categoryId'=>4,
                'price'=>2000,
                'image'=>'https://baomoi-photo-1-td.zadn.vn/w1000_r1/17/10/03/105/23441004/1_100183.jpg'
            ],
            [
                'id'=>20,
                'name'=>'Lơn Túng',
                'description'=>'Lơn Duỵ nhưng tùng không lợn mà là lợn',
                'categoryId'=>5,
                'price'=>2000,
                'image'=>'http://a9.vietbao.vn/images/vn999/55/2014/08/20140823-what-the-hoi-7.jpg'
            ]
        ]);
    }
}
