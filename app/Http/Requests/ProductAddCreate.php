<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddCreate extends FormRequest
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
            'name' =>'required|min:3|max:60',
            'description' =>'required|min:10|max:255',
            'time' =>'required|regex:/^[+]?([0-9]){1,4}$/',
            'period' =>'required',
            'users' =>'required|regex:/^[+]?([0-9]){1,4}$/',
            'storage' =>'required|regex:/^[+]?([0-9]){1,4}$/',
            'unitstorage' =>'required',
        ];
    }
}
