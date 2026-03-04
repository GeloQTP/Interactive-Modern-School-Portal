<div class="modal fade" id="editPostModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h5>Edit Post - <span id="post_title"></span></h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form id="postForm">
                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="postTitle">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Caption</label>
                        <textarea class="form-control" rows="4" name="postCaption"></textarea>
                    </div>

                    <!-- Image Preview -->
                    <div class="mb-3 text-center">
                        <div id="preview"></div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select" name="status">
                            <option value="Drafted">Draft</option>
                            <option value="Published">Publish</option>
                        </select>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Save Changes</button>
                </div>

            </form>
        </div>
    </div>
</div>

<script>
    function populateEditFields() {

    }

    async function getPostIfo(post_id) {

        try {
            const res = await fetch('./../../../api/PostController.php', {
                method: 'POST',
                body: new URLSearchParams({
                    action: 'view',
                    post_id: post_id,
                }),
                credentials: 'same-origin',
            });

            if (!res.ok) throw new Error('Network response Error.');

            const data = await res.json

        } catch {

        }
    }
</script>