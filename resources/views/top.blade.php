@extends('layouts.common')

@section('content')

        <h2>シューズの情報を投稿しょう！</h2>

@include('parts.image')

<script src="js/top.js"></script>

<a href="{{ route('categories.index') }}">START</a>

<h3>ネット通販で靴を気軽に買えるようにする</h3>
            <p>皆さんネットで靴を購入されたことはありますか？<br>
            今ネット通販で洋服や靴を購入するのが主流になっています<br>
            しかし靴に関してはサイズ感が分からなかったり、購入後の見た目のイメージが異なったりして購入するのが心配だったりしますよね？<br>
            その問題解消するために靴の情報を投稿し、第三者同士で情報共有できるSNSを作りました！<br>
            </p>

@endsection