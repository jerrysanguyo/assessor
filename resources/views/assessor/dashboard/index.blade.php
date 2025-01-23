@extends('assessor.layouts.master')
@section('contents')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Dashboard </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Home</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">

            <!-- Overview Cards -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>150</h3>
                            <p>New Applications</p>
                        </div>
                        <div class="icon">
                            <i class="fad fa-file-alt"></i> <!-- Changed fas to fad -->
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>

                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53%</h3>
                            <p>Approval Rate</p>
                        </div>
                        <div class="icon">
                            <i class="fad fa-chart-pie"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>
                            <p>Pending Reviews</p>
                        </div>
                        <div class="icon">
                            <i class="fad fa-clock"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>
                            <p>Rejected Applications</p>
                        </div>
                        <div class="icon">
                            <i class="fad fa-times-circle"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

{{--
            <div class="row">
                <div class="col-12">
                    <div class="card card-dark card-outline">
                        <div class="card-header">
                            <h3 class="card-title">The Bible</h3>
                        </div>
                        <div class="card-body p-3">
                            <form action="{{ route('dashboard.store') }}" method="POST">
                                @csrf
                                <div class="form-group w-100">
                                    <textarea name="TheBible" id="TheBible" class="form-control" rows="3" placeholder="Write something inspiring..."
                                        required></textarea>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-danger btn-md">Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}


            <!-- Activity Logs -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-dark card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Activity Logs</h3>
                        </div>
                        <div class="card-body p-3" style="height: 400px; overflow-y: auto;">
                            <div class="activity-log" id="activityLog">
                                @forelse ($logs as $log)
                                    <div class="log-item">
                                        <p class="log-message"><strong>{{ $log?->Username }}</strong>
                                            ({{ \Carbon\Carbon::parse($log?->Date)->format('m/d/Y h:i A') }})
                                            :
                                        </p>
                                        <p class="log-time">{{ $log?->Event }}</p>
                                    </div>
                                @empty
                                    <div class="log-item">
                                        <p class="log-message">No activity logs available.</p>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <button id="refreshLogs" class="btn btn-secondary btn-md">Refresh Logs</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->


            <!-- Charts Section -->
            <div class="row">
                <div class="col-md-6">
                    <!-- Bar Chart -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Applications by Month</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="barChart"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Line Chart -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Approval Trends</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="lineChart"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Bar Chart
        const barChartCtx = document.getElementById('barChart').getContext('2d');
        new Chart(barChartCtx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Applications',
                    data: [65, 59, 80, 81, 56, 55],
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Line Chart
        const lineChartCtx = document.getElementById('lineChart').getContext('2d');
        new Chart(lineChartCtx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Approval Rate',
                    data: [50, 60, 70, 65, 75, 80],
                    backgroundColor: 'rgba(210, 214, 222, 1)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: true,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    fill: false
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <script>
        function refreshLogs() {
            $.ajax({
                url: '/api/logs/user', // API endpoint
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    const activityLog = $('#activityLog'); // Activity log container
                    activityLog.html(''); // Clear existing logs

                    if (data && data.length > 0) {
                        data.forEach(log => {
                            const formattedDate = new Date(log.Date).toLocaleString('en-US', {
                                month: '2-digit',
                                day: '2-digit',
                                year: 'numeric',
                                hour: '2-digit',
                                minute: '2-digit',
                                second: '2-digit',
                                hour12: true
                            });

                            activityLog.append(`
                            <div class="log-item">
                                <p class="log-message"><strong>${log.Username}</strong> (${formattedDate}):</p>
                                <p class="log-time">${log.Event}</p>
                            </div>
                        `);
                        });
                    } else {
                        activityLog.html(`
                        <div class="log-item">
                            <p class="log-message">No activity logs available.</p>
                        </div>
                    `);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching logs:', xhr.responseText || error);
                    $('#activityLog').html(`
                    <div class="log-item">
                        <p class="log-message text-danger">Failed to load logs. Please try again later.</p>
                    </div>
                `);
                }
            });
        }

        // Attach refresh button click event
        $(document).ready(function() {
            $('#refreshLogs').on('click', refreshLogs);

            // Auto-refresh logs every 30 seconds
            setInterval(refreshLogs, 30000);
        });
    </script>
@endpush
