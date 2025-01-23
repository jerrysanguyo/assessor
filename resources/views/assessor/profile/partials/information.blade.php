<div class="row mb-10">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
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
                                <input class="form-check-input" type="checkbox" name="TheBible" value="1"
                                    {{ auth()->user()->TheBible ? 'checked' : '' }}>
                                <label class="form-check-label">Show Bible</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="HideBday" value="1"
                                    {{ auth()->user()->HideBday ? 'checked' : '' }}>
                                <label class="form-check-label">Hide Birthday</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="SilentMode" value="1"
                                    {{ auth()->user()->SilentMode ? 'checked' : '' }}>
                                <label class="form-check-label">Silent Mode</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
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
