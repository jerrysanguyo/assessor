<?php

namespace App\Http\Requests\Assessor;

use Illuminate\Foundation\Http\FormRequest;

class PinUpdateRequest extends FormRequest
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
            'PIN' => 'required|string|max:255',
            'Location' => 'nullable|string|max:255',
            'LotNo' => 'nullable|string|max:50',
            'BlkNo' => 'nullable|string|max:50',
            'SurveyNo' => 'nullable|string|max:255',
            'Kind' => 'required|string|max:255',
        ];
    }
}
