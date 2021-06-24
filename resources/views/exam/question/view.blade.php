@extends('layouts.admin-app')
@section('title','Question add')
@section('content')

<div class="page-header">
<h1>
Question  Add
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Question for front page </small>&nbsp;
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add question
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">choosing question type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="/quize/addquestion">Add Question</a></button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="/quize/addquestionn">Add Question</a></button>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
</h1>
</div><!-- /.page-header -->
<div class="row">
<div class="col-md-12">


<table class="table table-bordered tale-hover" id="datatables">
    <thead>
        <tr>
            <th>SL</th>
            <th>Quiz Name</th>
            <th>Question</th>
            <th>Right Ans</th>
           
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($questions as $key=>$qus)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$qus->quizes->quiz_name}}</td>
                <td>{{$qus->question}}</td>
                <td>{{$qus->answer}}</td>
                <td>View</td>
                <td><a href="/questions/{{$qus->id}}/edit">Edit</a></td>
                <td>
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this?')">Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
    
</table>



</div>
</div>



 @endsection

