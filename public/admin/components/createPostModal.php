<div class="modal fade" id="createPostModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h5>Create New Post</h5>
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

                    <!-- File Upload -->
                    <div class="mb-3">
                        <label class="form-label">Upload Image</label>
                        <input type="file" id="fileInput" class="form-control" accept="image/*">
                    </div>

                    <!-- Image Preview -->
                    <div class="mb-3 text-center">
                        <div id="preview"></div>
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Post</button>
                </div>

            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const postForm = document.getElementById("postForm");

        postForm.addEventListener('submit', async function(e) {
            e.preventDefault();

            const postFormData = new FormData(broadcastForm);
            postFormData.append('action', 'post');

            const res = await fetch(`./../backend/postAnnouncement.php`, {
                method: 'POST',
                body: postFormData,
                credentials: "same-origin",
            });

            if (!res.ok && res.status !== 200) throw new Error('Network Response Error');

            const data = await res.json();

        });

    });
</script>

<script>
    // IMAGE PREVIEW FUNCTIONALITY
    document.addEventListener('DOMContentLoaded', function() {

        const fileInput = document.getElementById('fileInput');
        const preview = document.getElementById('preview');

        fileInput.addEventListener('change', function() {
            const file = this.files[0];

            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.innerHTML = `
                    <img src="${e.target.result}" 
                         class="img-fluid rounded mt-2" 
                         style="max-height: 300px;">
                `;
                };

                reader.readAsDataURL(file);
            } else {
                preview.innerHTML = '';
            }
        });

    });
</script>