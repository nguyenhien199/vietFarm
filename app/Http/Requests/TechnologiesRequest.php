<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TechnologiesRequest extends FormRequest
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
        if(!isset($this->id)){
            return [
                'name'        => 'required',
                'category_id' => 'required',
                'url'          => 'required|unique:technologies',
                'image'        => 'max:2048|mimes:jpg,jpeg,bmp,png',
                'description'  => 'required|max:'. MAX_DESCRIPTION,
                'content'      => 'required',
                'status'       => 'required',
            ];
        }else
            return [
                'name'        => 'required',
                'category_id' => 'required',
                'url'          => [
                    'required',
                    Rule::unique('technologies', 'url')->ignore($this->id),
                ],
                'image'        => 'max:2048|mimes:jpg,jpeg,bmp,png',
                'description'  => 'required|max:'. MAX_DESCRIPTION,
                'content'      => 'required',
                'status'       => 'required',
            ];
    }
}
