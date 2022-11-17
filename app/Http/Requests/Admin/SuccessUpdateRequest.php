<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SuccessUpdateRequest extends FormRequest
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
            'title' => 'required|max:100',
            'slug' => 'unique:success_stories,slug,'.$this->id.',id',
            'heading'   => 'required|max:100',
            'image' => 'image|mimes:jpg,png,jpeg',
            'description' => 'required',
        ];
    }
}
