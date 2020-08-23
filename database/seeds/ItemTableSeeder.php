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
          'comment' => '憧れの軍幕式テントいかがですか？',
          'image_path' => '5cb9be28b586ef019ece505bdb4e6eef.png'
        ],
        [
          'name' => 'ソロベース１　BDK-08',
          'maker' => 'BUNDOK',
          'price' => 9927,
          'comment' => '初心者にはこれ。手頃な値段で簡単設営！！',
          'image_path' => '07931ee0c9081d442b31ab1bfe82a935.jpg'
        ],
        [
          'name' => 'ツーリングドームST',
          'maker' => 'Coleman',
          'price' => 17969,
          'comment' => 'バイクに乗られる方、濡れるのが嫌ならこのテント！！',
          'image_path' => 'a677f5bab975c4fb5d7d9fdf17eea57f.png'
        ],
        [
          'name' => 'ワンポールテントS',
          'maker' => 'DOD',
          'price' => 10462,
          'comment' => 'テントと言えばこの形！人気のワンポールテントです！',
          'image_path' => 'c817c8edff53e12949c6b2a1930e9c9f.png'
        ],
        [
          'name' => 'ワンポールテント',
          'maker' => 'Preself',
          'price' => 9900,
          'comment' => '冬でもキャンプがしたい！換気窓付きでストーブも使えます。',
          'image_path' => 'bc193892caa589981cae7b250b9b378e.png'
        ],
        [
          'name' => 'Elixir2',
          'maker' => 'MSR',
          'price' => 34800,
          'comment' => 'キャンプになれてきたらこんなテントはいかが？',
          'image_path' => '86e60eb09c21626fbcf20b12d8dbe86c.png'
        ],
        [
          'name' => 'ランドロック',
          'maker' => 'snow peak',
          'price' => 174900,
          'comment' => '家族でキャンプ。キャンプ用品といえばsnow peak!!',
          'image_path' => '3e10b30093ca2c8d3aa3bbf2c392e019.jpg'
        ],
      ]);
    }
}
