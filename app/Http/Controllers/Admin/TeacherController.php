<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserStoreRequest;
use App\Http\Requests\Admin\UserUpdateRequest;
use App\Models\Role;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function index(){
        $teachers = Teacher::with('user')->orderBy('id','desc')->paginate('12');
        return view('admin.teacher.index',compact('teachers'));
        
    }
            
            public function edit(Teacher $teacher){

                $roles = Role::where('name','!=','student')->pluck('name','id')->toArray();
                return view('admin.teacher.edit',compact('teacher','roles'));
            }

            public function update(Teacher $teacher,UserUpdateRequest $request){
                $data=$request->validated();
                $teacher->update($data);
                    
                return redirect()->route('teacher.index')->with('success', 'Your Profile Updated!');
                    }

            public function show(Teacher $teacher){
                return view('admin.teacher.show',compact('teacher'));
            }

            public function delete(Teacher $teacher){
                return view('admin.teacher.delete',compact('teacher'));
            }
            
            public function destroy(Teacher $teacher){
                $teacher->delete();
                return redirect()->route('teacher.index')->with('success', 'Teacher details has been deleted successfuly!');
            }
    }