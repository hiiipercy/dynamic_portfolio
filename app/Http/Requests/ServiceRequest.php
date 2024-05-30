<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
        $rules= [
        'image'=>'nullable|mimes:png,jpg,jpeg',
        'ser_title'=>'required|max:255|string',
        'ser_details'=>'required|max:255|string',
        ];
        return $rules;
    }
}