<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;

class CategoryController extends Controller
{
        public function index(Category $category)
    {
        $image1=$category-> find(1) ->first();
        dd($image1);
    
        return view('categories')->with(['posts' => $category->getByCategory()]);
    }
     
}




