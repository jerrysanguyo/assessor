<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssrAccountRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'FirstName' => 'required|string|max:30',
            'LastName' => 'required|string|max:30',
            'MiddleName' => 'nullable|string|max:30',
            'Birthday' => 'nullable|date',
            'Status' => 'nullable|integer',
            'HideBday' => 'nullable|integer',
            'TheBible' => 'nullable|integer',
            'Username' => 'required|string|max:30|unique:assr_account,Username',
            'Password' => 'required|string|max:50',
            'Level' => 'required|string|max:30',
            'Email' => 'required|email|max:30|unique:assr_account,Email',
            'SBV' => 'nullable|integer',
            'SilentMode' => 'nullable|integer',
            'SN' => 'nullable|integer',
        ];
    }
}
