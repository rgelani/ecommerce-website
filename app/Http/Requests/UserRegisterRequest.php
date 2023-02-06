<?php

namespace App\Http\Requests;

use App\Rules\OnlyGmail;
use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'unique:users', 'max:255', new OnlyGmail],
            'phone_no' => ['required', 'unique:users','digits:10', 'numeric'],
            'password' => 'required|min:5|max:30',
            'confirm_password' => 'required|min:5|max:30|same:password',
        ];
    }
}
