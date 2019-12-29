<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Auth extends FormRequest
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
            'name'=>'required|string|max:30|min:3',
            'email'=> 'required|email|max:40|min:10',
            'password'=> 'required|string|max:20|min:6',
            // 'c_password' => 'required|same:password',
            'cnic'=> 'required|string|max:16|min:16',
            'phone_no' => 'required|string|max:14|min:2',
            'country'=> 'required|string|max:5|min:2',
        ];
    }
}
