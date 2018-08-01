<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->delete();

        DB::table('categories')->insert([[
                'id' => 1,
                'name' => 'Lợn nái',
                'description' => 'Lợn xinh gái',
                'image' => 'http://biospring.com.vn/wp-content/uploads/2016/12/quy-trinh-nuoi-lon-nai-sinh-san-1.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Lợn giống',
                'description' => 'Lợn trống',
                'image' => 'http://www.thietbinongnghiep.com.vn/images/dactinh/duroc.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Lợn sữa',
                'description' => 'Lợn toàn sữa',
                'image' => 'https://www.heoquay.com/upload/product-content-heo-sua-nguyen-lieu-loai-ngon-nhat.jpg'
            ],
            [
                'id' => 4,
                'name' => 'Lợn lai kinh tế',
                'description' => 'Lợn đột biến gen',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e9/Middle_White_Sow.jpg'
            ],
            [
                'id' => 5,
                'name' => 'Lợn sề Bắc Kinh',
                'description' => 'Lợn Tung Của',
                'image' => 'https://nextshark-vxdsockgvw3ki.stackpathdns.com/wp-content/uploads/2017/01/pig2-e1484091804514.jpg'
            ]]
        );
    }
}
