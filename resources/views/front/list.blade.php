{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ページ名'を埋め込む --}}
@section('title', '登録アイテム')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
           <h1 style="color:#555555; text-align:center; font-size:2.5em; padding:24px 0px; font-weight:bold;">テント一覧</h1>
           <div class="">
              <div class="d-flex flex-row flex-wrap">
                     <!--商品一覧を出したい-->
                 @foreach($items as $item)
                    <div class="col-xs-6 col-sm-4 col-md-4 ">
                        <div class="item_box">
                              {{$item->name}} <br>
                              <img src="/image/{{$item->image_path}}" alt="" class="incart" ><br>
                              {{$item->maker}} <br>
                              {{$item->price}}円<br>
                              {{$item->comment}} <br>
                              {{$item->detail}} <br>
                              <div class="text-left" >
                            　   <a href="{{ action('CommentController@create') }}">コメントをする</a>
                              </div>
                              <div class="text-left" >
                            　   <a href="{{ action('CommentController@show') }}">コメントを見る</a>
                              </div>
                        </div>
                    </div>
                 @endforeach
                    <div class="text-center" style="width: 200px;margin: 20px auto;">
                          {{$items->links()}} 
                    </div>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection