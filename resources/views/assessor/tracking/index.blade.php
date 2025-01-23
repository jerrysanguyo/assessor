@extends('assessor.layouts.master')
@section('contents')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Tracking </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tracking</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Tracking System Card -->
                <div class="col-lg-12">
                    <div class="alert-container"></div>
                    <div class="card border-dark">
                        <div class="card-header bg-dark d-flex justify-content-between align-items-center text-white">
                            <span>Tracking System</span>
                        </div>
                        <div class="card-body bg-light">
                            <form method="POST" id="trackingForm" action="{{ route('tracking.store') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="noOfAccounts" class="form-label">NO. OF ACCOUNT/S:</label>
                                    <input type="text" class="form-control" id="noOfAccounts" name="noOfAccounts">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="transaction" class="form-label">TRANSACTION:</label>
                                    <input type="text" class="form-control" id="transaction" name="transaction">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="applicant" class="form-label">APPLICANT:</label>
                                    <input type="text" class="form-control" id="applicant" name="applicant">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">ADDRESS:</label>
                                    <input type="text" class="form-control" id="address" name="address">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="representative" class="form-label">REPRESENTATIVE:</label>
                                    <input type="text" class="form-control" id="representative" name="representative">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="contactNo" class="form-label">CONTACT NO.:</label>
                                    <input type="text" class="form-control" id="contactNo" name="contactNo">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-danger" id="submitForm">Submit</button>
                                </div>
                            </form>

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
            $(document).ready(function() {
                $('#submitForm').click(function(e) {
                    e.preventDefault(); // Prevent default form submission
                    $('.is-invalid').removeClass('is-invalid');
                    $('.invalid-feedback').text('');
                    $('.alert-container').html('');

                    // Gather form data
                    let formData = {
                        noOfAccounts: $('#noOfAccounts').val(),
                        transaction: $('#transaction').val(),
                        applicant: $('#applicant').val(),
                        address: $('#address').val(),
                        representative: $('#representative').val(),
                        contactNo: $('#contactNo').val(),
                        _token: $('meta[name="csrf-token"]').attr('content'), // CSRF token
                    };

                    // Perform AJAX POST request
                    $.ajax({
                        url: $('#trackingForm').attr('action'),
                        type: 'POST',
                        data: formData,
                        success: function(response) {
                            if (response.success) {
                                showAlert('success', response.message);
                                $('#trackingForm')[0].reset();
                                const pdfUrl = `{{ url('tracking-pdf-report') }}`;
                                window.open(pdfUrl, '_blank');
                            }
                        },
                        error: function(xhr) {
                            if (xhr.responseJSON && xhr.responseJSON.errors) {
                                // Display validation errors
                                $.each(xhr.responseJSON.errors, function(field, messages) {
                                    let input = $('#' + field);
                                    input.addClass('is-invalid'); // Highlight invalid input
                                    input.next('.invalid-feedback').text(messages[0]); // Show the first error message
                                });
                            } else {
                                // Show unexpected error alert
                                showAlert('danger', 'An unexpected error occurred. Please try again.');
                            }
                        },
                    });
                });

                // Alert function to show messages
                function showAlert(type, message) {
                    const alertHtml = `
                    <div class="alert alert-${type} alert-dismissible fade show text-center font-weight-bold text-uppercase" role="alert" style="font-size: 1.2rem;">
                        ${message}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>`;
                    $(".alert-container").html(alertHtml);
                    setTimeout(() => $(".alert").alert("close"), 5000);
                }
            });
        </script>
    @endonce
@endpush

