@extends('layouts.user-app')
@section('title','Exam')
@section('banner')
<section class="page-banner services-banner">
<div class="container">
<div class="banner-header">
<h2> Exam</h2>
<span class="underline center"></span>
<p class="lead"></p>
</div>
<div class="breadcrumb">
<ul>
<li><a href="/">Home</a></li>
<li>Exam</li>
</ul>
</div>
</div>
</section>
@endsection
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;height:2000px;}


.icon-bar {
  position: fixed;
  top: 50%;
  right: 10%;
  z-index: 9999;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
 @media only screen and (max-width: 800px) {
  .icon-bar {
     position: fixed;
 
 

 top:95%;
  right:0;
  z-index: 9999;
 
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  }
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

 
.content {
  margin-left: 75px;
  font-size: 30px;
}
</style>
<style type="text/css">
    .ul-list li:nth-child(2n+1){
     background-color: #b30000;
     color: #ffffff;
    }
    .ul-list li:nth-child(2n+1){
     background-color: #ff4d4d;
     color: #fff;
    }
    .ul-list li:hover{
    background-color: #ffffff;
   color: red;
    }
    .ul-list li{
        padding: 10px;
    }
    .ul-list li a{
        font-size:16px;
    }
</style>
@endsection
@section('content')
<section class=" ">
<div class="container">
<div class="row">

 

 
 <h3>{{$quiz->quiz_name}}</h3><hr>
 
    <div class="col-md-12">
@php $sl=0; @endphp
@foreach($exams as $key=>$exam)
@foreach($questions as $ques)
 
@if($exam->questions_id==$ques->id)
 
 <h5> {{++$sl}}. {{$ques->question}}</h5>
  <ol   class="ul-list"  style="list-style-type: lower-alpha;" >
      @foreach($ques->optionsdata as $opt)
     @if($ques->answer==$exam->ans)
     <li style="color: green;">&nbsp;<input type="radio" {{$opt->option==$ques->answer ? 'checked' : ''}}  /> {{$opt->option}}   </li>
   @else
   @if($opt->option==$ques->answer)
    <li style="color: green;"><input type="radio"   value="{{$opt->option}}" checked="" /> {{$opt->option}}   </li>
    @elseif($opt->option==$exam->ans)
       <li style="color: red;"><input type="radio"   value="{{$opt->option}}" checked="" /> {{$opt->option}}   </li>
       @else
          <li ><input type="radio"   value="{{$opt->option}}"  /> {{$opt->option}}   </li>
   @endif
   @endif
   @if(count($ques->optionsdata) == 0)
   @if($ques->answer==$exam->ans)
     <li style="color: green;">&nbsp;<input type="text" {{$opt->option==$ques->answer ? 'checked' : ''}}  /> {{$ques->answer}}   </li>
   @else
   @if($ques->answer)
    <li style="color: green;"><input type="text"   value="{{$opt->option}}" checked="" /> {{$ques->answer}}   </li>
    @elseif($exam->ans)
       <li style="color: red;"><input type="text"   value="{{$opt->option}}" checked="" /> {{$exam->ans}}   </li>
       @else
          <li ><input type="text"   value="{{$ques->answer}}"  /> {{$opt->option}}   </li>
   @endif
   @endif
   @endif
      @endforeach
     
  </ol>
   @if($ques->note!="")
  <h5 style="color: blue;padding-bottom:20px;">Note: {{$ques->note}}</h5>
  @endif
  @endif
  @endforeach
  @endforeach
 
</div>
 
 

</div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script type="text/javascript">
    var interval;
    var form=document.forms.exam;
    function countdown() {
      clearInterval(interval);

      interval = setInterval( function() {
          var timer = $('.js-timeout').html();
          timer = timer.split(':');
          var minutes = timer[0];
          var seconds = timer[1];
          seconds -= 1;
          if (minutes < 0) return;
          else if (seconds < 0 && minutes != 0) {
              minutes -= 1;
              seconds = 59;
          }
          else if (seconds < 10 && length.seconds != 2) seconds = '0' + seconds;

          $('.js-timeout').html(minutes + ':' + seconds);

          if (minutes == 0 && seconds == 0) { clearInterval(interval);  form.submit(); alert("Time Over Please Click Ok Button");}
      }, 1000);
    }
    
    $('.js-timeout').text("{{ $quiz->quiz_time }}");
    countdown();
</script>
@endsection