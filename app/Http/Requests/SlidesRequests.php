<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SlidesRequests extends FormRequest
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
        if($this->remove_image == 0){
            return [
                'title'        => 'required',
                'content'      => 'required|max:'. MAX_DESCRIPTION,
                'status'       => 'required',
            ];
        }else{
            return [
                'title'        => 'required',
                'image'        => 'required|max:2048|mimes:jpg,jpeg,bmp,png',
                'content'      => 'required|max:'. MAX_DESCRIPTION,
                'status'       => 'required',
            ];
        }
        
    }
}
