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
<style type="text/css">

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
   
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox_v09t"></div><br>
            
<div class="row">
    <div class="col-md-12">
        <h3>Today Exam</h3><br>
        <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th> Exam Title </th>
                    <th> Exam Time </th>
                    <th> Total Question </th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
 
                    @foreach($quizes as $key=>$quz)
                 
                   
                <tr>
                    <td> {{++$key}} </td>
                    <td> {{$quz->quiz_name}}</td>
                    <td> {{$quz->quiz_time}}</td>
                    <td> {{$quz->number_of_question}}</td>
                    @if(Sentinel::check())
                    @php
                    $user=Sentinel::getUser()->id;
                  $quiz=App\Model\Results::where('user_id',$user)->where('quizes_id',$quz->id)->first();
                    @endphp
                    @if($quiz)
                    <td>Complete </td>
                    @else
                        <td><a href="/exam-start/{{$quz->id}}"><img src="https://img.icons8.com/dusk/30/000000/start.png"/>Strat Exam</a></td>
                        @endif
                    @else
                    <td><a href="/exam-start/{{$quz->id}}"><img src="https://img.icons8.com/dusk/30/000000/start.png"/>Strat Exam</a></td>
               
                    @endif
                </tr>
               
                 
                @endforeach
               
                 
            </tbody>
        </table>
    </div>
    
    {{$quizes->links()}}
   
</div>
</div>

</div>
</section>
 

@endsection

