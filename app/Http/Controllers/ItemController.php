<?php

namespace App\Http\Controllers;

use App\Item;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() 
   {
       $items = Item::Paginate(6);
       return view('front/list',compact('items'));
   }
}
