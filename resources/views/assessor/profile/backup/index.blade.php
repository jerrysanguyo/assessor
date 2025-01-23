@extends('assessor.layouts.master')
@section('contents')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> PIN </h1>
                    {{-- <small>Version 3.0</small> --}}
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Pin</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#info" data-toggle="tab">Edit Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pass" data-toggle="tab">Change Password</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <!-- Edit Profile -->
                                <div class="active tab-pane" id="info">
                                    <form action="{{ route('profile.update') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <input type="hidden" name="id" value="{{ auth()->user()->id }}">

                                            <!-- Last Name -->
                                            <div class="form-group col-md-4">
                                                <label for="LastName">Last Name</label>
                                                <span class="text-danger">*</span>
                                                <input type="text" name="LastName" class="form-control"
                                                    value="{{ old('LastName', auth()->user()->LastName) }}" required>
                                            </div>

                                            <!-- First Name -->
                                            <div class="form-group col-md-4">
                                                <label for="FirstName">First Name</label>
                                                <span class="text-danger">*</span>
                                                <input type="text" name="FirstName" class="form-control"
                                                    value="{{ old('FirstName', auth()->user()->FirstName) }}" required>
                                            </div>

                                            <!-- Middle Name -->
                                            <div class="form-group col-md-4">
                                                <label for="MiddleName">Middle Name</label>
                                                <input type="text" name="MiddleName" class="form-control"
                                                    value="{{ old('MiddleName', auth()->user()->MiddleName) }}">
                                            </div>

                                            <!-- Email -->
                                            <div class="form-group col-md-6">
                                                <label for="Email">Email</label>
                                                <span class="text-danger">*</span>
                                                <input type="email" name="Email" class="form-control"
                                                    value="{{ auth()->user()->Email }}" readonly>
                                            </div>

                                            <!-- Birthday -->
                                            <div class="form-group col-md-6">
                                                <label for="Birthday">Birthday</label>
                                                <span class="text-danger">*</span>
                                                <input type="date" name="Birthday" class="form-control"
                                                    value="{{ old('Birthday', auth()->user()->Birthday) }}" required>
                                            </div>

                                            <!-- Checkbox Options -->
                                            <div class="form-group col-md-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="TheBible"
                                                        value="1" {{ auth()->user()->TheBible ? 'checked' : '' }}>
                                                    <label class="form-check-label">Show Bible</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="HideBday"
                                                        value="1" {{ auth()->user()->HideBday ? 'checked' : '' }}>
                                                    <label class="form-check-label">Hide Birthday</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="SilentMode"
                                                        value="1" {{ auth()->user()->SilentMode ? 'checked' : '' }}>
                                                    <label class="form-check-label">Silent Mode</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-danger float-right">Update</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <!-- Change Password -->
                                <div class="tab-pane" id="pass">
                                    <form action="{{ route('profile.changePassword') }}" method="POST">
                                        @csrf

                                        <!-- Display All Errors -->
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <div class="row">
                                            <!-- Current Password -->
                                            <div class="form-group col-md-6">
                                                <label for="password">Current Password</label>
                                                <div class="input-group">
                                                    <input type="password" name="password" class="form-control"
                                                        id="password" autocomplete="off" required>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary toggle-password"
                                                            type="button" data-target="#password">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- New Password -->
                                            <div class="form-group col-md-6">
                                                <label for="new_pass">New Password</label>
                                                <div class="input-group">
                                                    <input type="password" name="new_pass" class="form-control"
                                                        id="new_pass" autocomplete="new-password" required>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary toggle-password"
                                                            type="button" data-target="#new_pass">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Confirm Password -->
                                            <div class="form-group col-md-6">
                                                <label for="password_confirmation">Confirm Password</label>
                                                <div class="input-group">
                                                    <input type="password" name="new_pass_confirmation"
                                                        class="form-control" id="password_confirmation"
                                                        autocomplete="new-password" required>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary toggle-password"
                                                            type="button" data-target="#password_confirmation">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Submit Button -->
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-danger float-right">Update</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>

    </div>
    <!-- /.content -->
@endsection
@push('scripts')
    @once
        <script>
            document.querySelectorAll('.toggle-password').forEach(button => {
                button.addEventListener('click', function() {
                    const target = document.querySelector(this.dataset.target);
                    const type = target.getAttribute('type') === 'password' ? 'text' : 'password';
                    target.setAttribute('type', type);

                    // Toggle eye icon
                    const icon = this.querySelector('i');
                    icon.classList.toggle('fa-eye');
                    icon.classList.toggle('fa-eye-slash');
                });
            });
        </script>
    @endonce
@endpush
