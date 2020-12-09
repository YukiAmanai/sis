@extends('layouts.app')

@section('content')
    
<div class="container">
    @foreach($categories as $category)
    
    <div class="card">
    <form method="get" action="{{ route('posts.create')}}">
    @csrf
      <button type="submit">{{ $category->name }}</button>
      <div class="card-body">{{ $category->gender}}</div>
      
    </div>
    </form>
    @endforeach
  </div>
@endsection