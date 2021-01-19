@extends('layouts.common')

@section('content')
  <div class="container">
    @foreach($posts as $post)
      <div class="card">
        <div class="card-header">{{ $post->user->name }}</div>
        <div class="card-body">
            <p class="card-text">{{ $post->body }}</p>
            <p class="card-text"><a href="{{ route('posts.show', $post->id) }}">詳細を見る</a></p>
            <span>
                投稿日時 {{ $post->created_at->format('Y/m/d') }}
            </span>
            

            @if(Auth::id() === $post->user_id)
            <form method="POST" action="{{ route('posts.delete',$post->id) }}">
            @csrf
            <button type="submit" class="btn btn-danger">削除</button>
            </form>
            
            @endif
      </div>
      <a href="{{ route('posts.create',['category_id'=>$category_id]) }}">
        <button type="button" class="btn btn-primary">投稿する</button>
      </a>
  　　　　  
            <div>
                <img src="data:image/png;base64,{{ $post->image }}" alt="image" style="width: 40%; height: auto;">
            </div>
        </div>
      <div>
    @endforeach

  </div>
@endsection