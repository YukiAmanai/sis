<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Reply;
use Illuminate\Http\Request;
use App\Http\Requests\Post\PostConfirmRequest;
use App\Http\Requests\Reply\ReplyConfirmRequest;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{ 
    public function index(Request $request, Post $post)
    {
        $category_id = $request->get('category_id');
        $posts = Post::where('category_id',$category_id)
        ->with(['user'])
        ->orderBy('created_at', 'desc')
        ->get();
        $title = $request->get('title');

        if ($post->title = $title) {
          $posts = Post::where('title','like','%'.$title.'%')->where('category_id',$category_id)
          ->with(['user'])
          ->orderBy('created_at','desc')
          ->get();
        }elseif ($post->title != $title){
          $posts = Post::where('category_id',$category_id)
          ->with(['user'])
          ->orderBy('created_at', 'desc')
          ->get();
        }
        return view('index', ['posts'=>$posts,'category_id'=>$category_id,'title'=>$title]);
    }

    public function create(Request $request)
    {
        $category_id = $request->get('category_id');
        
        return view('posts.create')->with(['category_id'=>$category_id]);
    }

    public function store(PostConfirmRequest $request)
   {
    $post = new Post;
    $post->fill($request->all());
    $post->user()->associate(Auth::user());
    $post->image = base64_encode(file_get_contents($request->image));
    $id = $request->get('category_id');
    $post->save();

    return redirect()->to(route('timeline',['category_id'=>$id]));
   }

   public function delete(Post $post)
   {
       if (Auth::id() !== $post->user_id) {
          abort(403);
    }
    $post->delete();

    return redirect()->back();
   }

   public function show(Post $post)
   {
    $post->load('replies.user');
    $bookmarked = $post->bookmarkingUsers
    ->contains(Auth::id());

    return view('posts.show', ['post' => $post, 'bookmarked' => $bookmarked]);
   }

   public function reply(ReplyConfirmRequest $request, Post $post)
   {
    $reply = new Reply;
    $reply->fill($request->all()); 
    $reply->user()->associate(Auth::user());
    $reply->post()->associate($post);
    $reply->save();

    return redirect()->back();
   }
}
