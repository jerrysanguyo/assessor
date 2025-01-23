@extends('assessor.layouts.master')
@section('contents')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Validation </h1>
                    {{-- <small>Version 3.0</small> --}}
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Validation</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">

            @include('assessor.search.modal.create')

            @include('assessor.search.modal.update')

            <div class="row">
                <!-- Table Card -->
                <div class="col-lg-12">
                    <div class="alert-container"></div>
                    <div class="card card-dark card-outline">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="card-title">Records</h5>
                                <button class="btn btn-primary" type="button" id="create-button" data-toggle="modal"
                                    data-target="#modal-create-pin">
                                    <i class="fas fa-plus mr-1"></i> Create
                                </button>
                            </div>
                            <!-- Table -->
                            <table id="validation-table" class="table-borderless table-hover table" style="width:100%;">
                                <thead class="bg-light">
                                    <tr>
                                        @foreach ($columns as $column)
                                            <th class="export" style="white-space: nowrap;">{{ $column }}</th>
                                        @endforeach
                                        <th style="width: 80px; text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $row)
                                        <tr>
                                            <td style="white-space: nowrap;">{{ $row?->TDNo }}</td>
                                            <td style="text-align: center;">{{ $row?->Owner }}</td>
                                            <td style="text-align: center;">{{ $row?->Address }}</td>
                                            <td style="white-space: nowrap;">
                                                <span
                                                    class="badge {{ $row?->Status === 'Validated' ? 'badge-danger' : 'badge-success' }}">
                                                    {{ $row?->Status === 'VALIDATED' ? 'Validated' : 'Invalidated' }}
                                                </span>
                                            </td>

                                            <td style="text-align: center;">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                                        data-toggle="dropdown">
                                                        <i class="fas fa-ellipsis-h"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item text-info edit-record-btn"
                                                            data-toggle="modal" data-target="#modal-edit-pin"
                                                            data-id="{{ $row->id }}">
                                                            <i class="fas fa-pen"></i> Edit
                                                        </a>
                                                        <a class="dropdown-item text-info"
                                                            href="{{ route('validation.show', $row->id) }}">
                                                            <i class="fas fa-eye"></i> Show
                                                        </a>
                                                        <a class="dropdown-item text-danger delete-item"
                                                            href="{{ route('validation.destroy', $row->id) }}">
                                                            <i class="fas fa-trash"></i> Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        @foreach ($columns as $column)
                                            <th class="search">{{ $column }}</th>
                                        @endforeach
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection
@push('scripts')
    @once
        <script>
            $('#validation-table tfoot th.search').each(function() {
                var title = $(this).text();
                $(this).html('<input type="text" placeholder="Search ' + title +
                    '" class="search-input form-control form-control-sm"/>');
            });
            var table = $('#validation-table').DataTable({
                "dom": "<'row justify-content-center'<'col-sm-3'l><'col-sm-6 text-center'B><'col-sm-3'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row justify-content-between'<'col-sm-5'i><'col-sm-7'p>>",
                "responsive": true,
                "searching": true,
                "paging": true,
                "buttons": [{
                        extend: 'copyHtml5',
                        className: 'btn btn-outline-secondary btn-sm',
                        text: '<i class="fas fa-clipboard"></i> Copy',
                        exportOptions: {
                            columns: '.export'
                        }
                    },
                    {
                        extend: 'csvHtml5',
                        className: 'btn btn-outline-primary btn-sm', // Blue for CSV
                        text: '<i class="far fa-file-csv"></i> CSV',
                        exportOptions: {
                            columns: '.export'
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        className: 'btn btn-outline-success btn-sm', // Green for Excel
                        text: '<i class="far fa-file-excel"></i> Excel',
                        exportOptions: {
                            columns: '.export'
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        className: 'btn btn-outline-danger btn-sm', // Red for PDF
                        text: '<i class="far fa-file-pdf"></i> PDF',
                        exportOptions: {
                            columns: '.export'
                        }
                    },
                    {
                        extend: 'print',
                        className: 'btn btn-outline-dark btn-sm', // Dark for Print
                        text: '<i class="fas fa-print"></i> Print',
                        exportOptions: {
                            columns: '.export'
                        }
                    }
                ],
                initComplete: function() {
                    this.api().columns().every(function() {
                        var that = this;

                        $('input', this.footer()).on('keyup change clear', function() {
                            if (that.search() !== this.value) {
                                that
                                    .search(this.value)
                                    .draw();
                            }
                        });
                    });
                }
            });
        </script>
        {{-- <script src="{{ asset('custom/javascript/pin.js') }}"></script> --}}
    @endonce
@endpush
