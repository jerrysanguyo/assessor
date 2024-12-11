<!-- Modal -->
<div class="modal fade" id="accountInfo" tabindex="-1" aria-labelledby="accountInfoLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="accountInfoLabel">Update account information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="f-3"><strong>User information:</strong></p>
                <div class="mb-3 row">
                    <label for="first_name" class="col-sm-4 col-form-label">First name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="first_name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="middle_name" class="col-sm-4 col-form-label">Middle name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="middle_name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="last_name" class="col-sm-4 col-form-label">Last name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="last_name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="birthdate" class="col-sm-4 col-form-label">Birthdate:</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="birthdate">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-6 d-flex justify-content-center">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="hideBirthdateCheckbox">
                            <label for="hideBirthdateCheckbox" class="form-check-label">Show bible</label>
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex justify-content-center">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="hideBirthdateCheckbox">
                            <label for="hideBirthdateCheckbox" class="form-check-label">Notification</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-6 d-flex justify-content-center">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="hideBirthdateCheckbox">
                            <label for="hideBirthdateCheckbox" class="form-check-label">Hide Birthdate</label>
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex justify-content-center">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="hideBirthdateCheckbox">
                            <label for="hideBirthdateCheckbox" class="form-check-label">Silent mode</label>
                        </div>
                    </div>
                </div>
                <p class="f-3"><strong>Change password:</strong></p>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Old password:</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="confirm" class="col-sm-4 col-form-label">New password:</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="confirm">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-4 col-form-label">Confirm password:</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 align-items-center">
                        <a href="#">
                            <button type="button" class="btn btn-danger w-100">Update</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
