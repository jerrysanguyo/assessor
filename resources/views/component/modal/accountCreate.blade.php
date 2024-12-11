<!-- Modal -->
<div class="modal fade" id="accountCreate" tabindex="-1" aria-labelledby="accountCreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="accountCreateLabel">Account creation</h5>
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
                    <div class="col-sm-5">
                        <input type="date" class="form-control" id="birthdate">
                    </div>
                    <div class="col-sm-8 d-flex align-items-center">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="hideBirthdateCheckbox">
                            <label for="hideBirthdateCheckbox" class="form-check-label">Hide birthdate</label>
                        </div>
                    </div>
                </div>
                <p class="f-3"><strong>Account information:</strong></p>
                <div class="mb-3 row">
                    <label for="user_name" class="col-sm-4 col-form-label">Username:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="user_name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Password:</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="confirm" class="col-sm-4 col-form-label">Confirm password:</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="confirm">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-4 col-form-label">Email:</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="user_level" class="col-sm-4 col-form-label">User level:</label>
                    <div class="col-sm-8">
                        <select name="" id="" class="custom-select">
                            <option value="">Choose ..</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 align-items-center">
                        <a href="#">
                            <button type="button" class="btn btn-danger w-100">Create</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
