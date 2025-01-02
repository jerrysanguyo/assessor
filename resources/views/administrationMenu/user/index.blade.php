@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row m-0">
            <div class="card card-dark card-outline col-md-12">
                <form action="#" method="POST">
                    @csrf
                    <div class="card-body">
                        <!-- Barangay Input -->
                        <div class="form-group row">
                            <label for="LastName" class="col-sm-2 col-form-label">Last Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('LastName') is-invalid @enderror" id="LastName" name="LastName" placeholder="Enter Last Name" value="{{ old('LastName') }}">
                                @error('LastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="FirstName" class="col-sm-2 col-form-label">First Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('FirstName') is-invalid @enderror" id="FirstName" name="FirstName" placeholder="Enter First Name" value="{{ old('FirstName') }}">
                                @error('FirstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="MiddleName" class="col-sm-2 col-form-label">Middle Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('MiddleName') is-invalid @enderror" id="MiddleName" name="MiddleName" placeholder="Enter First Name" value="{{ old('MiddleName') }}">
                                @error('MiddleName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Code Input -->
                        <div class="form-group row">
                            <label for="code" class="col-sm-2 col-form-label">Code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" placeholder="Enter Code" value="{{ old('code') }}">
                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Remarks Radio Buttons -->
                        <div class="form-group row">
                            <label for="remarks" class="col-sm-2 col-form-label">Remarks</label>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input @error('remarks') is-invalid @enderror" type="radio" name="remarks" id="old" value="Old" {{ old('remarks') == 'Old' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="old">Old</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('remarks') is-invalid @enderror" type="radio" name="remarks" id="new" value="New" {{ old('remarks') == 'New' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="new">New</label>
                                </div>
                                @error('remarks')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
