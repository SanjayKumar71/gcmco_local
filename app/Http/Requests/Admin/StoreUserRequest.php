<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'first_name'     => 'required|alpha',
            'last_name'      => 'nullable|alpha',
            'email'          => 'required|email:strict,filter|unique:users|max:128',
            'contact_number' => 'required|numeric',
            'status'         => 'required',
            'password'       => 'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!@$*#%_]).*$/'
        ];
    }
}
