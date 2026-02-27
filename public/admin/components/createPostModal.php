<div class="modal fade" id="createPostModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h5>Create New Post</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <form id="postForm">
                    <div class="mb-3">
                        <label class="form-label">Content Type</label>
                        <input type="text" class="form-control" value="Post" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Caption</label>
                        <textarea class="form-control" rows="4"></textarea>
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
                </form>

            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button class="btn btn-success">Post</button>
            </div>

        </div>
    </div>
</div>

<script>
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