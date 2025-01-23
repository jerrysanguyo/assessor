@extends('assessor.layouts.master')
@section('contents')
<div class="content-header">
    <div class="container">
        <h1 class="m-0">User Login Logs</h1>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="card card-dark card-outline">
            <div class="card-header">
                <h3 class="card-title">Assr User Login Logs</h3>
            </div>
            <div class="card-body" style="height: 400px; overflow-y: auto;">
                <ul class="list-group">
                    @foreach ($logs as $log)
                        <li class="list-group-item">
                            <strong>{{ $log->Username }}</strong> ({{ $log->Date }}): <br>
                            {{ $log->Event }} <br>
                            <small>PC: {{ $log->PCName }} | IP: {{ $log->PCIPAddress ?? 'N/A' }}</small>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
