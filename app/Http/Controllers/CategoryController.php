<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $categories = Category::where('gender',$user->gender)
        ->get();
       
        return view('categories.index', ['categories' => $categories ]);
    }
 
}
