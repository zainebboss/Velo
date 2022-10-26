<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class EventRequest extends FormRequest
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
            'nameevent' => 'required',
            
            'telResponsable' => 'required|regex:/[0-8]{8}/',
            'dateDebutEvent'=> 'required|date|after:tomorrow',
            'ville' => 'required',
            'pays'=>  'required',
            'dateFinEvent' =>  ['date', 'after:dateDebutEvent'],
            'timeevent'=>  'required',
       

          
            
         
          
           
        ];
    }

    public function messages()
    {
        return [
            'nameevent.required' => 'The event name is required',
            'pays.required' => 'The event pays is required',
        ];
    }
}
