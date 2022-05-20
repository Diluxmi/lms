<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $student=$this->student->user;
       $teacher=$this->teacher->user;
        
        $user=$this->user;
        $rule = [];
    

            if($type =$this->input('role_id')){
            switch($type){

            case 1:
        $rule =[
            'email' => ['required', 'email', Rule::unique('users')->ignore($user)],
            'role_id' => 'required',
            'password' => 'nullable | confirmed | string | min:8',

        ];
        break;
        case 2:
            $rule =[
                'role_id'=>'required',
                'title'=>'required',
                'firstname' =>'required',
                'lastname' =>'required',
                'address' =>'required',
                'password' => 'nullable | confirmed | string | min:8',
                'phonenumber' =>'required',
                'email' => ['required', 'email', Rule::unique('users')->ignore($teacher)],
                'grade' => 'required',
                'section'=>'required',
                'qualification' => 'required',
                'experience' => 'required',
                'appointmentyear' => 'required',
            ];
            break;
        }
        return $rule;
        
    }else if(Auth::user()->role->name=='Student'){
            return [
                        
                'title'=>'required',
                'firstname' =>'required',
                'lastname' =>'required',
                'address' =>'required',
                'password' => 'required | confirmed | string | min:8',
                'phonenumber' =>'required',
                'email' => ['required', 'email', Rule::unique('users')->ignore($student)],
                'grade' => 'required',
                'section'=>'required',
                'index_no' => 'required|unique:students',
               
            ];
        }

}
}