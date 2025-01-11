<!-- Modal -->
<div class="modal fade" id="adminModal" tabindex="-1" aria-labelledby="adminModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adminModalLabel">Printing Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 align-items-center mb-2">
                        <a href="{{ route('account') }}">
                            <button type="button" class="btn btn-danger w-100">Create account / Account manager</button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 align-items-center mb-2">
                        <a href="{{ route('barangay.index') }}">
                            <button type="button" class="btn btn-danger w-100">Barangay setup</button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 align-items-center mb-2">
                        <a href="{{ route('transactionSetup') }}">
                            <button type="button" class="btn btn-danger w-100">Transaction setup</button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 align-items-center mb-2">
                        <a href="{{ route('taxDec') }}">
                            <button type="button" class="btn btn-danger w-100">Database status</button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 align-items-center mb-2">
                        <a href="{{ route('taxDec') }}">
                            <button type="button" class="btn btn-danger w-100">Purpose setup</button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 align-items-center mb-2">
                        <a href="{{ route('taxDec') }}">
                            <button type="button" class="btn btn-danger w-100">Local server setup</button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 align-items-center mb-2">
                        <a href="{{ route('taxDec') }}">
                            <button type="button" class="btn btn-danger w-100">Database setup</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
