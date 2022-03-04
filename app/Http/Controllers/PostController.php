<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;
use App\Category;
use App\Models\Event;


class PostController extends Controller
{
        public function index(Post $post)
        {
        return view('index')->with(['posts' => Post::with('category')->get()]);
             
        }
        
    
        public function show(Post $post)
        {
            return view('show')->with(['post' => $post]);
            
        }
        
        
       public function create(Category $category)
        {  
            return view('create')->with(['categories' => $category->get()]);
        }
        
        
        
        public function store( Post $post,PostRequest $request)
        {
            $input = $request['post'];
            $post->fill($input)->save();
            return redirect('/posts/' . $post->id);
            
        }
        
        public function edit(Post $post,Category $category)
        {
            return view('edit')->with(['post' => $post, 'categories' => $category->get()]);
    
        }
        
        public function update(Post $post,PostRequest $request)
        {
            $input_post = $request['post'];
            $post->fill($input_post)->save();
            return redirect('/posts/' . $post->id);
            
        }
            
        public function delete(Post $post)
        {
            $post->delete();
            return redirect('/');
        }
       
        
       
       
}


