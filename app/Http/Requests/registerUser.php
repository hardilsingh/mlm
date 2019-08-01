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
            'email'=>'required',
            'vid'=>'required|max:5',
            'ph'=>'required|max:10|min:10',
            'street'=>'required',
            'city_id'=>'required',
            'state_id'=>'required',
            'country_id'=>'required',
            'side'=>'required',
            'addhar_number'=>'required|min:12|max:12',
            'pan_number'=>'required',
            'path'=>'required|image|mimes:jpeg,png,jpg|max:2048'
        ];
    }
}
