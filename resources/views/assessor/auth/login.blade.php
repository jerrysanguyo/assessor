@extends('assessor.auth.layouts.master')

@section('contents')
<div class="login-container">
    <div class="left-panel">
        <div class="logo-container">
            <img src="{{ asset('img/assessor.png') }}" alt="Logo" class="logo">
            {{-- <p>Care and Support</p> --}}
        </div>
        <div class="typing-container">
            <h3 class="typing-animation">Real Property Tax Appraisal, Tax Map, and Validation</h3>
        </div>
        <div class="badges">
            <img src="path-to-badge1.png" alt="City of Taguig" class="badge">
            <img src="path-to-badge2.png" alt="Social Welfare" class="badge">
        </div>
    </div>
    <div class="right-panel">
        <div class="login-box">
            <h3 class="title">OFFICE OF THE CITY ASSESSOR<br>CITY OF TAGUIG</h3>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" placeholder="Username">
                    <x-input-error :messages="$errors->get('username')" />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password">
                    <x-input-error :messages="$errors->get('password')" />
                </div>
                <button type="submit" class="btn-login">LOG IN</button>
            </form>
            <div class="powered-by">
                <img src="{{ asset('img/IT.png') }}" alt="Information Technology Logo" class="footer-logo">
                Powered by Information Technology
            </div>
        </div>
    </div>
</div>
@endsection
