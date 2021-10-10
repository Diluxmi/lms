<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserStoreRequest;
use App\Http\Requests\Admin\UserUpdateRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::with('role')->orderBy('id','desc')->paginate('12');
        return view('admin.user.index',compact('users'));
    }

    public function create(){
        $roles = Role::where('name','!=','student')->pluck('name','id')->toArray();
       $roles['']= 'Choose your role';
        return view('admin.user.create',compact('roles'));
    }

    public function store(UserStoreRequest $request){
        $data = $request->validated();
        
        User :: create ([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'role_id'=>$data['role_id'],
            'password'=>Hash :: make($data['password']),

        ]);
        return redirect()->route('user.index')->with('user create succesfull');
    }
    public function edit(){
        return view('admin.user.edit');
    }
    public function delete(){
        return view('admin.user.delete');
    }
    public function show(){
        return view('admin.user.show');
    }
}
