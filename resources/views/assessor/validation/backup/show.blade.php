@extends('assessor.layouts.master')

@section('contents')
    <!-- Content Header -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Registration Form - Building</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('validation.index') }}">Validation</a></li>
                        <li class="breadcrumb-item active">Registration</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="container">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Transfer of Ownership w/ Reassessment</h3>
                </div>
                <div class="card-body">
                    <!-- Tax Declaration Section -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tax_declaration_no">Tax Declaration No.</label>
                                <input type="text" class="form-control" id="tax_declaration_no"
                                    placeholder="EB-001-01010">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="property_id_no">Property Identification No.</label>
                                <input type="text" class="form-control" id="property_id_no">
                            </div>
                        </div>
                    </div>

                    <!-- Owner's Information Section -->
                    <div class="card card-dark">
                        <div class="card-header">
                            <h5>Owner's Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="owner_name">Name <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="owner_name" value="{{ $data?->Owner }}">
                            </div>
                            <div class="form-group">
                                <label for="owner_company">Company <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="owner_company">
                            </div>
                            <div class="form-group">
                                <label for="owner_organization">Organization <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="owner_organization">
                            </div>
                            <div class="form-group">
                                <label for="owner_address">Address <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="owner_address" rows="2">{{ $data?->Address }}</textarea>
                            </div>
                        </div>
                    </div>


                    <!-- Administrator / Beneficial User Information Section -->
                    <div class="card card-dark">
                        <div class="card-header">
                            <h5>Administrator / Beneficial User Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="owner_name">Name</label>
                                <input type="text" class="form-control" id="owner_name">
                            </div>
                            <div class="form-group">
                                <label for="owner_organization">Organization</label>
                                <input type="text" class="form-control" id="owner_organization">
                            </div>
                            <div class="form-group">
                                <label for="owner_address">Address</label>
                                <textarea class="form-control" id="owner_address" rows="2"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Property Information Section -->
                    <div class="card card-dark">
                        <div class="card-header">
                            <h5>Property Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="location">Location</label>
                                <textarea class="form-control" id="location" rows="2">{{ $data?->Address2 }}</textarea>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="otc_no">OTC/TCT/CCT/CLOA No.</label>
                                    <input type="text" class="form-control" id="otc_no">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="date">Date</label>
                                    <input type="date" class="form-control" id="date">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="ecar_no">eCAR No.</label>
                                    <input type="text" class="form-control" id="ecar_no">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="survey_no">Survey No.</label>
                                    <input type="text" class="form-control" id="survey_no">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lot_no">Lot No.</label>
                                    <input type="text" class="form-control" id="lot_no">
                                </div>
                                <div class="form-group col-md-6">

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="blk_no">Blk No.</label>
                                    <input type="text" class="form-control" id="blk_no">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Property Appraisal (Building) -->

                    @include('assessor.validation.partials.property')

                    <!-- Property Appraisal (Building) -->

                    <!-- Property Assessed Value -->
                    <div class="card card-dark">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h5>Property Assessed Value</h5>
                                <span><strong>Total Assessed Value:</strong> 283,430.00</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table-bordered table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Actual Use</th>
                                        <th>Market Value</th>
                                        <th>Assessment Level</th>
                                        <th>Assessed Value</th>
                                        <th>Taxability</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>RESIDENTIAL</td>
                                        <td>944,755.00</td>
                                        <td>30%</td>
                                        <td>283,430.00</td>
                                        <td>TAXABLE</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Effectivity of Assessment/Reassessment -->
                    <div class="card card-secondary mt-3">
                        <div class="card-header">
                            <h5>Effectivity of Assessment / Reassessment</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="quarter">Quarter:</label>
                                    <select class="form-control" id="quarter">
                                        <option selected>1st</option>
                                        <option>2nd</option>
                                        <option>3rd</option>
                                        <option>4th</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="year">Year:</label>
                                    <input type="number" class="form-control" id="year" value="2014">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="date_registered">Date Registered:</label>
                                    <input type="date" class="form-control" id="date_registered" value="2013-09-13">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Previous Tax Declaration -->
                    <div class="card card-dark mt-3">
                        <div class="card-header">
                            <h5>Previous Tax Declaration</h5>
                        </div>
                        <div class="card-body">
                            <table class="table-bordered table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>TDNo.</th>
                                        <th>Owner</th>
                                        <th>Assessed Value</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>EB-001-00164</td>
                                        <td>AUREO OCHOCO</td>
                                        <td>21,500.00</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger">Remove</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="mt-2 text-right">
                                <button type="button" class="btn btn-large btn-primary">Add Previous Tax
                                    Declaration</button>
                            </div>
                        </div>
                    </div>

                    <!-- Requirements, Memoranda, Annotation, and Land Reference -->
                    <div class="card card-dark mt-3">
                        <div class="card-header">
                            <h5>Requirements</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- Requirements -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="requirements">Requirements</label>
                                        <textarea id="requirements" class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                <!-- Memoranda, Annotation, and Land Reference -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="memoranda">Memoranda</label>
                                        <textarea id="memoranda" class="form-control" rows="2"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="annotation">Annotation</label>
                                        <textarea id="annotation" class="form-control" rows="2"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="land_reference">Land Reference</label>
                                        <textarea id="land_reference" class="form-control" rows="1">ON THE LAND OF GL-001-04994</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Last Payment Details -->
                    <div class="card card-dark mt-3">
                        <div class="card-header">
                            <h5>Last Payment Details</h5>
                        </div>
                        <div class="card-body">
                            <table class="table-bordered table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Date of Payment</th>
                                        <th>ORNo</th>
                                        <th>Period Covered</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>12/05/2023</td>
                                        <td>2081938</td>
                                        <td>2024-1 - 2024-4</td>
                                        <td>4,534.88</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Footer Buttons -->
                    <div class="d-flex justify-content-between align-items-center bg-light mt-3 rounded border p-2">
                        <!-- Last Processed By -->
                        <span>
                            Last Processed By: {!! preg_replace('/\bgayaness\b/i', '<strong>GAYANESS</strong>', $data?->AppraisedBy) !!} 2024-07-30 15:31:13
                        </span>

                        <!-- Status Badge -->
                        <span class="badge {{ $data?->Status === 'VALIDATED' ? 'badge-success' : 'badge-danger' }}">
                            {{ $data?->Status === 'VALIDATED' ? 'VALIDATED' : 'INVALIDATED' }}
                        </span>

                        <!-- Action Buttons -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Print</button>
                            <button type="button" class="btn btn-danger">Cancel</button>
                            <button type="button" class="btn btn-warning">On Process</button>
                            <button type="button" class="btn btn-success">Update</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    @once
        <script>
            $(document).ready(function() {
                // Add search inputs to the table footer
                $('#property-container tfoot th.search').each(function() {
                    var title = $(this).text();
                    $(this).html(
                        '<input type="text" placeholder="Search ' +
                        title +
                        '" class="search-input form-control form-control-sm"/>'
                    );
                });
                $('#property-container').DataTable({
                    responsive: true,
                    dom: "<'row justify-content-between'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row justify-content-between'<'col-sm-5'i><'col-sm-7'p>>",
                    buttons: [{
                            extend: 'copy',
                            className: 'btn btn-outline-secondary btn-sm',
                            text: '<i class="fas fa-copy"></i> Copy',
                        },
                        {
                            extend: 'csv',
                            className: 'btn btn-outline-primary btn-sm',
                            text: '<i class="fas fa-file-csv"></i> CSV',
                        },
                        {
                            extend: 'excel',
                            className: 'btn btn-outline-success btn-sm',
                            text: '<i class="fas fa-file-excel"></i> Excel',
                        },
                        {
                            extend: 'pdf',
                            className: 'btn btn-outline-danger btn-sm',
                            text: '<i class="fas fa-file-pdf"></i> PDF',
                        },
                        {
                            extend: 'print',
                            className: 'btn btn-outline-dark btn-sm',
                            text: '<i class="fas fa-print"></i> Print',
                        },
                    ],
                    initComplete: function() {
                        this.api()
                            .columns()
                            .every(function() {
                                const column = this;
                                $('input', column.footer()).on('keyup change clear', function() {
                                    if (column.search() !== this.value) {
                                        column.search(this.value).draw();
                                    }
                                });
                            });
                    },
                });
                $('#addAppraisalBtn').click(function() {
                    $('#addPropertyAppraisalForm')[0].reset();
                    $('#addPropertyAppraisalModal').modal('show');
                });

                $(document).on('click', '.edit-btn', function() {
                    const row = $(this);
                    $('#appraisalId').val(row.data('id'));
                    $('#AU').val(row.data('au'));
                    $('#Description').val(row.data('description'));
                    $('#Area').val(row.data('area'));
                    $('#Story').val(row.data('story'));
                    $('#TypeOfStructure').val(row.data('type'));
                    $('#Unit_Value').val(row.data('unit-value'));
                    $('#AdjLvl').val(row.data('adj-lvl'));
                    $('#Market_Value').val(row.data('market-value'));
                    $('#AL').val(row.data('assessment-level'));
                    $('#Exempt').prop('checked', row.data('exempt'));
                    $('#Additional').prop('checked', row.data('additional'));
                    $('#propertyAppraisalModal').modal('show');
                });

                $('#addPropertyAppraisalForm').submit(function(e) {
                    e.preventDefault();
                    const formData = $(this).serialize();

                    $.ajax({
                        url: '/property-appraisal',
                        type: 'POST',
                        data: formData,
                        success: function(response) {
                            alert('Property appraisal added successfully!');
                            location.reload();
                        },
                        error: function(xhr) {
                            alert('An error occurred: ' + xhr.responseJSON.message);
                        }
                    });
                });

                $('#propertyAppraisalForm').submit(function(e) {
                    e.preventDefault();
                    const formData = $(this).serialize();
                    const id = $('#appraisalId').val();

                    $.ajax({
                        url: `/property-appraisal/${id}`,
                        type: 'PUT',
                        data: formData,
                        success: function(response) {
                            alert('Property appraisal updated successfully!');
                            location.reload();
                        },
                        error: function(xhr) {
                            alert('An error occurred: ' + xhr.responseJSON.message);
                        }
                    });
                });
            });
        </script>
    @endonce
@endpush
