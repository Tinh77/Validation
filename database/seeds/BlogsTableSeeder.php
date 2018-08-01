<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->delete();

        DB::table('blogs')->insert([
                [
                    'id' => 1,
                    'name' => 'My Blog 1'
                ],
                [
                    'id' => 2,
                    'name' => 'My Blog 2'
                ],
                [
                    'id' => 3,
                    'name' => 'My Blog 3'
                ],
                [
                    'id' => 4,
                    'name' => 'My Blog 4'
                ],
                [
                    'id' => 5,
                    'name' => 'My Blog 5'
                ]
            ]
        );
    }
}
