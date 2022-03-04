@extends('layouts.app')

@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
         {{Auth::user()->name}}      
        <title>Blog</title>
    </head>
    <body>
     <body style="background-color:rgb(255,240,245);">
     <h1 class="title">🌹Happy Garden🌹</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            </br>
            </br>
            <div class="title">
                <h2>❁Date❁</h2>
                <input type='date' name='post[title]' value="{{ $post->title }}"/>
            </div>
            </br>
            
            <div class="category">
            <h2>❁Today's "Happy Level"❁</h2>
            <h4>level1=🌱　level2=🌼　level3=🌻　level4=🌹<h4>
            <select name="post[category_id]">    
                @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            </div>
            </br>
            
            <div class='content__event'>
                <h2>❁3 Happy events❁</h2>
                <input type='text' name='post[event1]' value="{{ $post->event1 }}"/>
                </br>
                <input type='text' name='post[event2]' value="{{ $post->event2 }}"/>
                </br>
                <input type='text' name='post[event3]' value="{{ $post->event3 }}"/>
            </div>
            <input type="submit" value="❁保存❁"/>
            </br>
             
        </form>
    <div class="back">[<a href="/posts/{{ $post->id }}">❁戻る❁</a>]</div>
</body>
@endsection