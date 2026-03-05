<div class="modal fade" id="editPostModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h5>Edit Post - "<span id="post_title_header"></span>"</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form id="editPostForm">
                <div class="modal-body" style="height: 700px;">

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="edit_post_title" id="edit_post_title">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Caption</label>
                        <textarea class="form-control" rows="4" name="edit_post_caption" id="edit_post_caption"></textarea>
                    </div>

                    <!-- IMAGE PREVIEW -->
                    <div class="mb-3 text-center">
                        <img id="image_src"
                            class="img-fluid rounded mt-2"
                            style="max-height: 500px;">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select id="edit_current_status" class="form-select" name="edit_current_status">
                            <option value="Drafted">Drafted</option>
                            <option value="Published">Published</option>
                            <option value="Archived">Archived</option>
                        </select>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success" id="post_id_holder" onclick="updateConfirmation(this.value)">Save Changes</button>
                </div>

            </form>
        </div>
    </div>
</div>

<script>
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

            const data = await res.json();

            document.getElementById("post_title_header").textContent = data.post_title;
            document.getElementById("edit_post_title").value = data.post_title;
            document.getElementById("edit_post_caption").value = data.post_caption;
            document.getElementById("image_src").src = data.image_src;
            document.getElementById("edit_current_status").value = data.status;
            document.getElementById("post_id_holder").value = data.post_id;


        } catch {

        }
    }

    function updateConfirmation(post_id) {
        Swal.fire({
            title: "Are you sure?",
            text: `Update Announcement?`,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#198754",
            confirmButtonText: "Save Changes"
        }).then((result) => {
            if (result.isConfirmed) {
                updatePost(post_id);
            }
        });
    }

    async function updatePost(post_id) {

        const editForm = document.getElementById("editPostForm");
        const editFormData = new FormData(editForm);
        editFormData.append('action', 'update');
        editFormData.append('post_id', post_id);

        try {
            const res = await fetch('./../../../api/PostController.php', {
                method: 'POST',
                body: editFormData,
                credentials: 'same-origin',
            });

            if (!res.ok) throw new Error('Network response Error');

            const data = await res.json();

            if (data.success) {
                loadPosts();
                Swal.fire({
                    title: "Update Successful",
                    text: "This Post has been configured.",
                    icon: "success",
                    timer: 2000,
                    showConfirmButton: false
                });
            } else {
                Swal.fire({
                    title: "Update Unsuccessful",
                    text: "Post Configuration Failed.",
                    icon: "error",
                    timer: 2000,
                    showConfirmButton: false,
                });
            }

        } catch {

        } finally {

        }

    }
</script>