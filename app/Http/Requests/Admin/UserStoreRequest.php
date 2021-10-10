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
        if($type =$this->input('type')){
            switch($type){
                case 'Admin';
                $rule =[
                    'name' =>'required',
                    'email' => 'required|email|unique:users',
                    'role_id' => 'required',
                    'password' => 'required | confirmed | string | min:8',
                ];
                break;
                case 'teacher';
                $rule =[
                    'name' =>'required',
                    'email' => 'required|email|unique:users',
                    'grade_id' => 'required',
                    'qualification' => 'required',
                ];
                break;
               
 
            }
        
         return $rule;
        }
    }
                  

}