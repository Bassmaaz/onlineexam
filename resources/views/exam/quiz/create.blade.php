@extends('layouts.admin-app')
@section('title','Quiz add')
@section('content')

<div class="page-header">
<h1>
Quiz  Add
<small>
<a href="https://icons8.com/icon/tKvnEzfDG1hI/edit"></a>
<i class="ace-icon fa fa-angle-double-right"></i>
Quiz for front page </small>&nbsp;<a href="/quizes">Quiz  View</a>
</h1>
</div><!-- /.page-header -->
<div class="row">
<div class="col-xs-12">

<form class="form-horizontal" role="form" action="/quizes" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
<div class="space-4"></div>
 
 
<div class="space-4"></div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Quiz Name </label>
    <div class="col-sm-9">
         
     <input type="text" id="form-field-2" placeholder="Quize Name" class="col-xs-10 col-sm-5" name="quiz_name" required="" >
         
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Description</label>
    <div class="col-sm-9">
        <input type="text" id="form-field-2" placeholder="Descriotion" class="col-xs-10 col-sm-5" name="description" required="" />
       
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Quiz Date</label>
    <div class="col-sm-9">
        <input type="date" id="form-field-2" placeholder="quiz date" class="col-xs-10 col-sm-5" name="quiz_date"   />
       
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Quiz Time</label>
    <div class="col-sm-9">
        <input type="text" id="form-field-2" placeholder="00:00"  pattern="[0-9]{2}:[0-9]{2}" class="col-xs-10 col-sm-5" name="quiz_time" required="" title="example 01:00 " />
        <span> exm: 00:00</span>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Status</label>
    <div class="col-sm-9">
        <input type="text" id="form-field-2" placeholder="Are u gonna publish it or no? " class="col-xs-10 col-sm-5" name="status" required="" />
       </div>
    </div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Number Of Question View for User</label>
    <div class="col-sm-9">
        <input type="text" id="form-field-2" placeholder="How many question view for this quiz " class="col-xs-10 col-sm-5" name="number_of_question" required="" />
       
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


<div class="col-md-12">
    {{$quizes->links()}}
    <table class="table table-bordered" id="datatables">
       <thead>
           <tr>
               <th>Sl</th>
               <th>Quiz Name</th>
               <th>Description</th>
               <th>Date</th>
               <th>Time</th>
               <th> Total Qus</th>
               <th>Status</th>
               <th>Add Question</th>
               <th>Details</th>
               <th>Edit</th>
               <th>Delete</th>
           </tr>
       </thead>
       <tbody>
           @foreach($quizes as $key=>$data)
           <tr>
               <td>{{++$key}} </td>
               <td>{{$data->quiz_name}} </td>
               <td>{{$data->description}} </td>
               <td>{{$data->quiz_date}} </td>
               <td>{{$data->quiz_time}} </td>
               <td>{{$data->number_of_question}} </td>
               <td><input type="checkbox" name="status" class="quiz-status" data_id="{{$data->id}}" {{$data->status=='1'?'checked':''}}> </td>
               <td>
               <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
<img src="https://img.icons8.com/bubbles/30/000000/create-new.png"/>Add question
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
      <button type="button"><a href="/quize/addquestion/{{$data->id}}"><img src="https://img.icons8.com/fluent/68/000000/multiple-choice.png"/>Multiple choice</a></button>
        <button type="button"><a href="/quize/addquestionn/{{$data->id}}"><img src="https://img.icons8.com/dusk/68/000000/text.png"/>Free text</a></button>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
</td>
               <td><a href="/quizes/{{$data->id}}"><img src="https://img.icons8.com/fluent/30/000000/view-details--v1.png"/>Details</a></td>
               <td><a href="/quizes/{{$data->id}}/edit"><img src="https://img.icons8.com/color/30/000000/edit--v2.png"/>Edit</a></td>
               <td>
               <form method="POST" action="{{ url('/quizes/'.$data->id) }}">
                  @csrf
                  @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this?')"><img src="https://img.icons8.com/bubbles/30/000000/delete-forever.png"/>Delete</button>
           </tr>
           @endforeach
       </tbody>
    </table>
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
@section('script')


            <script type="text/javascript">
                
                $('#category').on('change',function(e){
                    console.log(e);

                    var categories_id= e.target.value;

                    $.get('/json-catelogs?categories_id=' + categories_id,function(data){
                        console.log(data);

                    $('#catelog').empty();
          $('#catelog').append('<option value="" disable="true" selected="true">Select a Catelog</option>');

          $.each(data, function(index, districtsObj){
            $('#catelog').append('<option value="'+ districtsObj.id +'">'+ districtsObj.catelog +'</option>');
          });
         
                    });
                });
            </script>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#summernote').summernote({
            height:'200px',
            placeholder:'Description',
            toolbar: [
    ['style', ['fontname','bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    ['table', ['table']],
            ['insert', ['link', 'picture', 'video', 'hr', 'readmore']],
            ['genixcms', ['elfinder']],
            ['view', ['fullscreen', 'codeview']],
  ],
         onImageUpload: function(files, editor, welEditable) {
            sendFile(files[0],editor,welEditable);
        }     
        });
    });
</script>
<script type="text/javascript">
function previewImage(event) {
var output = document.getElementById('output');
output.src = URL.createObjectURL(event.target.files[0]);
};
</script>
@endsection

