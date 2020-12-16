@extends('layouts.app')

@section('content')
    
<div class="container">
    @foreach($categories as $category)
    
    <div class="card">
    @csrf
    <a href="{{ route('posts.create', ['category_id'=>$category->id])}}">{{ $category->name }}</a>
      <div class="card-body"></div>
      
    </div>
    @endforeach
  </div>
@endsection