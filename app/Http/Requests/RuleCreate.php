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
            'name' => 'required|min:3|max:25|regex:/^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/',
            'lastname' => 'required|min:3|max:35|regex:/^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/',
            'telephone' =>'required|min:8|max:10',
            'email' => 'required|regex:/^[^@]+@[^@]+\.[a-zA-Z]{3,}$/|min:3|max:45',
            'password' => 'required|min:8|max:45|regex: /^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,45}$/',
            'rfc' =>'min:10|max:13',
            'kind' =>'required',
            'area' =>'required|max:30',
            'companyname' =>'required|min:3|max:50',
            'companyrfc' =>'required|min:12|max:13',
            'companytelephone' =>'required|min:8|max:12',
            'companyemail' =>'required|regex:/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/|max:45',
            'zipcode' =>'required|min:5|max:5',
            'district' =>'required|min:3|max:35',
            'street' =>'required|min:3|max:35',
            'extnumber' =>'required|min:1|max:5',
            'innumber' =>'required|min:1|max:5'
        ];
    }
}
