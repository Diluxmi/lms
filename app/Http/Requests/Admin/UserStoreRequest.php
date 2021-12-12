<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
        $rule = [];
        if($type =$this->input('role_id')){
          
            switch($type){
                case 1:
                $rule =[
                   
                    'email' => 'required|email|unique:users',
                    'role_id' => 'required',
                    'password' => 'required | confirmed | string | min:8',
                ];
                break;
                case 2:
                $rule =[
                    'role_id'=>'required',
                    'title'=>'required',
                    'firstname' =>'required',
                    'lastname' =>'required',
                    'address' =>'required',
                    'password' => 'required | confirmed | string | min:8',
                    'phonenumber' =>'required',
                    'email' => 'required|email|unique:users',
                    'grade' => 'required',
                    'section'=>'required',
                    'qualification' => 'required',
                    'experience' => 'required',
                    'appointmentyear' => 'required',
                ];
                break;
            }
        
         return $rule;
        }
        else if($index_no =$this->input('index_no')){
            return [
                        
                'title'=>'required',
                'firstname' =>'required',
                'lastname' =>'required',
                'address' =>'required',
                'password' => 'required | confirmed | string | min:8',
                'phonenumber' =>'required',
                'email' => 'required|email|unique:users',
                'grade' => 'required',
                'section'=>'required',
                'index_no' => 'required|unique:students',
               
            ];
        }
        else{
        return[
                'role_id'=>'required',
                'index_no' => 'required',
];
        }
    }
                  

}