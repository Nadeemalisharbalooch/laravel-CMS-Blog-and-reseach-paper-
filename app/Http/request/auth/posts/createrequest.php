<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            
                'title'=>['required','string'],
                'description'=>['required','string','max:300'],
                'status'=>['required'] ,
                'category'=>['required'],
                'tags'=>['required','array'],
                'tags*'=>['required','string']  
           
        ];
    }
}