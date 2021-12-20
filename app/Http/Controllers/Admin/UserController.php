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

class UserController extends Controller
{
    public function index(){
        
        $users = User::where('role_id', '1')->with('role')->orderBy('id','desc')->paginate('12');
        return view('admin.user.index',compact('users'));
    }

    public function create(){
        $roles = Role::where('name','!=','student')->pluck('name','id')->toArray();
       $roles['']= '---Choose your role---';
        return view('admin.user.create',compact('roles'));
    }

    public function store(UserStoreRequest $request){
        
        $data = $request->validated();
        if($data['role_id']==1){
        User :: create ([
           
            'email'=>$data['email'],
            'role_id'=>$data['role_id'],
            'password'=>Hash :: make($data['password']),

        ]);
        return redirect()->route('user.index')->with(' success','user create succesfull');
    }else{
      
        $teacher=Teacher :: create([
            'title'=>$data['title'],
            'firstname'=>$data['firstname'],
            'lastname'=>$data['lastname'],
            'address'=>$data['address'],
            'phonenumber'=>$data['phonenumber'],
            'grade'=>$data['grade'],
            'qualification'=>$data['qualification'],
            'experience'=>$data['experience'],
            'appointmentyear'=>$data['appointmentyear'],
           
            
        ]);
        User :: create ([
           'teacher_id'=>$teacher->id,
            'email'=>$data['email'],
            'role_id'=>$data['role_id'],
            'password'=>Hash :: make($data['password']),

        ]);

        
        return redirect()->route('teacher.index')->with('success','user create succesfull');
    }
    
}

    public function edit(User $user){
        $roles = Role::where('name','!=','student')->pluck('name','id')->toArray();

        return view('admin.user.edit',compact('roles','user'));
    }
    public function show(User $user){
    
        return view('admin.user.show',compact('user'));
    }

    public function update(User $user,UserUpdateRequest $request){
        $data=$request->validated();
        if($request->input('password')){
        $data['password'] = Hash::make($request->input('password'));
        }else{$data['password'] = $user->password;}
         $user->update($data);
        
            return redirect()->route('dashboard')->with('success', 'Your Profile Updated!');
        }
    
    
    public function delete(User $user){
        return view('admin.user.delete',compact('user'));
       
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User details has been deleted successfuly!');
    }
}
