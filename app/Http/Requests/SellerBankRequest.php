<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellerBankRequest extends FormRequest
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
//        return [
//            'bank_name' => 'required',
//            'bank_account_number' => 'required',
//            'confirm_bank_account_number' => 'required',
//            'ifsc_code' => 'required',
//            'cancel_cheque' => 'required',
//        ];
    }
}
