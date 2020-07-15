<?php

use Illuminate\Database\Seeder;

class SideberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //保存する前に既存のデータを削除
      DB::table('sidebers')->truncate();
      
      /*データベースに入力する
      以下にカラムと任意のデータを入力*/
      DB::table('sidebers')->insert([
        [
          'items_id' => '1',
        ],
        [
          'items_id' => '2',
        ],
        [
          'items_id' => '3',
        ],
        [
          'items_id' => '4',
        ],
        [
          'items_id' => '5',
        ],
        [
          'items_id' => '6',
        ],
        [
          'items_id' => '7',
        ],
        [
          'items_id' => '8',
        ],
        [
          'items_id' => '9',
        ],
        [
          'items_id' => '10',
        ],
        [
          'items_id' => '11',
        ],
        [
          'items_id' => '12',
        ],
        [
          'items_id' => '13',
        ],
      ]);
    }
}
