<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $user = Auth::user();
        $categories = Category::where('gender',$user->gender)->get();
        //$categories->user()->associate(Auth::user());
        //$categories->save();
       
        return view('categories.index', ['categories' => $categories ]);
    }
}
