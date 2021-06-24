@extends('layouts.user-app')
@section('title','Exam')
@section('banner')
<section class="page-banner services-banner">
<div class="container">
<div class="banner-header">
<h2> Exam Result</h2>
<span class="underline center"></span>
<p class="lead"></p>
</div>
<div class="breadcrumb">
<ul>
<li><a href="/">Home</a></li>
<li>Exam Result</li>
</ul>
</div>
</div>
</section>
@endsection
@section('css')
<style type="text/css">
/*.ul-list li:nth-child(2n+1){
background-color: #b30000;
color: #ffffff;
}
.ul-list li:nth-child(2n+1){
background-color: #ff4d4d;
color: #fff;
}*/
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

<section class="company-info-box">
        <div class="company-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 aligncenter">
                    <div class="col-md-6 border-dark-left">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="company-detail bg-dark margin-left">
                                    <h3 class="section-title">Mr.{{Auth::id()}}</h3>
                                    <span class="underline left"></span>
                                    <p> Welcome to  Online Quiz  </p>
                                    <a href="/" class="btn btn-primary">Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 border-dark">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="company-detail bg-light margin-right">
                                    <h3 class="section-title">Exam Reult</h3>
                                    <span class="underline left"></span>
                                    <p><table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>Exam Title</th>
                                                <th>Date</th>
                                                <th>Result</th>
                                                <th>Score</th>
                                                <!-- <th>Details</th> -->
                                                 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($results as $key=>$res)
                                            <tr><td>{{++$key}}</td>
                                                <td>{{$res->quiz_name}}</td>
                                                <td>{{$res->date}} </td>
                                                <td>{{$res->yes_ans}}/{{$res->yes_ans+$res->no_ans}} </td>
                                                <td>{{$res->score}}
                                                 <td><a href="/MyExamDetails/{{$res->quizes_id}}">Details</a></td>
                                                 
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table> </p>
                                    <a href="/quiz" class="btn btn-dark-gray">Today Exam</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
</div>
</section>
@endsection