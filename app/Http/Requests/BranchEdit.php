<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BranchEdit extends FormRequest
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
            'branchname' =>'required|min:3|max:50',
            'branchtelephone1' =>'required|min:12|max:12|regex:/[0-9]$/',
            'branchtelephone2' =>'required|min:12|max:12|regex:/[0-9]$/',
            'branchemail1' =>'required|email|max:45',
            'branchemail2' =>'required|email|max:45',
            'branchimg' =>'image|max:3072',
        ];
    }
}
