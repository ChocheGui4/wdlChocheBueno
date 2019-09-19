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
            'companyrfc' =>'required|min:12|max:13',
            'companytelephone1' =>'required|min:12|max:12',
            'companytelephone2' =>'required|min:12|max:12',
            'companyemail1' =>'required|max:45',
            'companyemail2' =>'required|max:45'
        ];
    }
}
