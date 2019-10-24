<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BranchCreate extends FormRequest
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
            'telephone1' =>'required|min:12|max:12|regex:/[0-9]$/|unique:contact_branches',
            'telephone2' =>'required|min:12|max:12|regex:/[0-9]$/',
            'email' => 'required|email|max:45|unique:contact_branches',
            'email2' => 'required|email|max:45',
            'area' =>'required',
            'branchname' =>'required|min:3|max:50|unique:branches',
            'branchtelephone1' =>'required|min:12|max:12|regex:/[0-9]$/|unique:branches',
            'branchtelephone2' =>'required|min:12|max:12|regex:/[0-9]$/',
            'branchemail1' => 'required|email|max:45|unique:branches',
            'branchemail2' => 'required|email|max:45',
            'zipcode' =>'required|min:5|max:5|regex:/[0-9]$/',
            'district' =>'required|min:3|max:35|regex:/[A-Za-z]$/',
            'street' =>'required|min:3|max:35|regex:/[A-Za-z]$/',
            'extnumber' =>'required|min:1|max:5|regex:/[0-9]$/',
            'innumber' =>'required|min:1|max:5|regex:/[0-9]$/'
        ];
    }
}
