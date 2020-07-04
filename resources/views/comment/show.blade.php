{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.comment')

{{-- admin.blade.phpの@yield('title')に'みんなのコメント'を埋め込む --}}
@section('title', 'みんなのコメント')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<h1>コメントを表示したい<h2>
@endsection