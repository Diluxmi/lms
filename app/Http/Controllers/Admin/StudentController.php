<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StudentStoreRequest;
use App\Http\Requests\Admin\StudentUpdateRequest;
use App\Models\Role;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index(){
        $students= Student::with('role')->orderBy('id','desc')->paginate('12');
        return view('admin.student.index',compact('students'));
        
    }
               public function create(){
                return view('admin.student.create');
            }
        
            public function store(){
                return redirect()->route('student.index')->with('success', 'Student has been created successfuly!');
            }
            public function edit(){
                return view('admin.student.edit');
            }
            public function delete(){
                return view('admin.student.delete');
            }
            public function show(){
                return view('admin.student.show');
            }
    }