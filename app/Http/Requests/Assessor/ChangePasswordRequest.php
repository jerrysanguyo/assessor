<?php

namespace App\Http\Requests\Assessor;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
{
    public function rules()
    {
        return [
            'password' => 'required|string',
            'new_pass' => [
                'required',
                'string',
                'confirmed',
            ],
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'The current password is required.',
            'new_pass.required' => 'The new password is required.',
            'new_pass.min' => 'The new password must be at least 8 characters long.',
            'new_pass.regex' => 'The new password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.',
            'new_pass.confirmed' => 'The new password confirmation does not match.',
        ];
    }
}
