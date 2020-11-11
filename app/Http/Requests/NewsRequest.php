<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{
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
            'title'        => 'required',
            'image'        => 'max:2048|mimes:jpg,jpeg,bmp,png',
            'description'  => 'required|max:2000',
            'content'      => 'required',
            'status'       => 'required',
        ];
    }
}
