@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">投稿する</div>

        <div class="card-body">
          <form method="POST" ectype="multpart/form-data" action="{{ route('posts.store') }}">
          @csrf
            <div class="form-group row">
              <label for="body" class="col-md-4 col-form-label text-md-right">内容</label>

              <div class="col-md-6">
              
                <input id="body" type="text" class="form-control" name="body" value="" required autofocus>
                <input method="GET" type="hidden" name="category_id" value="{{ $category_id }}">
              
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">投稿</button>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleFormControlFile1">Example file input</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_url">
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection