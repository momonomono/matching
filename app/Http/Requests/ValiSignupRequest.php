<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValiSignupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this -> path() == "signup"){

            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required | email | string | max:255',
            'password' => 'required | string | max:255 | min:5 | confirmed'
        ];
    }
}
