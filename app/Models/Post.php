<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['title','body','category_id','image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function bookmarkingUsers()
    {
        return $this->belongsToMany(User::class, 'bookmarks');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function likes()
    {
      return $this->hasMany(Like::class, 'Post_id');
    }

    public function is_liked_by_auth_user()
    {
      $user = Auth::id();
      $likers = array();
      foreach($this->likes as $like) {
        array_push($likers, $like->user_id);
      }
  
      if (in_array($user, $likers)) {
        return true;
      } else {
        return false;
      }
    }

}
