<?php

use Illuminate\Database\Seeder;

class AuctionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auctions')->insert([
            'id' => '1',
            'market_name' => 'セレクトセール'
        ]);
        DB::table('auctions')->insert([
            'id' => '2',
            'market_name' => 'サマーセール'
        ]);
        DB::table('auctions')->insert([
            'id' => '3',
            'market_name' => 'セレクションセール'
        ]);
        DB::table('auctions')->insert([
            'id' => '4',
            'market_name' => 'オータムセール'
        ]);
    }
}
