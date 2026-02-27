<div class="modal fade" id="createBroadcastModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h5>Create New Broadcast</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="broadcastForm">
                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Announcement Message</label>
                        <textarea class="form-control" rows="4" name="announcement_message"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Theme Color</label>
                            <select class="form-select" name="theme_color">
                                <option value="bg-success">Green (Important)</option>
                                <option value="bg-primary">Blue (General)</option>
                                <option value="bg-warning">Yellow (Reminder)</option>
                                <option value="bg-danger">Red (Urgent)</option>
                                <option value="bg-dark">Dark (Neutral)</option>
                            </select>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label">Expiration Date</label>
                            <input type="date" class="form-control" name="expires_at">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select" name="status">
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                            <option value="archived">Archived</option>
                        </select>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success" id="publishBroadcastButton">Publish</button>
                </div>

            </form>

        </div>
    </div>
</div>