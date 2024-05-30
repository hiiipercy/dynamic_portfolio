<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WhyRequest extends FormRequest
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
        $rules = [
            'title'=>'required|string|max:255',
            'subtitle'=>'required|string|max:255',
            'list_1'=>'required|string',
            'list_title_1'=>'required|string|max:255',
            'list_2'=>'required|string',
            'list_title_2'=>'required|string|max:255',
            'list_3'=>'required|string',
            'list_title_3'=>'required|string|max:255',
        ];
        return $rules;
    }
}
