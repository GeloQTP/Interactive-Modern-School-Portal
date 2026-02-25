<!-- EDIT BROADCAST MODAL -->
<div class="modal fade" id="editBroadcastModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Edit Broadcast</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Announcement Message</label>
                    <textarea class="form-control" rows="4"></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Theme Color</label>
                        <select class="form-select">
                            <option value="bg-success">Green (Important)</option>
                            <option value="bg-primary">Blue (General)</option>
                            <option value="bg-warning">Yellow (Reminder)</option>
                            <option value="bg-danger">Red (Urgent)</option>
                            <option value="bg-dark">Dark (Neutral)</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Priority</label>
                        <select class="form-select">
                            <option>Low</option>
                            <option>Normal</option>
                            <option>High</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Expiration Date</label>
                    <input type="date" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-select">
                        <option>Draft</option>
                        <option>Published</option>
                        <option>Archived</option>
                    </select>
                </div>

            </div>

            <div class="modal-footer">
                <button class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button class="btn btn-success">Save Changes</button>
            </div>

        </div>
    </div>
</div>