@extends('assessor.auth.layouts.master')

@section('contents')
    <div class="login-box">
        <div class="card card-outline card-danger">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
            </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                     <input type="text" name="username" class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" placeholder="Enter username...">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password"  class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Enter password ...">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="input-group mt-8">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection
