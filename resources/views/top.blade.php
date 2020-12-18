@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
    <h1>SIS</h1>
    </header>

<a href="{{ route('categories.index')}}">START</a>
    
</body>
</html>
@endsection
