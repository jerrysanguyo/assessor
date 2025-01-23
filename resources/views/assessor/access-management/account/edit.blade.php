@extends('assessor.layouts.master')
@section('contents')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Edit Account </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item">Manage Account</li>
                        <li class="breadcrumb-item active">Edit Account</li>
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
                            <h3 class="card-title">Edit Account</h3>
                        </div>
                        <form action="{{ route('account.update', $account->id) }}" method="POST">
                            @csrf
                            @method('PUT') <!-- Add method override for PUT -->
                            <div class="card-body">
                                <div class="row">
                                    <!-- User Information -->
                                    <div class="col-md-6">
                                        <fieldset class="border p-3">
                                            <legend class="text-sm">User Information</legend>
                                            <div class="form-group">
                                                <label for="LastName">Last Name</label>
                                                <input type="text" name="LastName" class="form-control"
                                                       value="{{ old('LastName', $account->LastName) }}"
                                                       placeholder="Enter Last Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="FirstName">First Name</label>
                                                <input type="text" name="FirstName" class="form-control"
                                                       value="{{ old('FirstName', $account->FirstName) }}"
                                                       placeholder="Enter First Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="MiddleName">Middle Name</label>
                                                <input type="text" name="MiddleName" class="form-control"
                                                       value="{{ old('MiddleName', $account->MiddleName) }}"
                                                       placeholder="Enter Middle Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="Birthday">Birthday</label>
                                                <input type="date" name="Birthday" class="form-control"
                                                       value="{{ old('Birthday', $account->Birthday) }}" required>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input type="checkbox" name="HideBday" value="1"
                                                           class="form-check-input"
                                                           {{ old('HideBday', $account->HideBday) ? 'checked' : '' }}>
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
                                                       value="{{ old('Username', $account->Username) }}"
                                                       placeholder="Enter Username" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" name="password" class="form-control"
                                                       placeholder="Enter Password (leave blank if not changing)">
                                            </div>
                                            <div class="form-group">
                                                <label for="password_confirmation">Confirm Password</label>
                                                <input type="password" name="password_confirmation" class="form-control"
                                                       placeholder="Confirm Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="Email">Email</label>
                                                <input type="email" name="Email" class="form-control"
                                                       value="{{ old('Email', $account->Email) }}"
                                                       placeholder="Enter Email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Level">User Level</label>
                                                <select name="Level" class="form-control">
                                                    <option value="">Please Select User Level</option>
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->name }}" {{ old('Level', $account->Level) == $role->name ? 'selected' : '' }}>
                                                            {{ $role->name }}
                                                        </option>
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
                                                <option value="1" {{ old('Status', $account->Status) == 'Active' ? 'selected' : '' }}>Active</option>
                                                <option value="2" {{ old('Status', $account->Status) == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="TheBible">The Bible (Verse)</label>
                                            <input type="text" name="TheBible" class="form-control"
                                                   value="{{ old('TheBible', $account->TheBible) }}"
                                                   placeholder="Enter Bible Verse">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Update Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection
