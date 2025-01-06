<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssrTransactionSetupRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'Transaction' => 'required|string|max:255',
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
            'Transaction.required' => 'Transaction is required.',
            'Transaction.string' => 'Transaction must be a valid string.',
            'Transaction.max' => 'Transaction cannot exceed 255 characters.',
            'Code.string' => 'Code must be a valid string.',
            'Code.max' => 'Code cannot exceed 10 characters.',
            'TimesUsed.numeric' => 'TimesUsed must be a number.',
            'TimesUsed.min' => 'TimesUsed must be at least 1.',
        ];
    }
}
