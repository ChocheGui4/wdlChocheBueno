<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerCreate extends FormRequest
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
            'name' => 'required|min:3|max:25|regex:/^((([A-ZÑÁÉÍÓÚ]{3,})+[\s]*)+){1,}$/',
            'lastname' => 'required|min:3|max:35|regex:/^((([A-ZÑÁÉÍÓÚ]{3,})+[\s]*)+){1,}$/',
            'telephone1' =>'required|min:12|max:12|regex:/[0-9]$/|unique:people',
            'telephone2' =>'required|min:12|max:12|regex:/[0-9]$/',
            'email' => 'required|email|max:45|unique:users',
            'email2' => 'required|email|max:45',
            'password' => 'required|min:8|max:45|regex: /^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,45}$/|confirmed',
            'rfc' =>'min:12|max:13|unique:people',
            'zipcode' =>'required|min:5|max:5|regex:/[0-9]$/',
            'district' =>'required|min:3|max:35|regex:/[A-Za-z]$/',
            'street' =>'required|min:3|max:35|regex:/[A-Za-z]$/',
            'extnumber' =>'required|min:1|max:5|regex:/[0-9]$/',
            'innumber' =>'required|min:1|max:5|regex:/[0-9]$/'
        ];
    }
}
