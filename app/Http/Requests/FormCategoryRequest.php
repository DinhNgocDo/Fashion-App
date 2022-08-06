<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormCategoryRequest extends FormRequest
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
            'name' => ['required', 'regex:/^[a-zA-Z0-9\s]+$/i'],
            'image' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The :attribute cannot be blank.',
            'name.regex' => 'The :attribute cannot contain special characters.',
            'image.required' => 'The :attribute cannot be blank.',
        ];
    }
}
