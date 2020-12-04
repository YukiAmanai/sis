@extends('layouts.app')

@section('content')
  <form method="post">
    @csrf
    <input name="body" type="text" value="" />
    <button type="submit">投稿する</button>
  </form>
@endsection