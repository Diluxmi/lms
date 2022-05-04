<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserStoreRequest;
use App\Http\Requests\Admin\UserUpdateRequest;
use App\Models\Role;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function gindex(){
            $grades= Student::all()->pluck('grade_section','grade_section')->toArray();
             return view('admin.student.gindex',compact('grades'));
        
        
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
        $students = Student::with('user')->where('grade',$number)->where('section',$section)->orderBy('id','desc')->paginate('12');
        return view('admin.student.sindex',compact('students'));
     }

    public function create(){
        $students= Student::with('user')->orderBy('id','desc')->paginate('12');
        return view('admin.student.create',compact('students'));

    }
    public function store (UserStoreRequest $request){
        
    $data = $request->validated();
    
    $student= Student :: create([
        'title'=>$data['title'],
        'firstname'=>$data['firstname'],
        'lastname'=>$data['lastname'],
        'grade'=>$data['grade'],
        'section'=>$data['section'],
        'phonenumber'=>$data['phonenumber'],
        'address'=>$data['address'],
        'index_no'=>$data['index_no'],
      
    

    ]);
    User :: create ([
        'student_id'=>$student->id,
         'email'=>$data['email'],
         'role_id'=> 3,
         'password'=>Hash :: make($data['password']),

     ]);
     $grade_section = $student->grade.$student->section;
     
     return redirect()->route('student.sindex',$grade_section)->with('success','Student create succesfuly');
}

public function show(Student $student){
    return view('admin.student.show',compact('student')); 

} 

public function edit(Student $student){
    $students= Student::with('user')->orderBy('id','desc')->paginate('12');
    
    return view('admin.student.edit',compact('students')); 
}

public function update(UserUpdateRequest $request,Student $student){
    $grade_section =$student->grade.$student->section;
    $data=$request->validated();
    $student->update($data);
        
            return redirect()->route('student.sindex', $grade_section)->with('success', 'Your Profile Updated!');
        }

public function delete(Student $student){
    return view('admin.student.delete',compact('student'));
}

public function destroy(Student $student){
    $grade_section =$student->grade.$student->section;

    $student->delete();

    return redirect()->route('student.sindex', $grade_section)->with('success', 'Student details has been deleted successfuly!');
}

}