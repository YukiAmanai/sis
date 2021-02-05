@extends('layouts.common')

@section('content')
<form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
 @csrf
 <input id="image" type="file" name="image"> 
       <div class="form">
           <div class="form-title">
             <label for="title">シューズ名</label> 
             <input id="title"class="" name="title" value="">
           </div>
   
           <div class="form-body">
             <label for="body" class="form-content">内容</label> 
             <textarea id="body" class="" name="body" cols="50" rows="10"></textarea> 
                <input method="GET" type="hidden" name="category_id" value="{{ $category_id }}">       
           </div>
           
           <div class="form-submit">
             <button type="submit">投稿する</button>
           </div>
       </div>
</form>
@endsection