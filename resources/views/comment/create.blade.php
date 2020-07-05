{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'コメント投稿'を埋め込む --}}
@section('title', 'コメント投稿')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:800px">
           <h1 style="color:#555555; text-align:center; font-size:2.5em; padding:24px 0px; font-weight:bold;">コメント投稿</h1>
           <div class="">
              <form action="{{ action('CommentController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">名前</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="comment" rows="20">{{ old('comment') }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
           </div>
       </div>
   </div>
</div>

@endsection