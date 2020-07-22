<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

use App\Item;

class CommentController extends Controller
{
    public function add(Request $request)
  {
      $item = Item::find($request->id);
    //   dd($item);
      return view('comment.create',["item" => $item]);
  }
    public function create(Request $request){
        // バリデーションする
        $this->validate($request,Comment::$rules);
        
        // コメントモデルとコメントフォームからデータを取得する
        $comment = new Comment;
        $form = $request->all();
        $item = Item::find($request->item_id);
        $comment->item_id = $item->id;
        
        // フォームからのトークンを削除
        unset($form['_token']);
        
        // データの保存
        $comment->fill($form);
        $comment->save();
        return redirect('/');
    }
    
    public function show(Request $request){
        $item = Item::find($request->id);
        // $comments = Item::find($request->id)->comments;
        return view('comment/show',compact('item'));
    }
}
