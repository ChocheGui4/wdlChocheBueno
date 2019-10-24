<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyCreate extends FormRequest
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
            'telephone1' =>'required|min:12|max:12|regex:/[0-9]$/|unique:contact_companies',
            'telephone2' =>'required|min:12|max:12|regex:/[0-9]$/',
            'email' => 'required|email|max:45|unique:users',
            'email2' => 'required|email|max:45',
            'password' => 'required|min:8|max:45|regex: /^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,45}$/|confirmed',
            'area' =>'required',
            'companyname' =>'required|min:3|max:50',
            'companyrfc' =>'required|min:13|max:13',
            'companytelephone1' =>'required|min:10|max:12|regex:/[0-9]$/|unique:companies',
            'companytelephone2' =>'required|min:10|max:12|regex:/[0-9]$/',
            'companyemail1' =>'required|email|max:45|unique:companies',
            'companyemail2' =>'required|email|max:45',
            'zipcode' =>'required|min:5|max:5|regex:/[0-9]$/',
            'district' =>'required|min:3|max:35|regex:/[A-Za-z]$/',
            'street' =>'required|min:3|max:35|regex:/[A-Za-z]$/',
            'extnumber' =>'required|min:1|max:4|regex:/[0-9]$/',
            'innumber' =>'required|min:1|max:4|regex:/[0-9]$/'
        ];
    }
}
