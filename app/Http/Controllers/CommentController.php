<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

use App\Item;

class CommentController extends Controller
{
    public function add()
  {
      return view('comment.create');
  }
    public function create(Request $request){
        // バリデーションする
        $this->validate($request,Comment::$rules);
        
        // コメントモデルとコメントフォームからデータを取得する
        $comment = new Comment;
        $form = $request->all();
        
        // フォームからのトークンを削除
        unset($form['_token']);
        
        // データの保存
        $comment->fill($form);
        $comment->save();
        return redirect('comment/create');
    }
    
    public function show(Request $request){
        $item = Item::find($request->id);
        return view('comment/show',compact('item'));
    }
}
