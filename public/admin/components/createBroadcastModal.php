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
                        <input type="text" class="form-control" name="title" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Announcement Message</label>
                        <textarea class="form-control" rows="4" name="announcement_message" required></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Theme Color</label>
                            <select class="form-select" name="theme_color" required>
                                <option value="bg-success">Green (Important)</option>
                                <option value="bg-primary">Blue (General)</option>
                                <option value="bg-warning">Yellow (Reminder)</option>
                                <option value="bg-danger">Red (Urgent)</option>
                                <option value="bg-dark">Dark (Neutral)</option>
                            </select>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label">Expiration Date</label>
                            <input type="date" class="form-control" name="expires_at" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select" name="status" required>
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                            <option value="archived">Archived</option>
                        </select>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success" id="publishBroadcastButton">Publish</button>
                </div>

            </form>

        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const broadcastForm = document.getElementById("broadcastForm");

        broadcastForm.addEventListener('submit', async function(e) {
            e.preventDefault();

            const broadcastFormData = new FormData(broadcastForm);
            broadcastFormData.append('action', 'broadcast');

            const res = await fetch(`./../backend/postAnnouncement.php`, {
                method: 'POST',
                body: broadcastFormData,
                credentials: "same-origin",
            });

            if (!res.ok && res.status !== 200) throw new Error('Network Response Error');

            const data = await res.json();

            if (data.success) {
                Swal.fire({
                    title: "Posted Successfuly",
                    text: "Your Announcement has been posted Successfuly.",
                    icon: "success",
                    timer: 2000,
                    showConfirmButton: false
                });
            } else {
                Swal.fire({
                    title: "Oops",
                    text: "There was an error posting your Announcement",
                    icon: "error",
                    timer: 2000,
                    showConfirmButton: false,
                });
            }


        });

    });
</script>