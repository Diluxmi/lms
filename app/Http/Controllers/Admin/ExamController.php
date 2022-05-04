<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ExamStoreRequest;
use App\Http\Requests\Admin\ExamUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Role;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
class ExamController extends Controller
{
    public function sindex(){
      
        $exams = Exam::with('student')->orderBy('id','desc')->paginate('12');
        return view('admin.exam.sindex',compact('exams'));
     }
         

public function create(){
   
    $indexs=Student::with('exam')->pluck('index_no','index_no')->toArray();
   
    return view('admin.exam.create',compact('indexs'));
}



public function dropdown(Request $request){
$subjects= Subject::where("subject_id",$request->subject)->get();
return response()->json($subjects);
}

public function store(ExamStoreRequest $request){
        
    $data = $request->validated();
    
    Exam :: create ([
        'type'=>$data['type'],
        'subject'=>$data['subject'],
        'result'=>$data['result'],
    ]);

    Student::create([
        'grade'=>$data['grade'],
        'section'=>$data['section'],
        'index_no'=>$data['index_no'],
    ]);
    
    return redirect()->route('exam.sindex')->with(' success','Exam result create succesfull');
}

public function edit(){
return view('admin.exam.edit');
}
public function update(){
    return view('admin.exam.edit');
    }
    public function delete(){
        return view('admin.exam.delete');
        }
}