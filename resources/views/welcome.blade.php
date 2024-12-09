@extends('layouts.auth.login')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="row justify-content-center align-items-center w-100">
        <div class="col-lg-8 col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body d-flex align-items-center" style="min-height: 300px;">
                    <div class="row w-100">
                        <div class="col-md-5 d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                <img src="{{ asset('images/CL.webp') }}" alt="" class="img-fluid">
                            </div>
                            <div class="vr ms-3 d-none d-md-block h-100"></div>
                        </div>
                        <div class="col-md-7">
                            <div class="row text-center">
                                <span class="fs-1">Sign in</span>
                                <span class="fs-6 text-body-secondary mb-4">Kindly enter your email and password to access your dashboard</span>
                            </div>
                            <form method="POST" action="#">
                                @csrf

                                <div class="row mb-3">
                                    <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
                                    <div class="input-group">
                                        <input type="text" 
                                            class="form-control @error('email') is-invalid @enderror" 
                                            id="specificSizeInputGroupUsername"
                                            placeholder="Username"
                                            value="{{ old('email') }}"
                                            name="email">
                                        <div class="input-group-text bg-danger border-0">
                                            <i class="fa-solid fa-envelope" style="cursor: pointer; color: #ffffff;"></i>
                                        </div>
                                    </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row mb-3">
                                    <label class="visually-hidden" for="specificSizeInputGroupPassword">Password</label>
                                    <div class="input-group">
                                        <input type="password" 
                                            class="form-control @error('password') is-invalid @enderror" 
                                            id="specificSizeInputGroupPassword" 
                                            placeholder="password"
                                            value="{{ old('password') }}"
                                            name="password">
                                        <div class="input-group-text bg-danger border-0">
                                            <i class="fa-solid fa-lock" style="cursor: pointer; color: #ffffff;"></i>
                                            <i class="fa-solid fa-unlock" style="cursor: pointer; color: #ffffff;"></i>
                                        </div>
                                    </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row mb-0 align-items-center">
                                    <div class="col-lg-8 col-md-12 col-sm-12 d-flex justify-content-center justify-content-md-start">
                                        <p class="fs-6 mb-lg-0">
                                            <a href="#" class="link-offset-2 link-underline link-underline-opacity-0">I Forgot my password</a>
                                        </p>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12 d-flex justify-content-center justify-content-md-end">
                                        <button type="submit" class="btn btn-danger">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
