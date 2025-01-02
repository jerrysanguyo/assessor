<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    
    public function rules(): array
    {
        return [
            'Username' => ['required', 'string', 'max:30'],
            'Password' => ['required', 'string', 'max:50'],
        ];
    }
}
