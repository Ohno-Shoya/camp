{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'コメント投稿と一覧表示')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container-fluid">
 <div class="">
     <div class="mx-auto" style="max-width:1200px">
         <h1 class="text-center font-weight-bold" style="color:#555555;
             font-size:1.2em; padding:24px 0px;">コメント投稿</h1>
         <div class="card-body">
             
                           
               @foreach($comments as $comment)
                    {{$comment-name}}<br>
                    {{$comment->comment}}<br>
               @endforeach

             
         </div>
     </div>
 </div>
</div>
@endsection