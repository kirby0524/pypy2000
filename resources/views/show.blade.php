@extends('layouts.app')

@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
         {{Auth::user()->name}}      
        <title>Blog</title>
        <!-- Fonts -->
         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
   </head>
    <body>
        <body style="background-color:rgb(255,240,245);">
        <h1>🌹Happy Garden🌹</h1>
         </br>
         </br>
        <div class='post'>
            <h2>❁Date❁</h2>
            <h3 class='title'>{{ $post->title }}</h3>
            </br>
            </br>
            
            <h2>❁Today's "Happy Level"❁</h2>
　　　　　　<h5>level1=🌱　level2=🌼　level3=🌻　level4=🌹<h5>
            <h3 href="/categories/{{ $post->category->id }}">  Today's level▶ {{ $post->category->name }}</h3>
            </br>
            </br>
            
            <h2>❁3 Happy events❁</h2>
            <h3 class='event'>▶{{ $post->event1 }}</h3>
             <h3 class='event'>▶{{ $post->event2 }}</h3>
              <h3 class='event'>▶{{ $post->event3 }}</h3>
            </br>
            </div>
            
            <p class='edit'>[<a href="/posts/{{ $post->id }}/edit">❁編集❁</a>]</p>
        　　<form action="/posts/{{ $post->id }}" id="form_delete" method="post">
            {{csrf_field()}}
            {{method_field('delete')}}
           <input type="submit" style="display:none">
           <p class='delete' onclick="return deletePost(this);">[<span>❁削除❁</span>]</p>
             </form>
             <script type="application/javascript">
                     function deletePost(e) {   
                     'use strict';
                     if (confirm('削除すると復元できません。\n本当に削除しますか？')){
                        document.getElementById('form_delete').submit();
                     }
                    }
             </script>
        <div class="back">[<a href='/'>❁戻る❁</a>]</div>
        <p class='updated_at'>{{ $post->updated_at}}</p>
      
    </body>
</html>
@endsection