@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row m-0">
            <div class="card card-dark card-outline col-md-12">
                <form action="{{ route('barangay.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <!-- Barangay Input -->
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Barangay</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="barangay" name="name" placeholder="Enter Barangay" value="{{ old('barangay') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- District Select -->
                        <div class="form-group row">
                            <label for="district" class="col-sm-2 col-form-label">District</label>
                            <div class="col-sm-10">
                                <select class="form-control @error('district') is-invalid @enderror" id="district" name="district">
                                    <option value="01" {{ old('district') == '01' ? 'selected' : '' }}>01</option>
                                    <option value="02" {{ old('district') == '02' ? 'selected' : '' }}>02</option>
                                    <option value="EMBO" {{ old('district') == 'EMBO' ? 'selected' : '' }}>EMBO's</option>
                                </select>
                                @error('district')
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
