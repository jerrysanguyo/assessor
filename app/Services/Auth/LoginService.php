<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginService
{
    public function login(array $credentials)
    {
        // Fetch user by username
        $user = User::where('Username', $credentials['Username'])->first();

        // Validate password
        if ($user && Hash::check($credentials['Password'], $user->Password)) {
            return $user; // Login successful
        }

        return null;
    }
}
