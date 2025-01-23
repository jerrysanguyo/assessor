@extends('assessor.layouts.master')
@section('contents')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Create Account </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item">Manage Account</li>
                        <li class="breadcrumb-item active">Create Account</li>
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
                <!-- Form Card -->
                <div class="col-lg-12">
                    <div class="card card-dark card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Create Account</h3>
                        </div>
                        <!-- Display Validation Errors -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('account.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <!-- User Information -->
                                    <div class="col-md-6">
                                        <fieldset class="border p-3">
                                            <legend class="text-sm">User Information</legend>
                                            <div class="form-group">
                                                <label for="LastName">Last Name</label>
                                                <input type="text" name="LastName" class="form-control"
                                                    placeholder="Enter Last Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="FirstName">First Name</label>
                                                <input type="text" name="FirstName" class="form-control"
                                                    placeholder="Enter First Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="MiddleName">Middle Name</label>
                                                <input type="text" name="MiddleName" class="form-control"
                                                    placeholder="Enter Middle Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="Birthday">Birthday</label>
                                                <input type="date" name="Birthday" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input type="checkbox" name="HideBday" value="1"
                                                        class="form-check-input">
                                                    <label class="form-check-label" for="HideBday">Hide Birthday</label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <!-- Account Information -->
                                    <div class="col-md-6">
                                        <fieldset class="border p-3">
                                            <legend class="text-sm">Account Information</legend>
                                            <div class="form-group">
                                                <label for="Username">Username</label>
                                                <input type="text" name="Username" class="form-control"
                                                    placeholder="Enter Username" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" name="password" class="form-control"
                                                    placeholder="Enter Password" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password_confirmation">Confirm Password</label>
                                                <input type="password" name="password_confirmation" class="form-control"
                                                    placeholder="Confirm Password" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email">Email</label>
                                                <input type="email" name="Email" class="form-control"
                                                    placeholder="Enter Email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Level">User Level</label>
                                                <select name="Level" class="form-control">
                                                    <option value="">Please Select User Level</option>
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <!-- Miscellaneous Fields -->
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Status">Status</label>
                                            <select name="Status" class="form-control">
                                                <option value="1">Active</option>
                                                <option value="2">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="TheBible">The Bible (Verse)</label>
                                            <input type="text" name="TheBible" class="form-control"
                                                placeholder="Enter Bible Verse">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Create Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection
