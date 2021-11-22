<div class="modal fade" id="create-user-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="col-form-label">Name:</label>
                        <input type="text" class="form-control is-invalid name" name="name" />
                        <div class="invalid-feedback">
                            The name is required.
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Email:</label>
                        <input type="email" class="form-control is-invalid email" name='email' />
                        <div class="invalid-feedback">
                            The email is required.
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="create(event)">Create</button>
            </div>
        </div>
    </div>
</div>