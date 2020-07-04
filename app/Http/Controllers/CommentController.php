<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

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
        return view('comment/show');
    }
}
