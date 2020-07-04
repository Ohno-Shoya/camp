<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //保存する前に既存のデータを削除
      DB::table('comments')->truncate();
      
      /*データベースに入力する
      以下にカラムと任意のデータを入力*/
      DB::table('comments')->insert([
        [
          'name' => '大野',
          'comment' => '最高',
        ],
      ]);
    }
}
