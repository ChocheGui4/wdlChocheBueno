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
            'lastname' => 'required|min:3|max:40|regex:/^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/',
            'telephone' =>'required|min:8|max:10',
            'email' => 'required|regex:/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/',
            'password' => 'required|min:8|max:20|regex: /^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$/',
            'rfc' =>'min:10|max:13',
            'area' =>'required',
            'companyname' =>'required|min:5|max:45',
            'companyrfc' =>'required|min:10|max:13',
            'telephonec' =>'required|min:8|max:10',
            'companyemail' =>'required|regex:/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/',
            'zipcode' =>'required|min:5|max:6',
            'district' =>'required|min:10|max:45',
            'street' =>'required|min:10|max:45',
            'extnumber' =>'required|min:1|max:5',
            'inumber' =>'required|min:1|max:5'
        ];
    }
}
