<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quizes;
use App\Models\Questions;
use App\Models\Exams;
use App\Models\Results;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Sentinel;
use Illuminate\Support\Arr;

class ExamController extends Controller
{
     public function quizList()
      {
          $quizes=Quizes::orderBy('id','desc')->paginate(30);
          return view('frontend.exam.quiz_list',compact('quizes'));
      }
     /* public function exam($id)
      {
         $quiz=Quizes::where('id',$id)->where('status',1)->first();
   
        $questions=Questions::inRandomOrder()->limit($quiz->number_of_question)->where('quizes_id',$quiz->id)->get();
        return view('frontend.exam.exam',compact('questions','quiz'));
  
       
      }
      public function examPost(Request $request)
      {
        $userId=Auth::id();
        $date=date('Y-m-d');
          $yes=0;
          $no=0;
         $data=$request->all();
         $result=array();
         for($i=1; $i<=$request->index;$i++){
             if(isset($data['questions_id'.$i])){
            if($exam=Exams::where('user_id',$userId)->where('questions_id',$data['questions_id'.$i])->first()){
  
            }else{
              $exam=new Exams;
            }
                 
                 $question=Questions::where('id',$data['questions_id'.$i])->get()->first();
                 if($question->answer==$data['ans'.$i])
                 {
                     $result[$data['questions_id'.$i]]='Yes';
                     $exam->is_ans="yes";
                     $yes++;
                 }else{
                     $result[$data['questions_id'.$i]]='No';
                     $exam->is_ans="No";
                     $no++;
                 }
            $exam->user_id= $userId;
              $exam->quizes_id= $question->quizes_id;
                 $exam->questions_id=$data['questions_id'.$i];
                 $exam->ans=$data['ans'.$i];
  
                 $exam->save();
  
             }
             
         }
  
         if($res=Results::where('user_id',$userId)->where('quizes_id',$request->quizes_id)->first()){
  
         }else{
          $res=new Results;
         }
         $res->user_id= $userId;
         $res->quizes_id= $request->quizes_id;
         $res->date= $date;
         $res->yes_ans=$yes;
         $res->no_ans=$no;
         $res->result_json=json_encode($result);
         $res->save();
  
         return redirect('/MyExamResult')->with('success','Thaks For Join This Exam');
  
      }
  
      public function examResult()
      {
        $userId=Auth::id();
        $results=Results::orderBy('id','desc')->where('user_id',$userId)->paginate(10);
        return view('frontend.exam.result',compact('results'));
      }
       public function ResultDetails($id)
      {
        $userId=Auth::id();
         $exams=Exams::where('user_id', $userId)->where('quizes_id',$id)->get();
         $quiz=Quizes::find($id);
         $questions=Questions::where('quizes_id',$id)->get();
        return view('frontend.exam.resultDetails',compact('exams','quiz','questions'));
      }*/
     /* public function quizList()
      {
          $quizes=Quizes::orderBy('id','desc')->get();
          return view('frontend.exam.quiz_list',compact('quizes'));
      }*/
      public function exam($id)
      {
          $quiz=Quizes::find($id);
          $questions=Questions::inRandomOrder()->limit($quiz->number_of_question)->where('quizes_id',$id)->get();
          return view('frontend.exam.exam',compact('questions','quiz'));
      }
      public function examPost(Request $request)
      {
        $userId=Auth::id();
        $date=date('Y-m-d');
          $yes=0;
          $no=0;
         $data=$request->all();
         $result=array();
         $score=0.0;
         for($i=1; $i<=$request->index;$i++){
             if(isset($data['questions_id'.$i])){
            if($exam=Exams::where('user_id',$userId)->where('questions_id',$data['questions_id'.$i])->first()){
  
            }else{
              $exam=new Exams;
            }
                
                 $question=Questions::where('id',$data['questions_id'.$i])->get()->first();
                 if($question->answer==$data['ans'.$i])
                 {
                     $result[$data['questions_id'.$i]]='Yes';
                     $exam->is_ans="yes";
                     $score+=floatval($question->note);
                     $yes++;
                 }else{
                     $result[$data['questions_id'.$i]]='No';
                     $exam->is_ans="No";
                     $no++;
                 }
            $exam->user_id= $userId;
              $exam->quizes_id= $question->quizes_id;
                 $exam->questions_id=$data['questions_id'.$i];
                 $exam->ans=$data['ans'.$i];
  
                 $exam->save();
  
             }
            
         }
  
         if($res=Results::where('user_id',$userId)->where('quizes_id',$request->quizes_id)->first()){
  
         }else{
          $res=new Results;
         }
        $res->user_id= $userId;
        $res->quizes_id= $request->quizes_id;
        $res->quiz_name= $request->quiz_name;
        $res->date= $date;
         $res->yes_ans=$yes;
         $res->no_ans=$no;
         $res->result_json=json_encode($result);
         $res->score=$score;
         $res->save();
             
         return redirect('/MyExamResult')->with('success','Thaks For Join This Exam');
   
      }
  
      public function examResult()
      {
        $userId=Auth::id();
        $results=Results::orderBy('id','desc')->where('user_id',$userId)->paginate(10);
        return view('frontend.exam.result',compact('results'));
      }
       public function ResultDetails($id)
      {
        $userId=Auth::id();
         $exams=Exams::where('user_id', $userId)->where('quizes_id',$id)->get();
         $quiz=Quizes::find($id);
         $questions=Questions::where('quizes_id',$id)->get();
        return view('frontend.exam.resultDetails',compact('exams','quiz','questions'));
      }
}
