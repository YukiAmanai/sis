<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::where('category_id',$request->get('category_id'))->with(['user'])->orderBy('created_at', 'desc')->get();
        
        return view('index', ['posts'=>$posts ]);
    }

    public function create(Request $request)
    {
        $category_id = $request->get('category_id');
        $images = $request->get('image');

        return view('posts.create')->with(['category_id'=>$category_id,'images'=>$images ]);
    }

    public function store(Request $request)
   {
    $post = new Post;
    $post->fill($request->all());
    $post->user()->associate(Auth::user());
    $image1 = $request->get('image');
    $images = Post::where('image', $image1)->get();
    $post->$images = base64_encode(file_get_contents([$images]));
    $id = $request->get('category_id');
    //dd($request->all());
    $post->save();

    return redirect()->to(route('timeline', ['category_id'=>$id]));
   }

   public function delete(Post $post)
   {
       if (Auth::id() !== $post->user_id) {
          abort(403);
    }

    $post->delete();

    return redirect()->to('categories/index');
   }

   public function show(Post $post)
   {
    $post->load('replies.user');
    $bookmarked = $post->bookmarkingUsers->contains(Auth::id());

    return view('posts.show', ['post' => $post, 'bookmarked' => $bookmarked]);
   }

   public function reply(Request $request, Post $post)
   {
    $reply = new Reply;
    $reply->fill($request->all()); 
    $reply->user()->associate(Auth::user());
    $reply->post()->associate($post);
    $reply->save();

    return redirect()->back();
   }
}
