<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'subtitle'=>'required|string|max:255',
            'addtitle'=>'required|string|max:255',
            'address'=>'required|string|max:255',
            'calltitle'=>'required|string|max:255',
            'call'=>'required|string|max:255',
            'emailtitle'=>'required|string|max:255',
            'email'=>'required|string|max:255',
            'map'=>'required|string',
        ];
    }
}
