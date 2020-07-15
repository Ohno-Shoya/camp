{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.comment')

{{-- admin.blade.phpの@yield('title')に'みんなのコメント'を埋め込む --}}
@section('title', 'みんなのコメント')

<!--コメント一覧を表示-->
{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:800px">
           <h1 style="color:#555555; text-align:center; font-size:2.5em; padding:24px 0px; font-weight:bold;">みんなのコメント</h1>
           <div class="">
                <!--商品一覧を出したい-->
                <div class="show_item_box">
                    {{$item->name}} <br>
                    <img src="/image/{{$item->image_path}}" alt="" class="incart" width="300" height="300" ><br>
                    メーカー：{{$item->maker}} <br>
                    価格：{{$item->price}}円<br>
                    コメント：{{$item->comment}} <br>
                    {{$item->detail}} <br>
                </div>
                <!--コメント表示-->
                <h2>コメントを表示したい</h2>
           </div>
       </div>
   </div>
</div>
@endsection