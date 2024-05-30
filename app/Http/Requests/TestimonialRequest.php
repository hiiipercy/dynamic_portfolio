<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'name' => 'required',
            'position' => 'required',
            'star' => 'required|numeric|min:1|max:5',
            'comment' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'star.required' => 'You must have a star.',
            'star.numeric' => 'It should be integer value.'
        ];
    }
}
