<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create() 
   {
       $comments = Comment::all();
       return view('comment/create',compact('comments'));
   }
}
