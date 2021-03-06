@extends('layouts.app')

@section('css')
<link href='{{asset('css/main.css')}}' rel='stylesheet'>
@endsection
@section('content')
         <meta charset="utf-8">
         {{Auth::user()->name}}      
<body style="background-color:rgb(255,240,245);">
    <h1>ð¹Happy Gardenð¹</h1>
    <h7>âã®æ¥è¨ä½æã¾ãã¯æ¥ä»ã®ãã¹ãã¯ãªãã¯ãã¦æ°è¦ä½æ</h7>
        <h4 class='create'><a href='/posts/create'>âæ¥è¨ä½æâ</a></h4>
        <div id='calendar'></div>
@endsection
@section('js')
     <script src='{{asset('js/main.js')}}'></script>
        <script>
        let happy=@json($posts, JSON_PRETTY_PRINT);
       
        let diaries=[];
      
       
        for(let i=0; i<happy.length; i++){
          let diaryif={
            title: happy[i].category.name,
            start: happy[i].title,
            id: happy[i].id,
            color:'#AADDDD'
        }
          diaries.push(diaryif);
        }
       
       
       
       document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
           initialView: 'dayGridMonth',
           selecttable:true,
           businessHours:true,
          
           eventClick: function(info){
                                                    location.href='/posts/'+info.event.id    
                                                    },
           
           dateClick: function(date, jsEvent, view) {
                                                     location.href='/posts/create'
                                                    },
           events:diaries,
           
           });
           calendar.render();
          });


        </script>
@endsection
