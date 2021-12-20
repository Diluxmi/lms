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
    public function index(){
        $students = Student::with('user')->orderBy('id','desc')->paginate('12');
        return view('admin.student.index',compact('students'));
        
        
    }
    public function create(){
        $students= Student::with('user')->orderBy('id','desc')->paginate('12');
        return view('admin.student.create',compact('students'));

    }
    public function store(UserStoreRequest $request){
    $data = $request->validated();

    $students= Student :: create([
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
        'student_id'=>$students->id,
         'email'=>$data['email'],
         'role_id'=> 3,
         'password'=>Hash :: make($data['password']),

     ]);

     return redirect()->route('student.index')->with('success','user create succesfull');
}
public function show(Student $student){
    return view('admin.student.show',compact('student')); 

}   
public function edit(Student $student){
    return view('admin.student.edit',compact('student')); 
}
public function update(Student $student,UserUpdateRequest $request){
    $data=$request->validated();
    $student->update($data);
        
            return redirect()->route('dashboard')->with('success', 'Your Profile Updated!');
        }
public function delete(Student $student){
       
    return view('admin.student.delete',compact('student'));
}
public function destroy(Student $student){
    $student->delete();
    return redirect()->route('student.index')->with('success', 'Student details has been deleted successfuly!');
}

}