<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddSpecific extends FormRequest
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
            'name' =>'required',
            'maker' =>'required',
            'processor' =>'required',
            'memory' =>'required',
            'disc' =>'required',
            'storagem' =>'required',
            'storage' =>'required',
            'numberstorage' =>'required',            
            'year' =>'required',
            'numberuser' =>'required',
            'offer' =>'required'
        ];
    }
}
