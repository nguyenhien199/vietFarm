<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'url'          => [
                                'required',
                                Rule::unique('news', 'url')->ignore($this->news),
                                ],
            'image'        => 'max:2048|mimes:jpg,jpeg,bmp,png',
            'description'  => 'required|max:'. MAX_DESCRIPTION,
            'content'      => 'required',
            'status'       => 'required',
        ];
    }
}
