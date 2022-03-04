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
        <h1>🌹Happy Garden🌹</h1>
        <form action="/posts" method="POST">
            {{csrf_field()}}
                </br>
                </br>
                <div class="title">
                    <h2>❁Date❁</h2>
                    <input type="date" name="post[title]" placeholder="日付"/>
                    <p class="title__error" style="color:red">{{ $errors->first('post.title')}}</p>
                </div>
                </br>
                
                <h2>❁Today's "Happy Level"❁</h2>
                <h4>level1=🌱　level2=🌼　level3=🌻　level4=🌹<h4>
                <div class="category">
                <select name="post[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                </div>
                </br>
                 
                 
                <h2>❁3 Happy events❁</h2>
                <div class="event">
                    <textarea name="post[event1]" placeholder="ハッピーな出来事1"></textarea>
                    <p class="body__error" style="color:red">{{ $errors->first('post.event1')}}</p>
                </div>
                 
                <div class="event">
                    <textarea name="post[event2]" placeholder="ハッピーな出来事2"></textarea>
                    <p class="body__error" style="color:red">{{ $errors->first('post.event2')}}</p>
                </div>
              
                <div class="event">
                    <textarea name="post[event3]" placeholder="ハッピーな出来事3"></textarea>
                    <p class="body__error" style="color:red">{{ $errors->first('post.event3')}}</p>    
                </div>
                <input type="submit" value="❁保存❁"/>
        </form>
        <div class="back">[<a href="/">❁戻る❁</a>]</div>
    </body>
</html>
@endsection