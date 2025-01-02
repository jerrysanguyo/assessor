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

    public function login()
    {
        $credentials = $request->validated();

        $user = $this->loginService->login($credentials);

        if ($user) {
            Auth::login($user);
            return redirect()->route('home')->with('success', 'Login successful!');
        }
        return redirect()->route('Login')->withErrors(['loginError' => 'Invalid credentials.']);
    }  
}
