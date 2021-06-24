@extends('layouts.admin-app')
@section('title','Quiz Details')
@section('content')

<div class="page-header">
<h1>
Quiz  Add
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Quiz for front page </small>&nbsp;<a href="/quizes">Quiz  View</a>
</h1>
</div><!-- /.page-header -->
<div class="row">
<div class="col-xs-12">

 <h3>{{$data->quiz_name}}</h3>
<hr>
 @foreach($questions as $key=>$ques)
 
 <h5> {{$key+1}}. {{$ques->question}}</h5>
  <ol   class="ul-list"  style="list-style-type: lower-alpha;" >
    @foreach($ques->optionsdata as $opt)

    <li>&nbsp;<input type="radio" {{$opt->option==$ques->answer ? 'checked' : ''}}  /> {{$opt->option}}   </li>
   
    @endforeach
    
  </ol>
   @if($ques->note!="")
  <h5 style="color: blue;">Note: {{$ques->note}}</h5>
  @endif
  @endforeach

 <!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
</div>

 


@endsection

@section('js')

<script type="text/javascript">
 
    $(document).on('click','.quiz-status',function(){
     var id=$(this).attr('data_id');
   var url=("{!!url('/')!!}");
   
     $.get(url+'/quiz_status/'+id,function(fb){
         alert('Staus Successfully changed');
     });
    });
</script>
@endsection