<div class="modal fade" id="modal-edit-pin">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Transaction</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="edit-pin-form" method="POST" action="{{ route('search.update', ':id') }}">
                    @csrf
                    @method('PUT')
                    <!-- Hidden inputs for routes -->
                    <input type="hidden" id="route-edit" value="{{ route('search.edit', ':id') }}">
                    <input type="hidden" id="route-update" value="{{ route('search.update', ':id') }}">
                    <input type="hidden" id="route-index-edit" value="{{ route('search.index') }}">
                    <input type="hidden" id="edit-pin-id" name="id">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="edit-PIN">Pin :</label>
                                <input class="form-control form-control-lg" type="text" name="PIN"
                                    id="edit-PIN" required>
                                <div class="invalid-feedback">Please provide a valid PIN.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="edit-Location">Location :</label>
                                <input class="form-control form-control-lg" type="text" name="Location"
                                    id="edit-Location" required>
                                <div class="invalid-feedback">Please provide a location.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="edit-LotNo">Lot Number :</label>
                                <input class="form-control form-control-lg" type="text" name="LotNo"
                                    id="edit-LotNo" required>
                                <div class="invalid-feedback">Please provide a valid Lot Number.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="edit-BlkNo">Block Number :</label>
                                <input class="form-control form-control-lg" type="text" name="BlkNo"
                                    id="edit-BlkNo" required>
                                <div class="invalid-feedback">Please provide a valid Block Number.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="edit-SurveyNo">Survey Number :</label>
                                <input class="form-control form-control-lg" type="text" name="SurveyNo"
                                    id="edit-SurveyNo" required>
                                <div class="invalid-feedback">Please provide a valid Survey Number.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="edit-Kind">Kind :</label>
                                <input class="form-control form-control-lg" type="text" name="Kind"
                                    id="edit-Kind" required>
                                <div class="invalid-feedback">Please provide a valid Kind.</div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-primary" id="update-pin-button">Update changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
