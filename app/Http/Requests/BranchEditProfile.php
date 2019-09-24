<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BranchEditProfile extends FormRequest
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
            'telephone1' =>'required|min:12|max:12|regex:/[0-9]$/',
            'telephone2' =>'required|min:12|max:12|regex:/[0-9]$/',
            'email' =>'required|email|max:45',
            'email2' =>'required|email|max:45',
            'area' =>'required',
        ];
    }
}
