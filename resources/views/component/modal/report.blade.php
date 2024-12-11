<!-- Modal -->
<div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="reportModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reportModalLabel">Reports</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 align-items-center mb-2">
                        <a href="{{ route('report') }}">
                            <button type="button" class="btn btn-danger w-100">QRRPA</button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 align-items-center">
                        <a href="{{ route('report') }}">
                            <button type="button" class="btn btn-danger w-100">Assessment Map Roll</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>