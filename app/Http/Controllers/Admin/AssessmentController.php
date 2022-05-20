<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AssessmentStoreRequest;
use App\Http\Requests\Admin\AssessmentUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Assessment;
use App\Models\Role;
use App\Models\User;
use App\Models\Subject;


class AssessmentController extends Controller
{
    public function index(){
        $subjects=Subject::pluck('subject','id')->toArray();
        //$grades=Subject::pluck('grade','id',)->toArray();
       // $sections=Subject::pluck('section','id')->toArray();
          $assessments = Assessment::orderBy('id','desc')->paginate('12');
          return view('admin.assessment.index',compact('assessments','subjects'));
       }
           
  
  public function create(){
     
      $indexs=Student::with('exam')->pluck('index_no','index_no')->toArray();
     
      return view('admin.exam.create',compact('indexs'));
  }
  
  
  
  public function dropdown(Request $request){
     
     $assessment=new Assessment();
     
          $assessment->type=$request->term;
          $assessment->subject_id=$request->subject;
          $assessment->grade=$request->grade;
          $assessment->section=$request->section;
          $assessment->save();
  
  return   response()->json(['success'=>'data added']);
  }
  
    
public function edit(){
return view('admin.assessment.edit');
}
public function update(){
    return view('admin.assessment.edit');
    }
    public function delete(){
        return view('admin.assessment.delete');
        }
}

