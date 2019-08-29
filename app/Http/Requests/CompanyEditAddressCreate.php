<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyEditAddressCreate extends FormRequest
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
            'zipcode' =>'required|min:5|max:5|regex:/[0-9]$/',
            'district' =>'required|min:3|max:35|regex:/[A-Za-z]$/',
            'street' =>'required|min:3|max:35|regex:/[A-Za-z]$/',
            'extnumber' =>'required|min:1|max:5|regex:/[0-9]$/',
            'innumber' =>'required|min:1|max:5|regex:/[0-9]$/'
        ];
    }
}
