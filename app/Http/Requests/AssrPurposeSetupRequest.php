<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssrPurposeSetupRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'Purpose' => 'required|string|max:255',
            'Code' => 'nullable|string|max:10',
            'TimesUsed' => 'nullable|numeric|min:1',
        ];
    }

     /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'Purpose.required' => 'Purpose is required.',
            'Purpose.string' => 'Purpose must be a valid string.',
            'Purpose.max' => 'Purpose cannot exceed 255 characters.',
            'Code.string' => 'Code must be a valid string.',
            'Code.max' => 'Code cannot exceed 10 characters.',
            'TimesUsed.numeric' => 'TimesUsed must be a number.',
            'TimesUsed.min' => 'TimesUsed must be at least 1.',
        ];
    }
}
