@extends('layouts.common')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header">{{ $post->user->name }}</div>
      <div class="card-body">
        <p class="card-text">{!! nl2br(e($post->body)) !!}</p>
        <div>
          <img src="data:image/png;base64,{{ $post->image }}" alt="image" style="width: 30%; height: auto;">
        </div>
    @auth
     @unless($bookmarked)
      <form method="POST" action="{{ route('bookmarks.add', $post->id) }}">
        @csrf
        <button type="submit" class="btn btn-success">ブックマークする</button>
      </form>
     @else
     <form method="POST" action="{{ route('bookmarks.remove', $post->id) }}">
        @csrf
        <button type="submit" class="btn btn-danger">ブックマークを解除する</button>
     </form>
     @endunless
    @endauth

      </div>
    </div>
  </div>

  <div class="container mt-4">
    @foreach($post->replies as $reply)
      <div class="card">
        <div class="card-header">{{ $reply->user->name }}</div>
        <div class="card-body">
          <p class="card-text">{!! nl2br(e($reply->body)) !!}</p>
        </div>
      </div>
    @endforeach

    @auth
      <div class="card">
        <div class="card-header">{{ Auth::user()->name }}</div>
          <div class="card-body">
            <form method="POST" action="{{ route('posts.reply', $post->id) }}">
              @csrf
              <div class="form-group">
                <textarea name="body" class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">返信する</button>
            </form>
          </div>
        </div>
      </div>
    @endauth
  </div>
@endsection