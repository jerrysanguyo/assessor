<!-- Modal -->
<div class="modal fade" id="printingModal" tabindex="-1" aria-labelledby="printingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="printingModalLabel">Printing Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Button 1 -->
                    <div class="col-sm-12 align-items-center mb-2">
                        <a href="{{ route('fieldSheet') }}">
                            <button type="button" class="btn btn-danger w-100">Print Field Sheet</button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <!-- Button 2 -->
                    <div class="col-sm-12 align-items-center">
                        <a href="{{ route('taxDec') }}">
                            <button type="button" class="btn btn-danger w-100">Print Tax Declaration</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
