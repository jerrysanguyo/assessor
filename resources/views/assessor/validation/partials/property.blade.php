@include('assessor.validation.partials.property-modal.store')
@include('assessor.validation.partials.property-modal.update')
<!-- Property Appraisal Section -->
<div class="alert-container"></div>
<div class="card card-dark">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h5>Property Appraisal (Building)</h5>
            <span><strong>Total Area:</strong> {{ number_format($totalFloorArea, 2) }}</span>
        </div>
    </div>
    <div class="card-body">
        <table id="property-container" class="table-bordered table">
            <thead class="thead-dark">
                <tr>
                    <th class="export">Description</th>
                    <th class="export">Floor Area</th>
                    <th class="export">Storey</th>
                    <th class="export">Type of Structure</th>
                    <th class="export">Market Value</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataPropertyAppraisal as $dataPropertyAppraisals)
                    <tr>
                        <td style="white-space: nowrap;">{{ $dataPropertyAppraisals?->Description }}</td>
                        <td style="text-align: center;">{{ $dataPropertyAppraisals?->Area }}</td>
                        <td style="text-align: center;">{{ $dataPropertyAppraisals?->Story }}</td>
                        <td style="white-space: nowrap;">{{ $dataPropertyAppraisals?->TypeOfStructure }}</td>
                        <td>{{ $dataPropertyAppraisals?->Market_Value }}</td>
                        <td style="text-align: center;">
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                    data-toggle="dropdown">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item text-info edit-btn" data-toggle="modal"
                                        data-target="#propertyAppraisalModal"
                                        data-id="{{ $dataPropertyAppraisals->id }}"
                                        data-au="{{ e($dataPropertyAppraisals->AU) }}"
                                        data-description="{{ e($dataPropertyAppraisals->Description) }}"
                                        data-area="{{ $dataPropertyAppraisals->Area }}"
                                        data-story="{{ $dataPropertyAppraisals->Story }}"
                                        data-type="{{ e($dataPropertyAppraisals->TypeOfStructure) }}"
                                        data-unit-value="{{ $dataPropertyAppraisals->Unit_Value }}"
                                        data-adj-lvl="{{ $dataPropertyAppraisals->AdjLvl }}"
                                        data-market-value="{{ $dataPropertyAppraisals->Market_Value }}"
                                        data-assessment-level="{{ $dataPropertyAppraisals->AL }}"
                                        data-exempt="{{ $dataPropertyAppraisals->Exempt }}"
                                        data-additional="{{ $dataPropertyAppraisals->Additional }}">
                                        <i class="fas fa-pen"></i> Edit
                                    </a>
                                    <a class="dropdown-item text-danger delete-item"
                                        href="{{ route('property-appraisal.destroy', $dataPropertyAppraisals->id) }}">
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
                    <th class="search">Description</th>
                    <th class="search">Floor Area</th>
                    <th class="search">Storey</th>
                    <th class="search">Type of Structure</th>
                    <th class="search">Market Value</th>
                    <th>Action</th> 
                </tr>
            </tfoot>
        </table>
        <div class="mt-2 text-right">
            <button type="button" id="addAppraisalBtn" class="btn btn-large btn-primary">Add Property Appraisal
                (Building)</button>
        </div>
    </div>
</div>
