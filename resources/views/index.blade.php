@extends('layouts.common')

<head>
@include('parts.top_css')
@include('parts.js')
</head>

@section('content')
  <form class="form-inline my-2 my-lg-0 ml-2">
    <div class="form-group">
      <input method="GET" type="hidden" name="category_id" value="{{ $category_id }}">
      <input type="search" class="form-control mr-sm-2" name="title" value="{{ $title }}" placeholder="シューズ名を入力" aria-label="検索...">
    </div>
      <input type="submit" value="検索" class="btn btn-info">
  </form>

  @forelse($posts as $post)
  <div class="container">
      <div class="card">
        <div class="card-header">ユーザー: {{ $post->user->name }}</div>
        <div class="card-body">
          <p class="card-text">カテゴリー: {{ $post->category->name}}</p>
          <p class="card-text">シューズ名: {{ $post->title}}</p>
          <p class="card-text">投稿内容: {!! nl2br(e($post->body)) !!}</p>
          <p class="card-text">投稿時間: {{ $post->created_at->diffForHumans() }}<p>
          <p class="card-text"><a href="{{ route('posts.show', $post->id) }}">詳細を見る</a></p>
            
          @if(Auth::id() === $post->user_id)
          <form method="POST" action="{{ route('posts.delete',$post->id) }}">
            @csrf
          <button type="submit" class="delete">削除</button>
          </form>
          @endif
        </div>
            <div>
                  <a href="{{ route('posts.create',['category_id'=>$category_id]) }}" class="post_button">
                  <button type="button" class="btn btn-primary">投稿する</button>      
                  </a>
            </div>
          <div>
            <img src="data:image/png;base64,{{ $post->image }}" alt="image" style="width: 40%; height: auto;">
          </div>
        </div>
    @empty
      <div class="container">
        <p>検索結果なし</p>
          <a class="btn btn-secondary" href="{{ route('timeline',['category_id'=>$category_id]) }}">タイムラインに戻る</a>
      </div>
    @endforelse
  </div>
@endsection