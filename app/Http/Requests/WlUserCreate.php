<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WlUserCreate extends FormRequest
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
            'area' =>'required',
            'email' => 'required|email|max:45|unique:users',
            'password' => 'required|min:8|max:45|regex: /^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,45}$/|confirmed'
        ];
    }
}
