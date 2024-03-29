@extends('layouts.common')

@section('content')
<div class="container">
  @forelse($posts as $post)
  <div class="card">
    <div class="card-header">{{ $post->user->name }}</div>
      <div class="card-body">
        <p class="card-text">{!! nl2br(e($post->body)) !!}</p>
        <p class="card-text"><a href="{{ route('posts.show', $post->id) }}">詳細を見る</a></p>
      </div>
  <div>
      <img src="data:image/png;base64,{{ $post->image }}" alt="image" style="width: 30%; height: auto;">
  </div>
  @empty
  <p>ブックマークはありません</p>
  @endforelse
  </div>
</div>
@endsection
