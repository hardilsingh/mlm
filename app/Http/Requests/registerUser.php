<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerUser extends FormRequest
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
            //

            'name'=>'required',
            'email'=>'required|unique:users',
            'vid'=>'required',
            'ph'=>'required|max:10|min:10',
            'street'=>'required',
            'city'=>'required',
            'state_id'=>'required',
            'country_id'=>'required',
            'side'=>'required',
            'pan_number'=>'required',
            'path_3'=>'required|image|mimes:jpeg,png,jpg|max:2048',
            'profile_path'=>'required|image|mimes:jpeg,png,jpg|max:2048',
            'created_by',
            'dob',
            'gender',
            'account',
            'ifsc_code',
        ];
    }
}
