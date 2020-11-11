<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UsersRequests extends FormRequest
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
                'name'              => 'required',
                'email'             => 'required|email|unique:users',
                'password'          => 'required|min:6',
                'current_password'  => 'required|same:password',
                'role'              => 'required',
            ];
        }else {
            $rules = [
                'name' => 'required',
                'email' => [
                    'required',
                    'email',
                    Rule::unique('users')->ignore($this->id),
                ],
                'role' => 'required',
            ];
            if(!empty($this->password)){
                $rules['password'] = 'min:6';
                $rules['current_password'] = 'required|same:password';
            }
            return $rules;
        }
        
    }
}
