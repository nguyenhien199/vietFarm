<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SettingUsersRequests extends FormRequest
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
        if($this->password != null || $this->newPassword){
            return [
                'name'        => 'required',
                'password'    => 'required',
                'newPassword' => 'required|min:6'
            ];
        }else{
            return [
                'name'        => 'required',
            ];
        }

    }
}
