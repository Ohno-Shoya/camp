<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
         public function run()
    {
      //保存する前に既存のデータを削除
      DB::table('items')->truncate();
      
      /*データベースに入力する
      以下にカラムと任意のデータを入力*/
      DB::table('items')->insert([
        [
          'name' => 'ソロベース　BDK-79TC',
          'maker' => 'BUNDOK',
          'price' => 22800,
          'comment' => 'おすすめ',
          'image_path' => '5cb9be28b586ef019ece505bdb4e6eef.png'
        ],
        [
          'name' => 'ソロベース１　BDK-08',
          'maker' => 'BUNDOK',
          'price' => 9927,
          'comment' => 'おすすめ2',
          'image_path' => '89a23f13ed4aa861a907e7ca80d72dcc.jpg'
        ],
        [
          'name' => 'ソロベース１　BDK-08',
          'maker' => 'BUNDOK',
          'price' => 9927,
          'comment' => 'おすすめ2',
          'image_path' => '89a23f13ed4aa861a907e7ca80d72dcc.jpg'
        ],
        [
          'name' => 'ソロベース１　BDK-08',
          'maker' => 'BUNDOK',
          'price' => 9927,
          'comment' => 'おすすめ2',
          'image_path' => '89a23f13ed4aa861a907e7ca80d72dcc.jpg'
        ],
        [
          'name' => 'ソロベース１　BDK-08',
          'maker' => 'BUNDOK',
          'price' => 9927,
          'comment' => 'おすすめ2',
          'image_path' => '89a23f13ed4aa861a907e7ca80d72dcc.jpg'
        ],
        [
          'name' => 'ソロベース１　BDK-08',
          'maker' => 'BUNDOK',
          'price' => 9927,
          'comment' => 'おすすめ2',
          'image_path' => '89a23f13ed4aa861a907e7ca80d72dcc.jpg'
        ],
        [
          'name' => 'ソロベース１　BDK-08',
          'maker' => 'BUNDOK',
          'price' => 9927,
          'comment' => 'おすすめ2',
          'image_path' => '89a23f13ed4aa861a907e7ca80d72dcc.jpg'
        ],
        [
          'name' => 'ソロベース１　BDK-08',
          'maker' => 'BUNDOK',
          'price' => 9927,
          'comment' => 'おすすめ2',
          'image_path' => '89a23f13ed4aa861a907e7ca80d72dcc.jpg'
        ],
        [
          'name' => 'ソロベース１　BDK-08',
          'maker' => 'BUNDOK',
          'price' => 9927,
          'comment' => 'おすすめ2',
          'image_path' => '89a23f13ed4aa861a907e7ca80d72dcc.jpg'
        ],
        [
          'name' => 'ソロベース１　BDK-08',
          'maker' => 'BUNDOK',
          'price' => 9927,
          'comment' => 'おすすめ2',
          'image_path' => '89a23f13ed4aa861a907e7ca80d72dcc.jpg'
        ],
        [
          'name' => 'ソロベース１　BDK-08',
          'maker' => 'BUNDOK',
          'price' => 9927,
          'comment' => 'おすすめ2',
          'image_path' => '89a23f13ed4aa861a907e7ca80d72dcc.jpg'
        ],
        [
          'name' => 'ソロベース１　BDK-08',
          'maker' => 'BUNDOK',
          'price' => 9927,
          'comment' => 'おすすめ2',
          'image_path' => '89a23f13ed4aa861a907e7ca80d72dcc.jpg'
        ],
        [
          'name' => 'ソロベース１　BDK-08',
          'maker' => 'BUNDOK',
          'price' => 9927,
          'comment' => 'おすすめ2',
          'image_path' => '89a23f13ed4aa861a907e7ca80d72dcc.jpg'
        ],
      ]);
    }
}
