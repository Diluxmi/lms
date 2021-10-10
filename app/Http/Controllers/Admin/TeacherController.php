<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TeacherStoreRequest;
use App\Http\Requests\Admin\TeacherUpdateRequest;
use App\Models\Role;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function index(){
        $teachers= Teacher::with('role')->orderBy('id','desc')->paginate('12');
        return view('admin.teacher.index', compact('teachers'));
        
    }
               public function create(){
                return view('admin.teacher.create');
            }
        
            public function store(TeacherStoreRequest $request){
                $data = $request->validated();

                Teacher :: create([
                  'name'=>$data ['name'], 
                  'email'=>$data['email'],
                  'grade_id'=>$data['grade_id'],

                ]);
                return redirect()->route('teacher.index')->with('success', 'Teacher has been created successfuly!');
            }
            public function edit(){
                return view('admin.teacher.edit');
            }
            public function delete(){
                return view('admin.teacher.delete');
            }
            public function show(){
                return view('admin.teacher.show');
            }
    }