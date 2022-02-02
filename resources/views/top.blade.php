@extends('layouts.common')

<head>
  @include('parts.top_css')
</head>
@section('content')
  <header>
    <h1>シューズ情報を投稿しよう</h1>
  </header>
@include('parts.image')
@include('parts.js')

<div class="container">
    <a href="{{ route('categories.index') }}" class="button">START</a>   
</div>
  <div class="text_center">
    <h3 class="">ネット通販で靴を気軽に買えるようにする</h3>
      <p class="">皆さんネットで靴を購入されたことはありますか？<br>
    サイズ感が分からなかったり、購入後の見た目のイメージが異なったりして購入するのが心配だったりしますよね？<br>
    その問題解消するために靴の情報を投稿し、第三者同士で情報共有できるSNSを作りました！<br>
      </p>
  </div>

@endsection
