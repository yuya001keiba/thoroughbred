<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => '1',
            'category_name' => '未出走馬'
        ]);
        DB::table('categories')->insert([
            'id' => '2',
            'category_name' => '現役馬'
        ]);
        DB::table('categories')->insert([
            'id' => '3',
            'category_name' => '繁殖牝馬'
        ]);
        DB::table('categories')->insert([
            'id' => '4',
            'category_name' => '種牡馬'
        ]);
        DB::table('categories')->insert([
            'id' => '5',
            'category_name' => 'クラブ馬'
        ]);
        DB::table('categories')->insert([
            'id' => '6',
            'category_name' => '乗馬'
        ]);
    }
}
