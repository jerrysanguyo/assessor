<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssrBarangayRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'district' => 'required|in:01,02,EMBO',
            'code' => 'required|string|max:255',
            'remarks' => 'required|in:Old,New',
        ];
    }

    public function messages()
    {
        return [
            'district.in' => 'The selected district is invalid.',
            'remarks.in' => 'The selected remarks is invalid.',
        ];
    }
}
