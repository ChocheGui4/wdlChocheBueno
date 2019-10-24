<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyEditCompanyCreate extends FormRequest
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
            'companyname' =>'required|min:3|max:50',
            'companyrfc' =>'required|min:13|max:13',
            'companytelephone1' =>'required|min:12|max:12|regex:/[0-9]$/',
            'companytelephone2' =>'required|min:12|max:12|regex:/[0-9]$/',
            'companyemail1' =>'required|email|max:45',
            'companyemail2' =>'required|email|max:45',
            'companyimg' =>'image|max:3072',
        ];
    }
}
