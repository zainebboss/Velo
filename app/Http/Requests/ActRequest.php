<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class ActRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nameactivitie' => 'required',
            
            'detail' => 'required',
           
          
            
         
          
           
        ];
    }

    public function messages()
    {
        return [
            'nameactivitie.required' => 'The activitie name is required',
            'detail.required' => 'The event detail is required',
        ];
    }
}
