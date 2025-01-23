@extends('assessor.layouts.master')
@section('contents')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Edit Profile </h1>
                    {{-- <small>Version 3.0</small> --}}
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Profile</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            @include('assessor.profile.partials.information')
            @include('assessor.profile.partials.password')
        </div>
    </div>
    <!-- /.content -->
@endsection
@push('scripts')
    @once
        <script src="{{ asset('custom/javascript/password.js') }}"></script>
    @endonce
@endpush
