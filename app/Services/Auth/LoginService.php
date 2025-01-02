<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\{
    Support\Facades\Hash,
    Support\Facades\Auth,
};

class LoginService
{
    public function login(array $credentials): bool
    {
        // Laravel's built-in Auth::attempt for authentication
        return Auth::attempt([
            'Username' => $credentials['Username'],
            'Password' => $credentials['Password'],
        ]);
    }
}
