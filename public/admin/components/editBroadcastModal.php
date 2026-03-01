<!-- EDIT BROADCAST MODAL -->
<div class="modal fade" id="editBroadcastModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Edit Broadcast</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form id="editBroadcastModal">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input id="title" type="text" class="form-control" name="title" required>
                    </div>

                    <div class="mb-3">
                        <label for="announcement_message" class="form-label">Announcement Message</label>
                        <textarea id="announcement_message" class="form-control" rows="4" name="announcement_message" required></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="theme_color" class="form-label">Theme Color</label>
                            <select id="theme_color" class="form-select" name="theme_color" required>
                                <option value="bg-success">Green (Important)</option>
                                <option value="bg-primary">Blue (General)</option>
                                <option value="bg-warning">Yellow (Reminder)</option>
                                <option value="bg-danger">Red (Urgent)</option>
                                <option value="bg-dark">Dark (Neutral)</option>
                            </select>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="expires_at" class="form-label">Expiration Date</label>
                            <input id="expires_at" type="date" class="form-control" name="expires_at" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select id="status" class="form-select" name="status" required>
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                            <option value="archived">Archived</option>
                        </select>
                    </div>

                </div>
            </form>

            <div class="modal-footer">
                <button class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button class="btn btn-success">Save Changes</button>
            </div>

        </div>
    </div>
</div>