{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.comment')

{{-- admin.blade.phpの@yield('title')に'みんなのコメント'を埋め込む --}}
@section('title', 'みんなのコメント')

<!--サイドバーを表示-->
@section('sidebar')
    <!--<div class="">-->
        
    <!--</div>>-->
    <h1>サイドバー表示</h1>
@endsection
{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:800px">
           <h1 style="color:#555555; text-align:center; font-size:2.5em; padding:24px 0px; font-weight:bold;">みんなのコメント</h1>
           <div class="">
              <h1>コメントを表示したい<h2>
           </div>
       </div>
   </div>
</div>
@endsection