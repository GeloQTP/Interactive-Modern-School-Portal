<div class="modal fade" id="createBroadcastModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h5>Create New Broadcast</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <div class="mb-3">
                    <label class="form-label">Content Type</label>
                    <input type="text" class="form-control" value="Broadcast" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Content</label>
                    <textarea class="form-control" rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-select">
                        <option>Draft</option>
                        <option>Publish</option>
                    </select>
                </div>

            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button class="btn btn-success">Save</button>
            </div>

        </div>
    </div>
</div>