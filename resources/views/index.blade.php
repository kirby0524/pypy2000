@extends('layouts.app')

@section('css')
<link href='{{asset('css/main.css')}}' rel='stylesheet'>
@endsection
@section('content')
         <meta charset="utf-8">
         {{Auth::user()->name}}      
<body style="background-color:rgb(255,240,245);">
    <h1>🌹Happy Garden🌹</h1>
    <h7>↓の日記作成または日付のマスをクリックして新規作成</h7>
        <h4 class='create'><a href='/posts/create'>❁日記作成❁</a></h4>
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
