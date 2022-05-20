<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ExamStoreRequest;
use App\Http\Requests\Admin\ExamUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Examresult;
use App\Models\Role;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;
class ExamController extends Controller
{
    public function index(){
      $subjects=Subject::pluck('subject','id')->toArray();
      $exams = Exam::orderBy('id','desc')->paginate('12');
     
        return view('admin.exam.index',compact('exams','subjects'));
     }
         
public function sindex($grade_section = null){
    if(empty($grade_section)){
        $grade=request()->get('grade_section');
    }else{
        $grade=$grade_section;
    }

        switch(strlen($grade)){

             case 2:
            $number =substr($grade,0,1);
            $section=substr($grade,1,1);
           
        break;
        
        case 3:
            $number=substr($grade,0,2);
            $section=substr($grade,3,1);
        break;
    }
    $indexs= Student::with('user')->where('grade',$number)->where('section',$section)->pluck('index_no','id')->toArray();
    $marks= Examresult::pluck('marks','id')->toArray();
    
    return view('admin.exam.sindex',compact('indexs','marks'));
}


public function create(){
    $indexs= Student::pluck('index_no','id')->toArray();
    $marks= Examresult::pluck('marks','id')->toArray();
    return view('admin.exam.create',compact('indexs','marks'));
}



public function dropdown(Request $request){
   
   $exam=new Exam();
   
        $exam->type=$request->term;
        $exam->subject_id=$request->subject;
        $exam->grade=$request->grade;
        $exam->section=$request->section;
        
        $exam->save();



       
return   response()->json(['success'=>'data added']);
}
        public function edit(Exam $exam){
        return view('admin.exam.edit');
        }
        public function update(Exam $exam){
            return view('admin.exam.edit');
            }
    public function delete(Exam $exam){
        return view('admin.exam.delete');
        }
}