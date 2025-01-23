<div class="modal fade" id="modal-create-pin">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Transaction</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="create-pin-form" method="POST" novalidate>
                    @csrf
                    <!-- Hidden inputs for routes -->
                    <input type="hidden" id="route-store" value="{{ route('search.store') }}">
                    <input type="hidden" id="route-index" value="{{ route('search.index') }}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="PIN">Pin :</label>
                                <input class="form-control form-control-lg" type="text" name="PIN"
                                    id="PIN" required>
                                <div class="invalid-feedback">Please provide a valid PIN.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Location">Location :</label>
                                <input class="form-control form-control-lg" type="text" name="Location"
                                    id="Location" required>
                                <div class="invalid-feedback">Please provide a location.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="LotNo">Lot Number :</label>
                                <input class="form-control form-control-lg" type="text" name="LotNo"
                                    id="LotNo" required>
                                <div class="invalid-feedback">Please provide a valid Lot Number.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="BlkNo">Block Number :</label>
                                <input class="form-control form-control-lg" type="text" name="BlkNo"
                                    id="BlkNo" required>
                                <div class="invalid-feedback">Please provide a valid Block Number.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="SurveyNo">Survey Number :</label>
                                <input class="form-control form-control-lg" type="text" name="SurveyNo"
                                    id="SurveyNo" required>
                                <div class="invalid-feedback">Please provide a valid Survey Number.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Kind">Kind :</label>
                                <input class="form-control form-control-lg" type="text" name="Kind"
                                    id="Kind" required>
                                <div class="invalid-feedback">Please provide a valid Kind.</div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-primary" id="save-pin-button">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
