@extends('layouts.common')

<head>
  @include('parts.categories_css')
</head>

@section('content')
    
<div class="container">
    @foreach($categories as $category)
    
    <div class="card">
    @csrf

    <a href="{{ route('timeline', ['category_id'=>$category->id])}}" class="button">{{ $category->gender }} : {{ $category->name }}</a>
    <div class="card-body"></div>
      
    </div>
    @endforeach
  </div>
@endsection