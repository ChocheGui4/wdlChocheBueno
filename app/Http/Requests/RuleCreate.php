<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleCreate extends FormRequest
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
        return [
            'name' => 'required|min:3|max:30|regex:/^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/',
            'apellidos' => 'required|min:3|max:40|regex:/^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/',
            'telephone' =>'required|min:8|max:10',
            'eemail' => 'required|regex:/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/',
            'ppassword' => 'required|string|max:20',
            
            'rfc' =>'required|min:10|max:13',
            'companyname' =>'required|min:5|max:45|regex:/^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/',
            'companyrfc' =>'required|min:10|max:13',
            'companyemail' =>'required|regex:/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/',
            'zipcode' =>'required|min:5|max:6',
            'district' =>'required|min:10|max:45',
            'street' =>'required|min:10|max:45',
            'enumber' =>'required|min:1|max:5',
            'inumber' =>'required|min:1|max:5'
        ];
    }
}
