<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AssessmentStoreRequest;
use App\Http\Requests\Admin\AssessmentUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Assessment;
use App\Models\Role;
use App\Models\User;
use App\Models\Student;


class AssessmentController extends Controller
{
    
    public function index(){
      
        $assessments = Assessment::with('student')->orderBy('id','desc')->paginate('12');
        return view('admin.assessment.index',compact('assessments'));
     }
         

public function create(){
   
    $indexs=Student::with('assessment')->pluck('index_no','index_no')->toArray();
    return view('admin.assessment.create',compact('indexs'));
}

public function store(AssessmentStoreRequest $request){
        
    $data = $request->validated();
    
    Assessment :: create ([
        'type'=>$data['type'],
        'subject'=>$data['subject'],
        'result'=>$data['result'],
    ]);

    Student::create([
        'grade'=>$data['grade'],
        'section'=>$data['section'],
        'index_no'=>$data['index_no'],
    ]);
    
    return redirect()->route('assessment.index')->with(' success','Assessment result create succesfull');
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

