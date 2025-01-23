<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
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
                        <div class="form-group col-md-12">
                            <label for="password">Current Password</label>
                            <span class="text-danger">*</span>
                            <div class="input-group">
                                <input type="password" name="password" class="form-control" id="password"
                                    autocomplete="off" required>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary toggle-password" type="button"
                                        data-target="#password">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- New Password -->
                        <div class="form-group col-md-12">
                            <label for="new_pass">New Password</label>
                            <span class="text-danger">*</span>
                            <div class="input-group">
                                <input type="password" name="new_pass" class="form-control" id="new_pass"
                                    autocomplete="new-password" required>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary toggle-password" type="button"
                                        data-target="#new_pass">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Confirm Password -->
                        <div class="form-group col-md-12">
                            <label for="password_confirmation">Confirm Password</label>
                            <span class="text-danger">*</span>
                            <div class="input-group">
                                <input type="password" name="new_pass_confirmation" class="form-control"
                                    id="password_confirmation" autocomplete="new-password" required>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary toggle-password" type="button"
                                        data-target="#password_confirmation">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Submit Button -->
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary float-right">Update</button>
                        </div>
                    </div>
                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
