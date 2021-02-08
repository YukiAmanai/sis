@extends('layouts.common')

@section('content')
  @foreach($errors->all() as $message)
    <div>{{ $message }}</div>
  @endforeach

  @if(Session::has('message'))
    <div>{{ Session::get('message') }}</div>
  @endif
  <div class="form-group">
  <form method="POST" action="{{ route('users.update') }}">
    @csrf
    <label for="formGroupExampleInput">名前: </label><input name="name" type="text" value="{{ $user->name }}"class="form-control"id="formGroupExampleInput" placeholder="名前変更欄">
    <label for="formGroupExampleInput">メールアドレス: </label><input name="email" type="email" value="{{ $user->email }}" class="form-control"id="formGroupExampleInput" placeholder="メールアドレス変更欄">
    <button class="btn btn-primary" type="submit">変更</button>
  </form>
  </div>
@endsection