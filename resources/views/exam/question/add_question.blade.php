@extends('layouts.admin-app')
@section('title','Question add')
@section('content')

<div class="page-header">
<h1>
Question  Add
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Question for front page </small>&nbsp;<a href="/questions">Question  View</a>
</h1>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
<img src="https://img.icons8.com/bubbles/30/000000/create-new.png"/> Add question
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">choose your question type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <button type="button"><a href="/quize/addquestion/{{$quizId->id}}"><img src="https://img.icons8.com/fluent/68/000000/multiple-choice.png"/>Multiple choice</a></button>
        <button type="button"><a href="/quize/addquestionn/{{$quizId->id}}"><img src="https://img.icons8.com/dusk/68/000000/text.png"/>Free text</a></button>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
</div>
<div class="row">
<div class="col-md-12">

 <div class="alert alert-danger" style="display: none;"> </div>
<div class="alert alert-success" style="display: none;"><p>Data add Successfully </p></div>

<form class="form-horizontal" role="form" action="/questions" method="POST" >
    {{csrf_field()}}

<div class="space-4"></div>
<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Quiz Name </label>
    <div class="col-sm-10">
         
        <select class="form-control" name="quizes_id" required="">
            <option value=" {{$quizId->id}} ">{{$quizId->quiz_name}}</option>
        </select>
       
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right" for="form-field-2">Question </label>
    <div class="col-sm-10">
        <input type="text" id="form-field-2" placeholder="question" class="form-control" name="question" required="" />
       
    </div>
</div>

 
    
    <div class="col-md-6">

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Option 1 </label>
    <div class="col-sm-9">
        <input type="text" id="form-field-2" placeholder="Option" class="form-control" name="option[]" required="" />
       
    </div>
</div>

    
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Option 2 </label>
    <div class="col-sm-9">
        <input type="text" id="form-field-2" placeholder="Option" class="form-control" name="option[]" required="" />
       
    </div>
</div>

</div>
    <div class="col-md-6">
    
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Option 3 </label>
    <div class="col-sm-9">
        <input type="text" id="form-field-2" placeholder="Option" class="form-control" name="option[]" required="" />
       
    </div>
</div>

    
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Option 4 </label>
    <div class="col-sm-9">
        <input type="text" id="form-field-2" placeholder="Option" class="form-control" name="option[]" required="" />
       
    </div>
</div>

 

</div>
    
<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right" for="form-field-2">Right Answer</label>
    <div class="col-sm-10">
        <input type="text" id="form-field-2" placeholder="Right Answer" class="form-control" name="answer" required="" />
       
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right" for="form-field-2">Note : </label>
    <div class="col-sm-10">
        <input type="text" id="form-field-2" placeholder=" Note " class="form-control" name="note"   />
       
    </div>
</div>

<div class="space-4"></div>
<div class="clearfix form-actions">
    <div class="col-md-offset-3 col-md-9">
        <button class="btn btn-info" type="submit">
            <i class="ace-icon fa fa-check bigger-110"></i>
            Submit
        </button>

        &nbsp; &nbsp; &nbsp;
        <button class="btn" type="reset">
            <i class="ace-icon fa fa-undo bigger-110"></i>
            Reset
        </button>
    </div>
</div>

<div class="hr hr-24"></div>

 
</form>

 <!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
</div>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#addform').on('submit',function(e){
            alert('yes');
            e.preventDefault();
            $.ajax({
                type:"POST",
                url:"/questions",
                data:$('#addform').serialize(),
        success:function(response){
        console.log(response)
    
            $('.alert-success').show()
                },
                error:function(response){
                    console.log(response)
                     if(response.status==422){
 $.each(response.responseJSON.errors, function (key, item)
          {
            $(".alert-danger").append("<li>"+item+"</li>")
          });

        $('.alert-danger').show()
         }else{
        $('.alert-danger').text(response.responseJSON.error)
        $('.alert-danger').show()
                     }
           
                }
            });
        });
    });
</script>



@endsection