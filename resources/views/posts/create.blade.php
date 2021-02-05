@extends('layouts.common')

@section('content')
<form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
 @csrf
 <div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
      <div class="card-header">投稿する</div>
      <input id="image" type="file" name="image"> 
       <div class="form">
           <div class="form-title">
             <label for="title">シューズ名</label> 
             <input id="title"class="" name="title" value="">
           </div>
   
           <div class="form-body">
             <label for="body" class="col-md-4 col-form-label text-md-right">内容</label> 
             <textarea id="body" class="" name="body" cols="50" rows="10"></textarea> 
                <input method="GET" type="hidden" name="category_id" value="{{ $category_id }}">       
           </div>
           <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
             <button class="btn btn-primary" type="submit">投稿する</button>
           </div>
       </div>
       </div>
      </div>
      </div>
      </div>
      </div>
    </div>
  </div>
</form>
@endsection