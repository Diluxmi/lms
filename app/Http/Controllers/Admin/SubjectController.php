<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubjectStoreRequest;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
class SubjectController extends Controller

{

    public function index(){
       
        $subjects= Subject::orderBy('id', 'desc')->paginate('12');
        $roles = Role::where('name','!=','student')->pluck('name','id')->toArray();
        return view('admin.subject.index',compact('subjects','roles'));
     
    }

    public function create(){
        $subjects= Subject::orderBy('id', 'desc')->paginate('12');
        $roles = Role::where('name','==','teacher')->pluck('name','id')->toArray();
        
        return view('admin.subject.create',compact('subjects','roles'));
    }

    public function store (SubjectStoreRequest $request){
        
        $data = $request->validated();
        $created_by = Auth::user()->teacher->id; 
        $subject= Subject :: create([
            'subject'=>$data['subject'],
            'grade'=>$data['grade'],
            'section'=>$data['section'],
           'created_by'=>$created_by,
        ]);
 return redirect()->route('subject.index')->with('success','Subject create succesfuly!');
         
    }
    public function edit(){
        $subjects= Subject::orderBy('id', 'desc')->paginate('12');
        return view('admin.subject.edit',compact('subjects'));
    }
    
    public function delete(){
        $subjects= Subject::orderBy('id', 'desc')->paginate('12');
        return view('admin.subject.delete',compact('subjects'));
    }
}
