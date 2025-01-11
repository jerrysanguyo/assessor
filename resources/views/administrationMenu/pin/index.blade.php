@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row m-0">
            <div class="card card-dark card-outline col-md-12">
                <div class="card-header">
                    <a href="{{ route('pin.create') }}" class="btn btn-primary float-right">
                        Add PIN
                    </a>
                </div>
                <form class="form-horizontal">
                    <div class="card-body">
                        {!! $dataTable->table(['class' => 'table table-bordered table-striped']) !!}
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
    {!! $dataTable->scripts() !!}
@endpush
