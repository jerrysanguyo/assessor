<?php

namespace App\Http\Controllers\Auth;

use App\{
    Http\Controllers\Controller,
    Http\Requests\Auth\LoginRequest,
    Models\User,
    Services\Auth\LoginService,
};
use Illuminate\{
    Support\Facades\Auth,
};

class LoginController extends Controller
{
    protected $loginService;

    public function __construct(Loginservice $loginService)
    {
        $this->loginService = $loginService;
    }

    public function index()
    {
        return view('welcome');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if ($this->loginService->login($credentials)) {
            return redirect()->route('dashboard')->with('success', 'Login successful!');
        }
        
        return redirect()->route('Login')->withErrors(['loginError' => 'Invalid credentials.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('Login')->with('success', 'You have been logged out.');
    }
}
