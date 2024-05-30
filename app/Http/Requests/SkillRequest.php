<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillRequest extends FormRequest
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
            'image'=> 'nullable|mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',

            'skill_name_1' => 'required|string|max:255',
            'skill_percent_1' => 'required|string',
            'skill_fill_percent_1' => 'required|string',

            'skill_name_2' => 'required|string|max:255',
            'skill_percent_2' => 'required|string',
            'skill_fill_percent_2' => 'required|string',
            
            'skill_name_3' => 'required|string|max:255',
            'skill_percent_3' => 'required|string',
            'skill_fill_percent_3' => 'required|string',
        ];
        return $rules;
    }
}
