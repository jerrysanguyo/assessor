@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row m-0">
            <div class="card card-dark card-outline col-md-12">
                <form action="{{ route('pin.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <!-- PIN Input -->
                        <div class="form-group row">
                            <label for="PIN" class="col-sm-2 col-form-label">PIN</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('PIN') is-invalid @enderror" id="PIN" name="PIN" placeholder="Enter PIN" value="{{ old('PIN') }}">
                                @error('PIN')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Location Input -->
                        <div class="form-group row">
                            <label for="Location" class="col-sm-2 col-form-label">Location</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('Location') is-invalid @enderror" id="Location" name="Location" placeholder="Enter Location" value="{{ old('Location') }}">
                                @error('Location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- LotNo Input -->
                        <div class="form-group row">
                            <label for="LotNo" class="col-sm-2 col-form-label">Lot No</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('LotNo') is-invalid @enderror" id="LotNo" name="LotNo" placeholder="Enter Lot No" value="{{ old('LotNo') }}">
                                @error('LotNo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- BlkNo Input -->
                        <div class="form-group row">
                            <label for="BlkNo" class="col-sm-2 col-form-label">Blk No</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('BlkNo') is-invalid @enderror" id="BlkNo" name="BlkNo" placeholder="Enter Blk No" value="{{ old('BlkNo') }}">
                                @error('BlkNo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- SurveyNo Input -->
                        <div class="form-group row">
                            <label for="SurveyNo" class="col-sm-2 col-form-label">Survey No</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('SurveyNo') is-invalid @enderror" id="SurveyNo" name="SurveyNo" placeholder="Enter Survey No" value="{{ old('SurveyNo') }}">
                                @error('SurveyNo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Kind Select -->
                        <div class="form-group row">
                            <label for="Kind" class="col-sm-2 col-form-label">Kind</label>
                            <div class="col-sm-10">
                                <select class="form-control @error('Kind') is-invalid @enderror" id="Kind" name="Kind">
                                    <option value="Land" {{ old('Kind') == 'Land' ? 'selected' : '' }}>Land</option>
                                    <option value="Building" {{ old('Kind') == 'Building' ? 'selected' : '' }}>Building</option>
                                    <option value="Machinery" {{ old('Kind') == 'Machinery' ? 'selected' : '' }}>Machinery</option>
                                </select>
                                @error('Kind')
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
