<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SuccessStoreRequest extends FormRequest
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
            'title'   => 'required|max:100',
            'slug'    => 'required|unique:success_stories|max:100',
            'heading'   => 'required|max:100',
            'image' => 'required|image|mimes:jpg,png,jpeg',
            'description'   => 'required',
        ];
    }
}
