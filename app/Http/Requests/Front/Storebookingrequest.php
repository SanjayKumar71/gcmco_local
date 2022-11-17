<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class Storebookingrequest extends FormRequest
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
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|integer',
            'date' => 'required|string',
            'time' => 'required|string',
            'concern' => 'required|string',
        ];
    }
}
