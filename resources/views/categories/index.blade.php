@extends('layouts.common')

@section('content')
    
<div class="container">
    @foreach($categories as $category)
    
    <div class="card">
    @csrf
      <a href="{{ route('posts.create', ['category_id'=>$category->id])}}" class="button">{{ $category->gender }}{{ $category->name }}</a>
    <div class="card-body"></div>
      
    </div>
    @endforeach
  </div>
@endsection