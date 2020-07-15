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
        return redirect('comment/create');
    }
    
    public function show(Request $request){
        $item = Item::find($request->id);
        return view('comment/show',compact('item'));
    }
}
