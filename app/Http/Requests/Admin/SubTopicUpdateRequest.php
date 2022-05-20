<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class SubTopicUpdateRequest extends FormRequest
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
        $subtopic=$this->subtopic;
         return [
                        
            'subtopicname' => 'required',
            'content' => 'required',
            'filename'=>'nullable',
            'actual_filename'=>'nullable',
                
               
            ];
        }

}
